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
        $pesertas = PesertaPelatihan::all();
        return view('admin.peserta-pelatihan.index', compact('pesertas'));
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
            'nomor_hp' => 'required|string|numeric',
            'email' => 'required|string|unique',
            'aktivitas_saat_ini' => 'required|string',
        ]);
        PesertaPelatihan::create($request->all());
        return redirect()->route('peserta-pelatihan.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $peserta = PesertaPelatihan::findOrFail($id);
        return view('admin.peserta-pelatihan.detail', compact('peserta'));
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
            'status' => 'integer|required',
        ]);
        $pesertaPelatihan->update($request->all());
        return redirect()->route('peserta-pelatihan.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $pesertaPelatihan = PesertaPelatihan::findOrFail($id);
        $pesertaPelatihan->delete();
        return redirect()->route('peserta-pelatihan.index')->with('success', 'Data Berhasil Dihapus');
    }

    public function updateStatus(Request $request, $id)
    {
        $pesertaPelatihan = PesertaPelatihan::findOrFail($id);
        $pesertaPelatihan->status = $request->status;
        $pesertaPelatihan->save();

        return response()->json(['message' => 'Data berhasil broo']);
    }
}
