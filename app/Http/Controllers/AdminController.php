<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\Event;
use App\Models\Magazine;
use App\Models\volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function AdminDashBoard()
    {
        

        $users = User::where('role', '!=', 'admin')->orderBy('id', 'DESC')->get();
        $events = Event::latest()->get();
        $Magazine = Magazine::latest()->get();
        $volunteers = volunteer::latest()->get();


        return view('admin.index',compact('users','events','Magazine','volunteers'));

    }


    public function AdminLogin()
    {

        if(Auth::check())
        {
            return redirect()->route('admin.all.Research');

        }
        else
        {
            return view('admin.admin_login');

        }

        //return view('admin.admin_login');
            // return redirect()->route('admin.go.lgoin');


    }
    

 
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }


    public function AdminProfile(){

        $id = Auth::user()->id;

        $user = User::find($id);



        // $memberships = Membership::orderBy('id', 'ASC')->get();
        // $jobPlace = JobPlace::orderBy('id', 'ASC')->get();
        // $jobTitle = JobTitle::orderBy('id', 'ASC')->get();



       // return view('admin.admin_profile_view',compact("user","memberships","jobPlace","jobTitle"));

        return view('admin.admin_profile_view',compact("user"));

    }


    public function AdminProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address; 

        $data->username = $request->username; 

       // $data->job_title = $request->job_title; 
        //$data->job_place = $request->job_place; 
        //$data->kma_no = $request->kma_no; 
       // $data->kma_valid = $request->kma_valid; 


        if($request->password != "")
        {

            $passwordHash = Hash::make($request->password);
        $data->password = $passwordHash; 
        }


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    } // End Mehtod 

}
