<?php

namespace App\Http\Controllers;

use App\Models\Sources;
use Illuminate\Http\Request;

class SourcesController extends Controller
{
    

    public function AddSources()
    {

        $Sources = Sources::find(1);

        return view('admin.Sources.add_Sources',compact("Sources"));




    }



    public function UpdateSourcesStore(Request $request)
    {

        $Sources = Sources::find(1);



        $Sources->des = $request->des;
        $Sources->save();

        $notification = array(
            'message' => 'Sources of Health Information updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.add.Sources')->with($notification);




    }
}
