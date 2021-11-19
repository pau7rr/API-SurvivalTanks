<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    function check(Request $request){
        //Validate Requests
        $request->validate([
            'username' => 'required|min:5|max:10',
            'password' => 'required'
        ]);
        //If form is validated successfuly, then login user
        $admin = Admin::where('username', '=', $request->username)->first();
        
        if($admin){
            if(Hash::check($request->password, $admin->password)){
                //If password and username correct, then redirect user to profile
                $request->session()->put('LoggedUser', $admin->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'Username or password incorrect!');
            }
        }else{
            return back()->with('fail', 'Username or password incorrect!');
        }
    }

    function logout(){
        //Check if User is logged
        if(session()->has('LoggedUser')){
            //Logout User and return to Login page
            session()->pull('LoggedUser');
        }
        return redirect('/');
    }
}
