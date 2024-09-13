<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_lengkap' => 'required',
            'email' => 'required|email|unique:users',
        ]);
        $user = User::create([
            'name_lengkap' => $request->name_lengkap,
            'email' => $request->email,
        ]);
        return redirect()->route('user.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $edit = User::findOrFail($id);
        return view('admin.user.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name_lengkap' => 'required',
            'email' => 'required|email|unique:users',
        ]);
        $user = User::create([
            'name_lengkap' => $request->name_lengkap,
            'email' => $request->email,
        ]);
        return redirect()->route('user.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFind($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus');
    }
}
