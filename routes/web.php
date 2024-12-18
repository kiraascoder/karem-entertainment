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

Route::get('/categories', function () {
    return view('categories');
});
Route::get('/edit-account', function () {
    return view('editaccount');
});

Route::get('/order-list', function () {
    return view('order-list');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/manager', [SesiController::class, 'index'])->middleware('userAkses:manager');
    Route::get('/management', function () {
        return view('management');
    });
    Route::get('/orderlist', function () {
        return view('orderlist');
    });
    Route::get('/team', [SesiController::class, 'team'])->middleware('userAkses:eventorganizer');
    Route::get('/logout', [SesiController::class, 'logout']);
    Route::get('/create-team', [TeamController::class, 'createTeamForm'])->name('team.createForm');
    Route::post('/create-team', [TeamController::class, 'createTeam'])->name('team.create');
    Route::post('/user/{userId}/role', [TeamController::class, 'updateRole'])->name('user.updateRole');
    Route::get('/manager', [TeamController::class, 'showManagerPage'])->name('manager.page')->middleware('userAkses:manager');
    Route::get('/account', function () {

        return view('account');
    })->name('account');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'vlogin'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
    Route::get('/register', [SesiController::class, 'showRegistrationForm'])->name('registerForm');
    Route::post('/register', [SesiController::class, 'register'])->name('register');
});

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');
