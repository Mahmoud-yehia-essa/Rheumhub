<?php

namespace App\Http\Controllers;

use App\Models\Policies;
use Illuminate\Http\Request;

class PoliciesController extends Controller
{
    public function AddPolicies()
    {

        $Policies = Policies::find(1);

        return view('admin.policies.add_policies',compact("Policies"));




    }



    public function UpdatePoliciesStore(Request $request)
    {

        $Policies = Policies::find(1);



        $Policies->des = $request->des;
        $Policies->save();

        $notification = array(
            'message' => 'Policies Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.add.Policies')->with($notification);




    }
}
