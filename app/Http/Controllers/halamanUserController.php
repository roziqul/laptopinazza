<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCRUD;
use App\CategoryCRUD;

class halamanUserController extends Controller
{
    public function tampilAllProduct()
    {
        $products = ProductCRUD::all();
        return view('HalamanUser.index', compact('products'));
    }

    public function tampilDetailProduct($id_prd)
    {
        $products = ProductCRUD::where('id_prd', $id_prd)->get();      
        $categories = CategoryCRUD::all();
        return view('HalamanUser.productdetails', compact('products', 'categories'));
    }

}
