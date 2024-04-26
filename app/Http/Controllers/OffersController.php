<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use App\Models\OffersCate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OffersController extends Controller
{
    



    
    public function AllOffers()
    {


        $Offers = Offers::latest()->get();


        
        return view("admin.Offers.all_Offers",compact('Offers'));
    }


    public function AddOffers()
    {

        $OffersType = OffersCate::orderBy('id', 'ASC')->get();

        return view("admin.Offers.add_Offers",compact('OffersType'));

    }


    public function UpdateOffers($id)
    {
        $Offers = Offers::find($id);
        $OffersType = OffersCate::orderBy('id', 'ASC')->get();

        return view("admin.Offers.update_Offers",compact('Offers','OffersType'));

    }

 


    public function UpdateOffersStore($id,Request $request )
    {
        $Offers = Offers::find($id);

        $filename = NULL;

     

        if($Offers->photo != NULL)
        {
            $filename = $Offers->photo;

        }


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin/'.$Offers->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }


       


        $request->validate([

            'name' => 'required',
            'des' =>  'required',
           // 'email' => ['required','email',Rule::unique('users', 'email')],
           'place' =>  'required',
            'start' =>  'required',
            'end' =>  'required',
            'work_type' =>  'required',

            'type' => 'required',
            'date' => 'required',
         



        ]);
     

       



        $Offers->update(
            [

                'name' => $request->name,
                'des' => $request->des,
                'offers_type_id' => $request->type,
                'date' => $request->date,
              
                'place' => $request->place,
                'start' => $request->start,
                'end' => $request->end,
                'type' => $request->work_type,

                'photo' => $filename,
    
            ]
    
    );

        $notification = array(
            'message' => 'Offers updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Offers')->with($notification);



    }
    

    public function DeleteOffers($id)
    {
         $Offers = Offers::find($id);

        
        $Offers->delete();


        @unlink(public_path('upload/admin/'.$Offers->photo));

        $notification = array(
            'message' => 'Offers Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('Offers.all.volunteer')->with($notification);


    }

    

 

    public function AddOffersStore(Request $request)
    {
        $filename = NULL;

        if ($request->file('photo')) {
            $file = $request->file('photo');
           // @unlink(public_path('upload/admin/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }
        $request->validate([

            'name' => 'required',
            'des' =>  'required',
            'place' =>  'required',
            'start' =>  'required',
            'end' =>  'required',
            'work_type' =>  'required',

           // 'email' => ['required','email',Rule::unique('users', 'email')],
            'type' => 'required',
            'date' => 'required',



        ]);



        $event_id = Offers::insertGetId([

            'name' => $request->name,
            'des' => $request->des,

            'place' => $request->place,
            'start' => $request->start,
            'end' => $request->end,
            'type' => $request->work_type,


            'offers_type_id' => $request->type,
            'date' => $request->date,
            'photo' => $filename,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Offers Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Offers')->with($notification);

     

    }



    public function allOffersApi()
    {
        $Offers = Offers::latest()->get();


        foreach($Offers as $Offers2)
        {
         $Offers2["humanDate"] = Carbon::parse($Offers2->created_at)->diffForHumans();

        }


        return $Offers;


    }


    public function allOffersApiLimited()
    {
        $Offers = Offers::latest()->take(7)->get();


        foreach($Offers as $Offers2)
        {
         $Offers2["humanDate"] = Carbon::parse($Offers2->created_at)->diffForHumans();

        }


        return $Offers;


    }







}
