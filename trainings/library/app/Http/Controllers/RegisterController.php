<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

//included Uses
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
// if logged in user tries to visit that page they get redirected to home page.
    public function __construct(){
        $this->middleware(['guest']);
    }

    public function index(){
        return view('register');
    }

    public function store(Request $request){
  //validate the input
         $validated = $request->validate([
             'name' => 'required|max:255',
             'username' => 'required|max:255',
             'email' => 'required|email|max:255',
             'password' => 'required|confirmed',
        ]);
 //create a new student in DB
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));
 //redirect the user and send message
        return redirect()->route('login')->with('success',' registered successfully.');


    }

}
