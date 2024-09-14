<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email', $email)->first();

        if($data) {
            if(Hash::check($password, $data->password)) {
                Auth::login($data);
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('login')->with('message', 'Email atau Password salah!');
            }
        } else {
            return redirect()->route('login')->with('message', 'Email atau Password salah!');
        }
    }

    public function actionLogout(Request $request)
    {
        Auth::logout();
        Session::flush();

        return redirect()->route('login')->with('success', 'Anda telah logout!');
    }
}
