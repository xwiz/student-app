<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class LoginController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $email = $request->get('email');
        if(\Auth::attempt([
            'email' => $email,
            'password' => $request->get('password')
            ]))
        {
            $user = User::where('email', $email)->first();
            return redirect('profile/'.$user->id);
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
