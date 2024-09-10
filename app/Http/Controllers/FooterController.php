<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterCRUD;

class FooterController extends Controller
{
    public function FooterShow()
    {
        $footer['footer'] = FooterCRUD::all();
        return view('HalamanAdmin.pages.footer', ['footer' => $footer]);
    }

    public function FooterEdit()
    {
        $footer = FooterCRUD::where('id', '1')->get();
        return view('HalamanAdmin.pages.EditData.edit-footer', compact('footer'));
    }

    public function FooterUpdate(Request $request)
    {
        $footer = FooterCRUD::where('id', $request->id)->update([
            'about_us' => $request->aboutUs,
            'address' => $request->address
        ]);
        return redirect('/Admin/Footer/Show')->with('success', 'Data berhasil diupdate ! !');
    }
}
