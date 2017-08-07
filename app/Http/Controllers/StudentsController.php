<?php

use App\User;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

class StudentsController extends Controller
{

    public function profiles()
    {
        return view('profiles')->withUsers(User::all());
    }

    public function viewProfile(Request $request, User $u)
    {
    	return view('profile')->with($u->toArray());
    }

    public function search(Request $request)
    {
    	$keyword = $request->get('keyword');
    	$results = User::where('first_name', 'LIKE', $keyword)
    	->orWhere('last_name', 'LIKE', $keyword)->get();
    	return view('search_results')->withResults($results);
    }

}
