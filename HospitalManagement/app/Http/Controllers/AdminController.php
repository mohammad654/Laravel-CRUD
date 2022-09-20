<?php

namespace App\Http\Controllers;

//include
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function index(){

         return view('admin.add_doctor');
     }

     public function store(Request $request)
     {
         //validate the input
         $request->validate([
             'doctor_name'=>'required',
             'speciality'=>'required',
             'phone'=>'required',
             'doctor_image'=>'required',
             'doctor_room'=>'required',
             'detail'=>'required',
         ]);
   //      create  DB
         if ($request->hasFile('doctor_image')) {
             $imageName = time() . '.' . $request->doctor_image->getClientOriginalExtension();
             $request->doctor_image-> move('doctorImage', $imageName);
             Doctor::create([
                     'doctor_name' => $request->doctor_name,
                     'speciality' => $request->speciality,
                     'phone' => $request->phone,
                     'doctor_image' => $imageName,
                     'doctor_room' => $request->doctor_room,
                     'detail' => $request->detail
             ]);
             return redirect()->back()->with('success','Doctor  created successfully.');
         }
     }

}
