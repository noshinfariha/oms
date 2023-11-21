<?php

namespace App\Http\Controllers\frontend\User;

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
        return redirect()->back();
    }
}
    

//     //Login Part
// {
//     public function login()
//     {
//         return view('Frontend.Partials.login');
//     }

//     public function doLogin(Request $request)
//     {

       
//         $val = Validator::make($request->all(), [
//             'email' => 'required',
//             'password' => 'required',
//         ]);

//         if($val->fails())
//         {
//            // notify()->error($val->getMessageBag());
//             return redirect()->back();
//         }

//         $credentials=$request->except('_token');
//         // dd($credentials);

//         if(auth()->attempt($credentials))
//         {
//            // notify()->success('Login Success.');
//             return redirect()->route('master');
//         }

//        // notify()->error('Invalid Credentials.');
//             return redirect()->back();
//     }
// {
//     public function logout()
//     {
//         auth()->logout();
//         //notify()->success('Logout Success.');    
//         return redirect()->route('master');
//     }
// }
// }