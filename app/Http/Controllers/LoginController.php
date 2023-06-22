<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Logika validasi login
        if ($username === 'admin' && $password === 'password') {
            // Login berhasil
            return redirect('/dashboard');
        } else {
            // Login gagal
            return redirect('/login')->with('message', 'Username atau password salah.');
        }
    }
}
