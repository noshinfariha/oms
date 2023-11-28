<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller

{

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'customer',
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('frontend');
    }




    // Login Section
    public function login()
    {
        return view('Frontend.Login.login');
    }

    public function userlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $credentials = $request->except('_token');

        if (auth()->attempt($credentials)){
            return redirect()->route('frontend');
        }
        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('frontend');
    }
}
