<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinkCRUD;

class LinkController extends Controller
{
    public function LinkShow()
    {
        $links['links'] = LinkCRUD::all();
        return view('HalamanAdmin.pages.link', ['links' => $links]);
    }

    public function LinkEdit($id_link)
    {
        $links = LinkCRUD::select()->where('id_link', $id_link)->get();
        return view('HalamanAdmin.pages.EditData.edit-link', compact('links'));
    }

    public function LinkUpdate(Request $request)
    {
        $Links = LinkCRUD::where('id_link', $request->id_link)->update([
            'name' => $request->nameLink,
            'id_footer' => 1
        ]);
        return redirect('/Admin/Link/Show')->with('success', 'Data berhasil diupdate ! !');
    }

    public function LinkAdd()
    {
        return view('HalamanAdmin.pages.CreateData.create-link');
    }

    public function LinkSave(Request $request)
    {
        $Links = LinkCRUD::create([
            'name' => $request->nameLink,
            'id_footer' => 1
        ]);
        return redirect('Admin/Link/Show')->with('success', 'Data berhasil ditambahkan ! !');
    }
}
