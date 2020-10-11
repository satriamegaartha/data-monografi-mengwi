<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }

        return redirect('/login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5',
            // 'role' => 'required',
            'alamat' => 'required',

        ]);

        $user = new User;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        // $user->role = $request->role;
        $user->role = 'Petugas';
        $user->alamat = $request->alamat;
        $user->remember_token = Str::random(60);
        $user->save();

        return redirect('/login')->with('message', 'Registrasi Berhasil');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
