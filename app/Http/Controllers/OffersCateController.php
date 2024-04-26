<?php

namespace App\Http\Controllers;

use App\Models\OffersCate;
use Illuminate\Http\Request;

class OffersCateController extends Controller
{
    
    public function AllOffersCate()
    {

        $OffersCate = OffersCate::latest()->get();
        

        return view('admin.Offers.all_OffersCate',compact('OffersCate'));

    }

    public function AddOffersCate()
    {
        return view('admin.Offers.add_OffersCate');

    }


    public function AddOffersCateStore(Request $requset)
    {

        $requset->validate([


            'name' => 'required'


        ]);


        OffersCate::insert([

            'name' => $requset->name
        ]);


        $notification = array(
            'message' => 'Offers Cate Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.OffersCate')->with($notification);

     
        
    }

    public function UpdateOffersCate($id)
    {
        
        $OffersCate = OffersCate::find($id);

        return view('admin.Offers.update_OffersCate',compact('OffersCate'));



    }

    public function DeleteOffersCate($id)
    {

        $OffersCate = OffersCate::find($id);

        
        $OffersCate->delete();



        $notification = array(
            'message' => 'Offers Cate Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.OffersCate')->with($notification);

        
    }



    public function UpdateOffersCateStore($id,Request $requset)
    {

        $OffersCate = OffersCate::find($id);

        
        $requset->validate([


            'name' => 'required'


        ]);


        $OffersCate->update([

            'name' => $requset->name
        ]);



        $notification = array(
            'message' => 'Offers Cate Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.OffersCate')->with($notification);



    }
}
