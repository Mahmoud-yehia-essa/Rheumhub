<?php

namespace App\Http\Controllers;

use App\Models\JobTitle;
use Illuminate\Http\Request;

class JobTitleController extends Controller
{
    
    public function AlljobTitle()
    {

        $jobTitle = JobTitle::latest()->get();
        

        return view('admin.jobTitle.all_jobTitle',compact('jobTitle'));

    }

    public function AddjobTitle()
    {
        return view('admin.jobTitle.add_jobTitle');

    }


    public function AddjobTitleStore(Request $requset)
    {

        $requset->validate([


            'name' => 'required',
            'ar_name' => 'required'


        ]);


        JobTitle::insert([

            'name' => $requset->name,
            'ar_name' => $requset->ar_name

        ]);


        $notification = array(
            'message' => 'Job Title Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.jobTitle')->with($notification);

     
        
    }

    public function UpdatejobTitle($id)
    {
        
        $jobTitle = JobTitle::find($id);

        return view('admin.jobTitle.update_jobTitle',compact('jobTitle'));



    }

    public function DeletejobTitle($id)
    {

        $jobTitle = JobTitle::find($id);

        
        $jobTitle->delete();



        $notification = array(
            'message' => 'Job Title Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.jobTitle')->with($notification);

        
    }



    public function UpdatejobTitleStore($id,Request $requset)
    {

        $jobTitle = JobTitle::find($id);

        
        $requset->validate([


            'name' => 'required',
            'ar_name' => 'required',



        ]);


        $jobTitle->update([

            'name' => $requset->name,
            'ar_name' => $requset->ar_name

        ]);



        $notification = array(
            'message' => 'Job Title Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.jobTitle')->with($notification);



    }



    /// Api

    public function allJobApi()
    {

        $jobs = JobTitle::latest()->get();
        return $jobs;


    }
}
