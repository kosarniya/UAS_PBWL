<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
Use App\Models\informasi;
Use App\Models\jenis;
Use App\Models\warga;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $war = Warga::all();
        $jen = Jenis::all();
        return view('informasi.index', ['informasi'=> Informasi::with('Jenis', 'Wargas')->latest()->get() ] ,compact('jen', 'war')); 
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jenis_id' => 'required',
            'wargas_id' => 'required',
            'desc' => 'required',
            'status' => 'required',
            'publish_date' => 'required',
        ]);

        Informasi::create($data);
        return back()->with('succes', 'Informasi ditambahkan');


    }

    public function update(Request $request, string $id)
    {
    $data = $request->validate([
        'jenis_id' => 'required|min:1',
        'wargas_id' => 'required',
        'desc' => 'required',
        'status' => 'required',
    ]);

    informasi::find($id)->update($data);

    return back()->with('succes', 'jenis bantuan berhasil di ubah');
    }


    public function destroy(string $id)
    {
        informasi::find($id)->delete();

            return back()->with('succes', 'jenis bantuan berhasil di hapus');
    }
}
