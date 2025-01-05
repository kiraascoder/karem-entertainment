<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class AdminController extends Controller
{


    // Untuk Menampilkan Tampilan Manager

    function index()
    {
        return view('manager');
    }
}
