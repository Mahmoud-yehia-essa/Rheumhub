<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Physiotherapy;

class PhysiotherapyController extends Controller
{


    public function AllPhysiotherapy()
    {

        $Physiotherapy = Physiotherapy::latest()->get();
        

        return view('admin.Physiotherapy.all_Physiotherapy',compact('Physiotherapy'));

    }

    public function AddPhysiotherapy()
    {
        return view('admin.Physiotherapy.add_Physiotherapy');

    }


    public function AddPhysiotherapyStore(Request $requset)
    {

        $requset->validate([


            'name' => 'required',


        ]);


        Physiotherapy::insert([

            'name' => $requset->name,

        ]);


        $notification = array(
            'message' => 'Physiotherapy Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Physiotherapy')->with($notification);

     
        
    }

    public function UpdatePhysiotherapy($id)
    {
        
        $Physiotherapy = Physiotherapy::find($id);

        return view('admin.Physiotherapy.update_Physiotherapy',compact('Physiotherapy'));



    }

    public function DeletePhysiotherapy($id)
    {

        $Physiotherapy = Physiotherapy::find($id);

        
        $Physiotherapy->delete();



        $notification = array(
            'message' => 'Physiotherapy Catagory Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Physiotherapy')->with($notification);

        
    }



    public function UpdatePhysiotherapyStore($id,Request $requset)
    {

        $Physiotherapy = Physiotherapy::find($id);

        
        $requset->validate([


            'name' => 'required',



        ]);


        $Physiotherapy->update([

            'name' => $requset->name,

        ]);



        $notification = array(
            'message' => 'Physiotherapy Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Physiotherapy')->with($notification);



    }



    /// Api

    public function PhysiotherapyCateApi(){

        $Physiotherapy = Physiotherapy::latest()->get();
         return $Physiotherapy;


    }
    


}
