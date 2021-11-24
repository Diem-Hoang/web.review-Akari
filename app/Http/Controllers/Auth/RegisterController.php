<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;

class RegisterController extends Controller
{
    /**
     * Show the user register form
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegisterForm()
    {
        return view('web.register');
    }

    /**
     * Register account
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function register(UserRequest $request)
    {
        if($request->input('password') === $request->input('repassword')) {
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);
            return redirect()->route('web.form.login')->with('success','Register successfully');
        }else {
            return redirect()->back()->with('invalid','Password is not match');
        }
    }
}
