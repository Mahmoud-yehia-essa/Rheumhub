<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use App\Models\volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class VolunteerController extends Controller
{
    public function Allvolunteer()
    {


        $volunteers = volunteer::latest()->get();


        
        return view("admin.volunteer.all_volunteer",compact('volunteers'));
    }


    public function Addvolunteer()
    {

        $eventType = EventType::orderBy('id', 'ASC')->get();

        return view("admin.volunteer.add_volunteer",compact('eventType'));

    }


    public function UpdateVolunteer($id)
    {
        $volunteer = volunteer::find($id);
        $eventType = EventType::orderBy('id', 'ASC')->get();

        return view("admin.volunteer.update_volunteer",compact('volunteer','eventType'));

    }

 


    public function UpdateVolunteerStore($id,Request $request )
    {
        $volunteer = volunteer::find($id);

        $filename = NULL;

     

        if($volunteer->photo != NULL)
        {
            $filename = $volunteer->photo;

        }


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin/'.$volunteer->photo));
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
     

       



        $volunteer->update(
            [

                'name' => $request->name,
                'des' => $request->des,
                'event_type_id' => $request->type,
                'date' => $request->date,
              
                'place' => $request->place,
                'start' => $request->start,
                'end' => $request->end,
                'type' => $request->work_type,

                'photo' => $filename,
    
            ]
    
    );

        $notification = array(
            'message' => 'Volunteer work updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.volunteer')->with($notification);



    }
    

    public function DeleteVolunteer($id)
    {
         $volunteer = volunteer::find($id);

        
        $volunteer->delete();


        @unlink(public_path('upload/admin/'.$volunteer->photo));

        $notification = array(
            'message' => 'volunteer work Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.volunteer')->with($notification);


    }

    

 

    public function AddvolunteerStore(Request $request)
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



        $event_id = volunteer::insertGetId([

            'name' => $request->name,
            'des' => $request->des,

            'place' => $request->place,
            'start' => $request->start,
            'end' => $request->end,
            'type' => $request->work_type,


            'event_type_id' => $request->type,
            'date' => $request->date,
            'photo' => $filename,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Volunteer work Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.volunteer')->with($notification);

     

    }

    


    public function allOVolunteerWorksApi()
    {
        $volunteer = volunteer::latest()->get();


        foreach($volunteer as $volunteer2)
        {
         $volunteer2["humanDate"] = Carbon::parse($volunteer2->created_at)->diffForHumans();

         $volunteer2["eventType"] = $volunteer2->eventType->name;
         
        }


        return $volunteer;


    }

  
}
