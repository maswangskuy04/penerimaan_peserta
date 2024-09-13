<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Http\Requests\StoreLevelRequest;
use App\Http\Requests\UpdateLevelRequest;
use App\Http\Controllers\Request;
class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Level::all();
        return view('admin.level.index',  compact('levels'));
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
            'name_level' => 'required',
        ]);
        $levels = Level::create([
            'nama_level' => $request->nama_level,
        ]);
        return redirect()->route('level.index')->with('success', 'Data Berhasil Ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $edit = Level::findOrFail($id);
        return view('admin.level.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $levels = Level::findOrFail($id);
        $request->validate([
            'nama_level' => 'required',
        ]);

        $levels = Level::create([
            'nama_level' => $request->nama_level,
        ]);
        return redirect()->route('level.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $levels = Level::findOrFind($id);
        $levels->delete();
        return redirect()->route('level.index')->with('success', 'Data Berhasil Dihapus');
    }
}
