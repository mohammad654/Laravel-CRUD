<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
        //return 1;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        }

        return redirect()->route('dashboard');
    }
}
