<?php

namespace App\Http\Controllers;

use App\Models\JobPlace;
use Illuminate\Http\Request;

class JobPlaceController extends Controller
{
    
    public function AlljobPlace()
    {

        $jobPlace = JobPlace::latest()->get();
        

        return view('admin.jobPlace.all_jobPlace',compact('jobPlace'));

    }

    public function AddjobPlace()
    {
        return view('admin.jobPlace.add_jobPlace');

    }


    public function AddjobPlaceStore(Request $requset)
    {

        $requset->validate([


            'name' => 'required',

            'ar_name' => 'required'

        ]);


        JobPlace::insert([

            'name' => $requset->name,
            'ar_name' => $requset->ar_name
        ]);


        $notification = array(
            'message' => 'Job Place Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.jobPlace')->with($notification);

     
        
    }

    public function UpdatejobPlace($id)
    {
        
        $jobPlace = JobPlace::find($id);

        return view('admin.jobPlace.update_jobPlace',compact('jobPlace'));



    }

    public function DeletejobPlace($id)
    {

        $jobPlace = JobPlace::find($id);

        
        $jobPlace->delete();



        $notification = array(
            'message' => 'job Place Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.jobPlace')->with($notification);

        
    }



    public function UpdatejobPlaceStore($id,Request $requset)
    {

        $jobPlace = JobPlace::find($id);

        
        $requset->validate([


            'name' => 'required',
            'ar_name' => 'required'



        ]);


        $jobPlace->update([

            'name' => $requset->name,
            'ar_name' => $requset->ar_name

        ]);



        $notification = array(
            'message' => 'Job Place Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.jobPlace')->with($notification);



    }


    /// APi

    


    public function allJobPlaceApi()
    {

        $jobsPlace = JobPlace::latest()->get();
        return $jobsPlace;


    }
}
