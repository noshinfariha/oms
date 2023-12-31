<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Adoption;
use App\Models\Donor;
use App\Models\Orphan;
use App\Models\Parents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller

{

    public function store(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(),[
            'email'=> 'required',
            'phone'=> 'required|min:11|max:11',
        ]);
        if($validate->fails()){
            notify()->success('User registration success ');
            return redirect()->back();
        }

       
        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'role' => 'user',
            'password' => bcrypt($request->password),
        ]);
        notify()->success('User registration success ');
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

        if ($validator->fails()) {
            notify()->error('somthing is wrong');
            return redirect()->back()->withErrors($validator);
        }
        $credentials = $request->except('_token');

        if (auth()->attempt($credentials)) {
            notify()->success('Welcome to CHILD CARE');
            return redirect()->route('frontend');
        }
        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        notify()->success('user logout success');
        return redirect()->route('frontend');
    }

    public function userprofile(){
         
        $adoptions = Adoption::with('orphans')->where('user_id',auth()->user()->id)->get();
         

        return view('Frontend.pages.pages.Profile.profile',compact('adoptions'));
    }
}
