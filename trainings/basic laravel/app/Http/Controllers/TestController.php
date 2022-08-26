<?php

namespace App\Http\Controllers;

//include
use Illuminate\Http\Request;
use App\Http\Requests\MyRequest;
// to get data
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Student;


class TestController extends Controller
{
    public function index ()
    {
      return view('test');
    }
    public function handle ()
    {
        $nam='';
       // return  view('test');
    }
}

