<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('warga.index', [
            'wargas' => warga::Latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|min:1',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        warga::create($data);

            return back()->with('succes', 'nama warga berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        warga::find($id)->update($data);

            return back()->with('succes', 'nama warga berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        warga::find($id)->delete();

            return back()->with('succes', 'nama warga berhasil di hapus');
    }
}
