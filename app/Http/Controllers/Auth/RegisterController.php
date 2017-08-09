<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function viewRegister()
    {
        return view('register');
    }

    public function storeRegister(Request $request)
    {
        $data = $request->all();
        $user = new User();
        $validator = $this->validator($data, $user->rules);
        if(!$validator->passes())
        {
            $request->flash();
            return view('register')->withErrors($validator);
        }

        $user->fill($data);

        if($request->hasFile('picture'))
        {
            $picture = $request->file('picture');
            $pname = \Storage::disk('public')->put("images", $picture);
            $user->picture_url = $pname;
        }
        else
        {
            $user->picture_url = "";
        }
        $user->password = bcrypt($user->password);
        $user->save();

        return redirect('profile/'.$user->id);
    }
}
