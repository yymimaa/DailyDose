<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('username', 'password'))) {

            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else if ($user->role == 'pemilik') {
                return redirect()->route('owner.dashboard');
            } else {
                return redirect()->route('pelanggan.reservasi');
            }


            return redirect('/login')->withErrors('Role tidak dikenali.');
        }

        return back()->withErrors('Username atau password salah.');
    }

}
