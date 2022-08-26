<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
   
    public function redirect()
    {
        if ( auth()->logout()) 
            return Redirect::route('dashboard');

        return redirect()->route('login');

    }



}
