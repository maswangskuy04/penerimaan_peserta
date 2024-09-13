<?php

namespace App\Http\Controllers;

use App\Models\PesertaPelatihan;
use Illuminate\Http\Request;

class PesertaPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesertaPelatihan = PesertaPelatihan::all();
        return view('admin.peserta-pelatihan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.peserta-pelatihan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PesertaPelatihan $pesertaPelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $edit = PesertaPelatihan::findOrFail($id);
        return view('admin.peserta-pelatihan.edit', compact('pesertaPelatihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $pesertaPelatihan = PesertaPelatihan::findOrFail($id);
        $request->validate([
            'id_jurusan' => 'required|string',
            'id_gelombang' => 'required|string',
            'nama_lengkap' => 'required|string',
            'nik' => 'required|string',
            'kartu_keluarga' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'pendidikan_terakhir' => 'required|string',
            'nama_sekolah' => 'required|string',
            'kejuruan' => 'required|string',
            'nomor_hp' => 'required|string',
            'email' => 'required|string',
            'aktivitas_saat_ini' => 'required|string',
            'status' => 'required|string',
        ]);
        $pesertaPelatihan->update($request->all());
        return redirect()->route('peserta-pelatihan.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $pesertaPelatihan = PesertaPelatihan::findOrFind($id);
        $pesertaPelatihan->delete();
        return redirect()->route('peserta-pelatihan.index')->with('success', 'Data Berhasil Dihapus');
    }
}
