<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('admin.jurusan.index', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required',
        ]);
        Jurusan::create($request->all());
        return redirect()->route('jurusan.index')->with('success', 'Data Jurusan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Jurusan::findOrFail();
        return view('admin.jurusan.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $jurusans = Jurusan::findOrFail();
        $request->validate([
            'nama_jurusan' => 'required',
        ]);
        $jurusans->update($request->all());
        return redirect()->route('jurusan.index')->with('success', 'Data Jurusan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jurusans = Jurusan::findOrFail($id);
        $jurusans->delete();
        return redirect()->route('jurusan.index')->with('success', 'Data Jurusan Berhasil Dihapus');
    }
}
