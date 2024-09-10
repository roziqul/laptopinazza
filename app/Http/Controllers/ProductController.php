<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCRUD;
use App\CategoryCRUD;
use App\ProcessorCRUD;
use App\VgaCRUD;

class ProductController extends Controller
{
    public function ProductShow()
    {
        $products['products'] = ProductCRUD::all();
        return view('HalamanAdmin.pages.product', ['products' => $products]);
    }

    public function ProductEdit($id_prd)
    {
        $products = ProductCRUD::where('id_prd', $id_prd)->get();
        // dd($products);
        // $category = CategoryCRUD::select()->where('ctg_id', $products->ctg_id)->get();        
        $categories = CategoryCRUD::all();
        return view('HalamanAdmin.pages.EditData.edit-product', compact('products', 'categories'));
    }

    public function ProductUpdate(Request $request)
    {
        $this->validate($request, [
			'img_prd' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$img_prd = $request->file('img_prd');
		$nama_file = time()."_".$img_prd->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'img_prd';
		$img_prd->move($tujuan_upload,$nama_file);

        $products = ProductCRUD::where('id_prd', $request->id_prd)->update([
            'ctg_id' => $request->ctg_id,
            'img_prd' => $nama_file,
            'nama_prd' => $request->nama_prd,
            'hrg_prd' => $request->hrg_prd,
            'garansi_prd' => $request->garansi_prd,
            'processor_prd' => $request->processor_prd,
            'memory_prd' => $request->memory_prd,
            'storage_prd' => $request->storage_prd,
            'graphic_prd' => $request->graphic_prd,
            'display_prd' => $request->display_prd,
            'os_prd' => $request->os_prd,
        ]);
        return redirect('/Admin/Product/Show')->with('success', 'Data berhasil diupdate ! !');
    }

    public function ProductAdd()
    {
        $categories['categories'] = CategoryCRUD::all();
        return view('HalamanAdmin.pages.CreateData.create-product', ['categories'=>$categories]);
    }

    public function ProductSave(Request $request)
    {
        $this->validate($request, [
			'img_prd' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$img_prd = $request->file('img_prd');
		$nama_file = time()."_".$img_prd->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'img_prd';
		$img_prd->move($tujuan_upload,$nama_file);
        
        $products = ProductCRUD::create([
            'ctg_id' => $request->ctg_id,
            'img_prd' => $nama_file,
            'nama_prd' => $request->nama_prd,
            'hrg_prd' => $request->hrg_prd,
            'garansi_prd' => $request->garansi_prd,
            'processor_prd' => $request->processor_prd,
            'memory_prd' => $request->memory_prd,
            'storage_prd' => $request->storage_prd,
            'graphic_prd' => $request->graphic_prd,
            'display_prd' => $request->display_prd,
            'os_prd' => $request->os_prd,
        ]);

        return redirect('Admin/Product/Show')->with('success', 'Data berhasil ditambahkan ! !');
    }

    public function ProductDelete($id_prd){    

        // $img = ProductCRUD::where('id_prd',$id_prd)->first();
		// ProductCRUD::delete('img_prd/'.$img->img_prd);
        
        ProductCRUD::where('id_prd',$id_prd)->delete();
        return redirect('Admin/Product/Show')->with('success', 'Data berhasil dihapus ! !');

    }
}
