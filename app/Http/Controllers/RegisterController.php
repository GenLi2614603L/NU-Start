<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{

    public function index(){
        return view('register.index');
    }

    public function register(){
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'email','max:255','unique:users,email'],
            'password' => 'required|min:6|max:255',
        ]);
//        $attributes['password']=bcrypt($attributes['password']);

        $user = User::create([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'password' => bcrypt($attributes['password']),
        ]);

        session()->flash('success',$attributes['name']);

        auth()->login($user);

        return redirect('/');
    }

    public function login()
    {
        $email = request('email');
        $password = request('password');
        print_r(['email' => $email, 'password' => $password]);
        if (\Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/');
        } else {
            return redirect('/register');

        }
    }

    public function logout(){
        auth()->logout();
        return redirect(('/'));
    }
}
