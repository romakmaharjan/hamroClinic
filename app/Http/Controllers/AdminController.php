<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor=new Doctor;
        $image=$request->file('file');
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->move(public_path('doctorimage'),$imagename);

        $doctor->image=$imagename;
        $doctor->name=$request->input('name');
        $doctor->phone=$request->input('number');
        $doctor->room=$request->input('room');
        $doctor->specialty=$request->input('specialty');

        $doctor->save();

        return redirect()->back();
    }
}