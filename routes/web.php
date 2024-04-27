<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRole;
use App\Models\User;
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
        $users = User::where('id', '<>', $user->id)->where('id', '<>', '1')->get();
        foreach($users as $u) {
            $userRole = UserRole::where('id_user', $u->id)->first()->id_role;
            $u->role = Roles::where('id', $userRole)->first()->code;
        }
        return $admin ? view('admin', ['user' => $user, 'admin'=>$admin, 'users'=>$users]) : redirect(route('home'));
    });

    Route::delete('/user/{user}',  [UserController::class, 'delete'])->name('delete');
    Route::put('/change-rol/{user}',  [UserController::class, 'changeRol'])->name('changeRol');

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