<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $admin = $request->admin;
        
        if($user->save()){
            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){
                $userLogged = Auth::user();
                $userRole = new UserRole();
                $userRole->id_user = $user->id;
                $userRole->id_role = $admin ? 1 : 2;
                $userRole->save();
                return redirect()->intended(route('home'));
            }

            return redirect()->intended(route('register'));
        }
        return redirect(route('register'))->with('error', 'Failed to create user');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $userLogged = Auth::user();
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error', 'Invalid credentials');
    }

    function logout(Request $request){
        Auth::logout();
        return redirect(route('login'));
    }
}
