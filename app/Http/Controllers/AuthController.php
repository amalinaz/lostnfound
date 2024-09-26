<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function loginPage(){
        return view('login');
    }

    public function login(Request $request){
        $credentials =
        [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if($request->remember)
        {
            Cookie::queue('mycookie', $request->email, 5);
        }

        if(Auth::attempt($credentials, true))
        {
            Session::put('mysession', '');
            return redirect()->back();
        }

        return 'fail';
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
