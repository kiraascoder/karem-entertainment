<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TeamMemberController;

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
    Route::get('/manager', [TeamController::class, 'showManagerPage'])->name('manager.page')->middleware('userAkses:manager');
    Route::get('/management', [TeamController::class, 'showManagementPage'])->name('management.page')->middleware('userAkses:manager');

    Route::get('/account', function () {
        return view('account');
    })->name('account')->middleware('userAkses:user');
    Route::post('/booking', [OrderController::class, 'store'])->name('order.store');
    Route::get('/account', [OrderController::class, 'showMyOrderList'])->name('account');
    Route::get('/management', [TeamController::class, 'showTeams'])->name('management.page')->middleware('userAkses:manager');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'vlogin'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
    Route::get('/register', [SesiController::class, 'showRegistrationForm'])->name('registerForm');
    Route::post('/register', [SesiController::class, 'register'])->name('register');
});

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');



Route::middleware(['userAkses:manager'])->group(function () {
    Route::get('/add-employee', function () {
        return view('add-employee');
    });
    Route::post('/manager/add-employee', [TeamController::class, 'storeUser'])->name('manager.addEmployee');
    Route::get('/add-teams', function () {
        return view('add-teams');
    });
    Route::get('/order-list', [OrderController::class, 'showOrderList'])->name('order.list');
    Route::get('/add-teams', [TeamController::class, 'createTeamsView'])->name('teams.create');
    Route::post('/manager/add-teams', [TeamController::class, 'store'])->name('manager.addTeams');
    Route::get('management/add-members', function () {
        return view('add-members');
    });
    Route::get('/management/{team}/add-members', [TeamMemberController::class, 'createTeamMemberView'])->name('add-members.page');
    Route::post('management/{teams}/add-members', [TeamMemberController::class, 'addMember'])->name('teams.addMember');
    Route::post('management/{teams}/add-members', [TeamMemberController::class, 'addMember'])->name('teams.addMember');
    Route::post('management/{team}/remove-members', [TeamMemberController::class, 'removeMember'])->name('teams.removeMember');
});
