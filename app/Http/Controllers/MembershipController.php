<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;



class MembershipController extends Controller
{
    //

    public function Allmembership()
    {

        $memberships = Membership::orderBy('id', 'ASC')->get();


        return view('admin.memberships.all_membership',compact('memberships'));

    }

    public function Addmembership()
    {
        return view('admin.memberships.add_membership');

    }


    public function AddmembershipStore(Request $requset)
    {

        $requset->validate([


            'name' => 'required'


        ]);


        Membership::insert([

            'name' => $requset->name
        ]);


        $notification = array(
            'message' => 'Membership Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.membership')->with($notification);

     
        
    }

    public function Updatemembership($id)
    {
        
        $memberships = Membership::find($id);

        return view('admin.memberships.update_membership',compact('memberships'));



    }

    public function Deletemembership($id)
    {

        $membership = Membership::find($id);

        
        $membership->delete();



        $notification = array(
            'message' => 'Membership Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.membership')->with($notification);

        
    }



    public function UpdatemembershipStore($id,Request $requset)
    {

        $memberships = Membership::find($id);

        
        $requset->validate([


            'name' => 'required'


        ]);


        $memberships->update([

            'name' => $requset->name
        ]);



        $notification = array(
            'message' => 'Membership Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.membership')->with($notification);



    }



    /// Api


    public function allmembershipsApi()
    {


        $membership = Membership::latest()->get();

        return $membership;

    }

}
