<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Level::all();
        return view('admin.level.index', compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.level.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_level' => 'required',
        ]);
        Level::create([
            'nama_level' => $request->nama_level
        ]);
        return redirect()->route('level.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $edit = Level::findOrFail($id);
        return view('admin.level.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $levels = Level::findOrFail($id);
        $request->validate([
            'nama_level' => 'required',
        ]);
        Level::where('id', $id)->update([
            'nama_level' => $request->nama_level,
        ]);
        return redirect()->route('level.index')->with('success', 'Data Jurusan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $levels = Level::findOrFail($id);
        $levels->delete();
        return redirect()->route('level.index')->with('success', 'Data Jurusan berhasil dihapus');
    }
}
