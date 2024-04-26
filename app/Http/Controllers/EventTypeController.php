<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use Illuminate\Http\Request;

class EventTypeController extends Controller
{
    
    public function AlleventType()
    {

        $eventType = EventType::latest()->get();
        

        return view('admin.eventType.all_eventType',compact('eventType'));

    }

    public function AddeventType()
    {
        return view('admin.eventType.add_eventType');

    }


    public function AddeventTypeStore(Request $requset)
    {

        $requset->validate([


            'name' => 'required'


        ]);


        EventType::insert([

            'name' => $requset->name
        ]);


        $notification = array(
            'message' => 'Event Type Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.eventType')->with($notification);

     
        
    }

    public function UpdateeventType($id)
    {
        
        $eventType = EventType::find($id);

        return view('admin.eventType.update_eventType',compact('eventType'));



    }

    public function DeleteeventType($id)
    {

        $eventType = EventType::find($id);

        
        $eventType->delete();



        $notification = array(
            'message' => 'Event Type Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.eventType')->with($notification);

        
    }



    public function UpdateeventTypeStore($id,Request $requset)
    {

        $eventType = EventType::find($id);

        
        $requset->validate([


            'name' => 'required'


        ]);


        $eventType->update([

            'name' => $requset->name
        ]);



        $notification = array(
            'message' => 'Event Type Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.eventType')->with($notification);



    }
}
