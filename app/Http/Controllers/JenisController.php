<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('jenis.index', [
            'jenis' => jenis::Latest()->get()
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
            'jenis' => 'required|min:1',
            'tanggal' => 'required',
            'banyak' => 'required',
        ]);

        jenis::create($data);

            return back()->with('succes', 'jenis bantuan berhasil ditambahkan');
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
            'jenis' => 'required|min:1',
            'tanggal' => 'required',
            'banyak' => 'required',
        ]);

        jenis::find($id)->update($data);

            return back()->with('succes', 'jenis bantuan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        jenis::find($id)->delete();

            return back()->with('succes', 'jenis bantuan berhasil di hapus');
    }
}
