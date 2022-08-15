<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.manage_doctor');
    }
    
    public function upload(Request $request){
        $doctor = new Doctor;

        $doctor->name = $request->name;

        $doctor->phone = $request->phone;

        $doctor->speciality = $request->Speciality;

        $doctor->room = $request->Room;

        $image = $request->Image; //get the image from input
        //the name of image would be diff becuase of time()
        $imagename = time().'.'.$image->getClientoriginalExtension();
        //move the doctor image to a folder named doctorimage in public folder
        $request->Image->move('doctorimage', $imagename);
        //add image to our database
        $doctor->image = $imagename;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully!');
    }

    public function show_appointments(){
        return view('admin.show_appointment');
    }
}
