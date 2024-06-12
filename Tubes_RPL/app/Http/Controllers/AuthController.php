<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('landing.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email_consumer', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return redirect('login')->with('error', 'Invalid email or password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function showRegistrationForm()
    {
        return view('landing.signup');
    }

    public function register(Request $request)
    {
        // Validasi request
        $validatedData = $request->validate([
            'nama_consumer' => 'required|max:255',
            'email_consumer' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);

        try {
            // Proses pendaftaran
            User::create([
                'name' => $validatedData['nama_consumer'],
                'email' => $validatedData['email_consumer'],
                'password' => Hash::make($validatedData['password']),
            ]);

            // Redirect dengan pesan sukses
            return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan login.');
        } catch (\Exception $e) {
            // Redirect dengan pesan error
            return back()->with('error', 'Pendaftaran gagal! Silakan coba lagi.');
        }
    }
}
