<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRole;
use App\Models\Roles;

Route::middleware('auth')->group(function () {
    Route::get('/my-profile', function () {
        $user = Auth::user();
        $admin = false;
        if($user)  {
            $userRole = UserRole::where('id_user', $user->id)->first()->id_role;
            $admin = Roles::where('id', $userRole)->first()->code === 'ADMIN';
        }
        return view('my-profile', ['user' => $user, 'admin'=>$admin]);
    });

    Route::get('/admin', function () {
        $user = Auth::user();
        $admin = false;
        if($user)  {
            $userRole = UserRole::where('id_user', $user->id)->first()->id_role;
            $admin = Roles::where('id', $userRole)->first()->code === 'ADMIN';
        }
        return $admin ? view('admin', ['user' => $user, 'admin'=>$admin]) : redirect(route('home'));
    });

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', function () {
        return view('register');
    });
    
    Route::get('/login', function () {
        return view('login');
    });
});

Route::get('/', function () {
    $user = Auth::user();
    $admin = false;
    if($user)  {
        $userRole = UserRole::where('id_user', $user->id)->first()->id_role;
        $admin = Roles::where('id', $userRole)->first()->code === 'ADMIN';
    }
    return view('home', ['admin' => $admin]);
})->name('home');



Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/user', [UserController::class, 'user'])->name('user');