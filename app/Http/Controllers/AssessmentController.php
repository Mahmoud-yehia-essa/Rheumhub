<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    //

    public function AddAssessment()
    {

        $Assessment = Assessment::find(1);

        return view('admin.Assessment.add_Assessment',compact("Assessment"));




    }



    public function UpdateAssessmentStore(Request $request)
    {

        $Assessment = Assessment::find(1);



        $Assessment->des = $request->des;
        $Assessment->save();

        $notification = array(
            'message' => 'Assessment updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.add.Assessment')->with($notification);




    }
}
