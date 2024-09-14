<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels = Level::get();
        return view('admin.user.create', compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'id_level' =>  'required',
        //     'name_lengkap' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|password|min:8'
        // ]);

        User::create([
            'id_level' => $request->id_level,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password)
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
        $levels = Level::get();
        $edit = User::findOrFail($id);
        return view('admin.user.edit', compact('edit', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::findOrFail($id);
        // $request->validate([
        //     'id_level' =>  'required',
        //     'name_lengkap' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|password|min:8'
        // ]);

        User::where('id', $id)->update([
            'id_level' => $request->id_level,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => ($request->password ? Hash::make($request->password) : $users->password)
        ]);

        return redirect()->route('user.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus');
    }
}
