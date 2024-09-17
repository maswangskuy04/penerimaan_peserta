<?php

namespace App\Http\Controllers;

use App\Models\Gelombangs;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GelombangsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombangs = Gelombangs::all();
        return view('admin.gelombang.index', compact('gelombangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gelombang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_gelombang' => 'required',
        ]);
        Gelombangs::create($request->all());
        return redirect()->route('gelombangs.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gelombangs $gelombangs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $edit =  Gelombangs::findOrFail($id);
        return view('admin.gelombang.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $gelombangs = Gelombangs::findOrFail($id);
        $request->validate([
            'nama_gelombang' => 'required',
            'aktif' => 'integer|required'
        ]);
        $gelombangs->update($request->all());
        return redirect()->route('gelombangs.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $gelombangs = Gelombangs::findOrFail($id);
        $gelombangs->delete();
        return redirect()->route('gelombangs.index')->with('success', 'Data berhasil dihapus');
    }

    public function updateStatus($id): JsonResponse
    {
        Gelombangs::where('id', '!=', $id)->update(['aktif' => 0]);
        $gelombang = Gelombangs::findOrFail($id);
        $gelombang->aktif = 1;
        $gelombang->save();

        return response()->json(['success' => 'Status gelombang sudah aktif']);
    }
}
