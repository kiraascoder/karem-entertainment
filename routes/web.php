<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TeamController;

// Halaman Statis
Route::get('/', function () {
    return view('home');
});
Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/review', function () {
    return view('review');
});

Route::get('/account', function () {

    return view('account');
})->name('account');
Route::get('/category', function () {
    return view('category');
});
Route::get('/edit-account', function () {
    return view('editaccount');
});

Route::get('/order-list', function () {
    return view('order-list');
});

// Rute untuk Manager, Management, dan Order List
Route::middleware(['auth'])->group(function () {
    Route::get('/manager', [SesiController::class, 'index'])->middleware('userAkses:manager');
    Route::get('/management', function () {
        return view('management');
    });
    Route::get('/orderlist', function () {
        return view('orderlist');
    });

    // Team Routes (Hanya untuk eventorganizer)
    Route::get('/team', [SesiController::class, 'team'])->middleware('userAkses:eventorganizer');

    // Logout Route
    Route::get('/logout', [SesiController::class, 'logout']);

    // Menampilkan form untuk membuat tim
    Route::get('/create-team', [TeamController::class, 'createTeamForm'])->name('team.createForm');
    // Menangani pengiriman form pembuatan tim
    Route::post('/create-team', [TeamController::class, 'createTeam'])->name('team.create');
    Route::post('/user/{userId}/role', [TeamController::class, 'updateRole'])->name('user.updateRole');
    Route::get('/manager', [TeamController::class, 'showManagerPage'])->name('manager.page');
});

// Halaman Register dan Login untuk Guest
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'vlogin'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);

    // Register Routes
    Route::get('/register', [SesiController::class, 'showRegistrationForm'])->name('registerForm');
    Route::post('/register', [SesiController::class, 'register'])->name('register');
});

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');
