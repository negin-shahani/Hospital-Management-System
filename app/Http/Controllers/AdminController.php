<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

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
        $data = Appointment::all();
        return view('admin.show_appointment', Compact('data'));
    }

    public function approve($id){
        $data = Appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back()->with('message', 'Appointment Approved!');
    }

    public function cancel($id){
        $data = Appointment::find($id);
        $data->status = 'Canceled';
        $data->save();
        return redirect()->back()->with('message', 'Appointment Canceled!');
    }

    public function show_doctors(){
        $data = Doctor::all();
        return view('admin.show_doctors', Compact('data'));
    }

    public function delete_doctor($id){
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Doctor information deleted!'); 
    }
}
