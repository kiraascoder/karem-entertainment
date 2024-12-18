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

    function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Silahkan Masukkan Email Anda',
            'email.email' => 'Format email yang Anda masukkan tidak valid',
            'password.required' => 'Silahkan Masukkan Password Anda',
            'password.min' => 'Password minimal terdiri dari 6 karakter',
        ]);


        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];


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


    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }


    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {

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


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->save();


        Auth::login($user);

        return redirect('/');
    }
}
