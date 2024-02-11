<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

use App\Models\Doctor;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;






class Home1Controller extends Controller
{
    public function redirect()
    {
        if(Auth::id()){
            
            if(Auth::user()->usertype=='0')
            {
                $doctor=doctor::all();
                

                return view('user.home1',compact('doctor') );
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
          
            return redirect()->back();

        }
    }

    public function index (){

        if(Auth::id())
        {
            return redirect('home1');
        }

        else

        {

        $doctor=doctor::all();

        return view('user.home1',compact('doctor'));

        }

    
       

    } public function appointment(request $request)
    {
        $data = new Appointment;
        $data->	name=$request->name;
        $data->	email=$request->email;
        $data->	date=$request->date;
        $data->	phone=$request->number;
        $data->	message=$request->message; 
        $data->	doctor=$request->doctor;     
        $data->status='In progress';
        if(Auth::id()){
        $data->	user_id=Auth::user()->id;
        }
        $data->save();

        return redirect()->back()->with('message','Appointment
        Request Successful . We will contact with you soon');
    }

    public function myappointement()

    {
        if (Auth::id())
        {

            $userid=Auth::user()->id;

            $appoint=appointment::where('user_id',$userid)->get();


            return view('user.my_appointment' ,compact('appoint'));

        }
        else
        {
            return redirect()->back();
        }
       
    }



}

