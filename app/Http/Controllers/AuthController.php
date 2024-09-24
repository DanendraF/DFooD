<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form pendaftaran
    public function showRegistrationForm()
    {
        return view('auth.register'); // Mengarahkan ke view form pendaftaran
    }

    // Proses pendaftaran
    public function register(Request $request)
    {
        // Validasi data yang dikirimkan
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);
    
        // Membuat pengguna baru
        $user = \App\Models\User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        // Autentikasi pengguna
        auth()->login($user);
    
        // Redirect dengan pesan berhasil
        return redirect()->route('home')->with('status', 'Registration successful!');
    }

    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login'); // Mengarahkan ke view form login
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi data yang dikirimkan
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Cek kredensial pengguna
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect setelah login
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('home');
        }

        // Jika login gagal
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Logout pengguna

}
