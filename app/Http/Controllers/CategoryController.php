<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryCRUD;

class CategoryController extends Controller
{
    public function CategoryShow()
    {
        $categories['categories'] = CategoryCRUD::all();
        return view('HalamanAdmin.pages.category', ['categories'=>$categories]);
    }

    public function CategoryEdit($ctg_id)
    {
        $categories = CategoryCRUD::select()->where('ctg_id', $ctg_id)->get();
        return view('HalamanAdmin.pages.EditData.edit-category', compact('categories'));
    }

    public function CategoryUpdate(Request $request)
    {   
        $this->validate($request, [
			'ctg_img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$ctg_img = $request->file('ctg_img');
		$nama_file = time()."_".$ctg_img->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'img_category';
		$ctg_img->move($tujuan_upload,$nama_file);

        $categories = CategoryCRUD::where('ctg_id', $request->ctg_id)->update([
            'ctg_img' => $nama_file,
            'ctg_name' => $request->ctg_name,
        ]);
        return redirect('/Admin/Category/Show')->with('success', 'Data berhasil diupdate ! !');
    }

    public function CategoryAdd()
    {
        // $category['categories'] = CategoryCRUD::all();
        // return view('HalamanAdmin.pages.CreateData.create-category', compact('categories'));
        return view('HalamanAdmin.pages.CreateData.create-category');
    }

    public function CategorySave(Request $request)
    {
        $this->validate($request, [
			'ctg_img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$ctg_img = $request->file('ctg_img');
		$nama_file = time()."_".$ctg_img->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'img_category';
		$ctg_img->move($tujuan_upload,$nama_file);
        
        $category = CategoryCRUD::create([
            'ctg_img' => $nama_file,
            'ctg_name' => $request->ctg_name,
        ]);

        return redirect('Admin/Category/Show')->with('success', 'Data berhasil ditambahkan ! !');
    }

    // public function CategoryAdd()
    // {
    //     return view('HalamanAdmin.pages.CreateData.create-category');
    // }

    // public function CategorySave(Request $request)
    // {
    //     $this->validate($request, [
	// 		'ctg_img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
	// 	]);
 
	// 	// menyimpan data file yang diupload ke variabel $file
	// 	$ctg_img = $request->file('ctg_img');
	// 	$nmf = time()."_".$ctg_img->getClientOriginalName();
    //   	// isi dengan nama folder tempat kemana file diupload
	// 	$tujuan_upload = 'img_category';
	// 	$ctg_img->move($tujuan_upload,$nmf);


    //     $categories = CategoryCRUD::create([
    //         'ctg_img' => $nmf,
    //         'ctg_name' => $request->ctg_name,
    //     ]);
    //     return view('HalamanAdmin.pages.category', ['categories'=>$categories])->with('success', 'Data berhasil ditambahkan ! !');
    // }

    public function CategoryDelete($ctg_id){    

        // $img = ProductCRUD::where('id_prd',$id_prd)->first();
		// ProductCRUD::delete('img_prd/'.$img->img_prd);
        
        CategoryCRUD::where('ctg_id',$ctg_id)->delete();
        return redirect('Admin/Category/Show')->with('success', 'Data berhasil dihapus ! !');

    }

}
