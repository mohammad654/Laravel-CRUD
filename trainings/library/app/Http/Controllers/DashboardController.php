<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function __construct(){
        $this->middleware(['auth']);
   
    }
    public function index(){
        $users = User::all();
        //dd(auth()->user()->posts);
        return view('dashboard',compact('users'));
    }
//return view('dashboard');
}
