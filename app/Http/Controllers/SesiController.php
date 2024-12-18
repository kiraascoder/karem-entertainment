<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{

    function vlogin()
    {
        return view('login');
    }
    function index()
    {
        return view('manager');
    }

    function team()
    {
        return view('team');
    }
    // Proses login
    function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email', // Validasi email harus ada dan dalam format yang benar
            'password' => 'required|min:6', // Validasi password minimal 6 karakter
        ], [
            'email.required' => 'Silahkan Masukkan Email Anda',
            'email.email' => 'Format email yang Anda masukkan tidak valid',
            'password.required' => 'Silahkan Masukkan Password Anda',
            'password.min' => 'Password minimal terdiri dari 6 karakter',
        ]);

        // Data login
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Mencoba login
        if (Auth::attempt($infologin, $request->has('remember'))) {
            if (Auth::user()->role == 'manager') {
                return redirect('/manager');
            } elseif (Auth::user()->role == 'eventorganizer') {
                return redirect('/team');
            } elseif (Auth::user()->role == 'user') {
                return redirect('/');
            }
        } else {
            return redirect('/login')->withErrors(['login' => 'Login Gagal, Email atau Password tidak sesuai!'])->withInput();
        }
    }

    // Logout
    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    // Regist View
    public function showRegistrationForm()
    {
        return view('register');
    }
    // Proses registrasi
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Silahkan Masukkan Email Anda',
            'email.email' => 'Format email yang Anda masukkan tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Silahkan Masukkan Password Anda',
            'password.min' => 'Password minimal terdiri dari 6 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok',
        ]);

        // Mendaftar pengguna baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);  // Menggunakan hash untuk menyimpan password
        $user->role = 'user';  // Set role default sebagai 'user'
        $user->save();

        // Login otomatis setelah registrasi
        Auth::login($user);

        return redirect('/');  // Arahkan pengguna ke halaman utama setelah berhasil registrasi
    }
}
