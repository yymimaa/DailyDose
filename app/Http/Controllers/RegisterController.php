<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed',
            'no_hp' => 'required',
        ]);

        // Tentukan role berdasarkan akhiran username
        if (Str::endsWith($request->username, 'ADM')) {
            $role = 'admin';
        } elseif (Str::endsWith($request->username, 'OWN')) {
            $role = 'pemilik';
        } else {
            $role = 'pelanggan';
        }

        // Simpan user
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'role' => $role,
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }
}
