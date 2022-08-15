<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect(){

        if(Auth::id()){
            //if  there is any user that logged in we check usertype
            if(Auth::user()->usertype=='0'){
                $doctor = Doctor::all();
                return view('user.home', compact('doctor'));
            }else{
                return view('admin.home');
            }
        }else{
            return redirect()->back();
        }
    }
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $doctor = Doctor::all();
            return view('user.home', compact('doctor'));
        }  
    }

    public function appointment(Request $request){
        $data = new Appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->number;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = 'In Progress';

        if(Auth::id()){
            $data->user_id = Auth::user()->id; 
        }else{
            $data->user_id = 'Non User';
        }
        
        $data->save();
        return redirect()->back()->with('message', 
        'Appointment Request Successful. We will contact with you soon :)');
    }

    public function myappointment(){
        if(Auth::id()){
            // get the user id who is logged in
            $userID = Auth::user()->id;
            //if the user_id of appointment DB table and this userid is equal get that row
            $appointment = Appointment::where('user_id' , $userID)->get();
            return view('user.my_appointment', compact('appointment'));
        }else{
            return redirect()->back();
        }
        
    }
}
