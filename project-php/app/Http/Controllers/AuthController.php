<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function ShowRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =bcrypt($request->password);
        $user->save();
        return redirect()->route(route:'ShowRegisterForm');
    }

    public function ShowLoginForm(){
        return view('auth.login');
    }

    public function login (Request $request ){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return view('index');
        }
        return view('auth.login');
    }
    public function logout(){
        Auth::logout();
        return view('auth.login');
    }
}
