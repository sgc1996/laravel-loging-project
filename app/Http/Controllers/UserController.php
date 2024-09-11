<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registrationView(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('register.registerForm');
    }

    public function userRegister(Request $request)
    {
         $validateRequest = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'unique:users', 'max:50'],
            'password' => ['required', 'string', 'max:10'],
        ]);

         if ($validateRequest) {
             $user = new User();
             $user->first_name = $validateRequest['first_name'];
             $user->last_name = $validateRequest['last_name'];
             $user->email = $validateRequest['email'];
             $user->password = $validateRequest['password'];

             $user->save();

             session()->flash('success', 'Registration successful!');
             return redirect()->route('register-view');
         }
    }
}
