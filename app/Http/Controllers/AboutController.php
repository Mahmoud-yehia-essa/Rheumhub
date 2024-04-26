<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    public function AddAbout()
    {

        $about = About::find(1);

        return view('admin.about.add_about',compact("about"));




    }



    public function UpdateAboutStore(Request $request)
    {

        $about = About::find(1);



        $about->des = $request->des;
        $about->save();

        $notification = array(
            'message' => 'About Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.add.About')->with($notification);




    }
}
