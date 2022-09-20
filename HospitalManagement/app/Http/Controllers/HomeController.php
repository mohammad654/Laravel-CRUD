<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

//include Auth
use Illuminate\Support\Facades\Auth;

//include User
use App\Models\User;

class HomeController extends Controller
{
    public function  redirect(){

        if (Auth::id()){
            if (Auth::user()->usertype == '0'){
                $doctors = Doctor::all();
                return view('user.dashboard',compact('doctors'));
            }else{

                return view('admin.dashboard');
            }
        }else{
            return redirect()->back();
        }
    }

    public function  index()
    {
        if (Auth::id()){
            return redirect('home');

        }else{
            $doctors = Doctor::all();
            return view('user.dashboard',compact('doctors'));
        }
    }

}
