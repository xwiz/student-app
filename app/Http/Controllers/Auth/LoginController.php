<?php

namespace App\Http\Controllers\Auth;

use Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
            ]))
        {
            return 'You are logged in boolah.';
        }
        else
        {
            return view('login')->with('error', "That thing you wrote didn't work");
        }
    }



    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

}
