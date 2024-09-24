<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardAController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna
        $users = User::all();
        //dd($users);
        return view ('admin.dashboard', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
    
        return redirect()->route('admin.dashboard')->with('status', 'User deleted successfully!');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Melakukan logout
        $request->session()->invalidate(); // Menghapus session
        $request->session()->regenerateToken(); // Regenerasi CSRF token
        return redirect()->route('login'); // Redirect ke halaman login
    }
    
}