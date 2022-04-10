<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function username()
    {
	    return 'username';
    }
    public function index()
    {
        return view ('auth.login');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        

        if (!auth()->attempt($request->only('username','password')))
        {
            return back()->with('status', 'Pogrešni podaci za prijavu');
        }

        return redirect()->route('dashboard');
    }
}
