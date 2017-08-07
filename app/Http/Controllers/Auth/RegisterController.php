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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data, $rules)
    {
        return Validator::make($data, $rules);
    }

    public function viewRegister()
    {
        return view('register');
    }

    public function storeRegister(Request $request)
    {
        $data = $request->all();
        $user = new User();
        $user->fill($data);

        if($request->hasFile('picture'))
        {
            $picture = $request->file('picture');
            $pname = time().'jpg';
            \Storage::disk('public')->put($pname, $picture);
            $user->picture_url = $pname;
        }
        else
        {
            $user->picture_url = "";
        }
        $user->save();

        return view('profile')->with($data);
    }
}
