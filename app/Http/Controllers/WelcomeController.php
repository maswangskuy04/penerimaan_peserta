<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Gelombangs;
use Illuminate\Http\Request;
use App\Models\PesertaPelatihan;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusans = Jurusan::get();
        $gelombangs = Gelombangs::get();
        return view('welcome', compact('jurusans', 'gelombangs'));
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
            'id_jurusan' => 'required|exists:jurusans,id',
            'id_gelombang' => 'required|exists:gelombangs,id',
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'kartu_keluarga' => 'required|string|max:16',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required|string|max:255',
            'nama_sekolah' => 'required|string|max:255',
            'no_hp' => 'required|string|max:13',
            'email' => 'required|email|unique:peserta_pelatihans,email',
            'aktivitas_saat_ini' => 'required|string|max:255',
        ]);

        PesertaPelatihan::create([
            'id_jurusan' => $request->id_jurusan,
            'id_gelombang' => $request->id_gelombang,
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'kartu_keluarga' => $request->kartu_keluarga,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'nama_sekolah' => $request->nama_sekolah,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'aktivitas_saat_ini' => $request->aktivitas_saat_ini
        ]);

        return redirect()->back()->with('message', 'Berhasil mendaftar bosquee');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
