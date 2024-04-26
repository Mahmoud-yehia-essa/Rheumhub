<?php

namespace App\Http\Controllers;

use App\Models\AppVersion;
use Illuminate\Http\Request;

class AppVersionController extends Controller
{
    
    public function AddVersion()
    {

        $AppVersion = AppVersion::find(1);

        return view('admin.version.add_version',compact("AppVersion"));




    }



    public function UpdateVersionStore(Request $request)
    {

        $AppVersion = AppVersion::find(1);



        $AppVersion->des = $request->des;
        $AppVersion->ios = $request->ios;
        $AppVersion->android = $request->android;
        $AppVersion->version = $request->version;


        $AppVersion->save();

        $notification = array(
            'message' => 'App Version Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.add.Version')->with($notification);




    }
}
