<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventType;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EventController extends Controller
{
    //

    public function AllEvents()
    {
        

        $events = Event::latest()->get();

        return view('admin.events.all_event',compact('events'));
    }

    public function AddEvents()
    {

        $memberships = Membership::orderBy('id', 'ASC')->get();

        $eventType = EventType::orderBy('id', 'ASC')->get();

        return view('admin.events.add_event',compact('memberships','eventType'));
    }

    public function UpdateEvent($id)
    {

        $event = Event::find($id);

        $memberships = Membership::orderBy('id', 'ASC')->get();

        $eventType = EventType::orderBy('id', 'ASC')->get();

        return view('admin.events.update_event',compact('event','memberships','eventType'));
    }

    public function DeleteEvent($id)
    {
        $event = Event::find($id);

        
        $event->delete();


        @unlink(public_path('upload/admin/'.$event->photo));

        $notification = array(
            'message' => 'Event Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.events')->with($notification);

    }

    public function OpenEvent($id)
    {


        $event = Event::find($id);
        $event->update([

            'status'=>'open'

        ]);
        $notification = array(
            'message' => 'Event status updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.events')->with($notification);



    }

    public function CloseEvent($id)
    {
        $event = Event::find($id);
        $event->update([

            'status'=>'close'

        ]);
        $notification = array(
            'message' => 'Event status updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.events')->with($notification);


    }
    


    public function AddEventStore(Request $request)
    {

             $selectedMemberships = $request->input('selected_memberships', []);

             $selectedMembershipsString = implode(',', $selectedMemberships);

            // return  $selectedMembershipsString;

        $filename = NULL;

        $pdfname = NULL;


        if ($request->file('photo')) {
            $file = $request->file('photo');
           // @unlink(public_path('upload/admin/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }

        if ($request->file('pdf')) {
            $filepdf = $request->file('pdf');
           // @unlink(public_path('upload/admin/'.$data->photo));
            $pdfname = date('YmdHi').$filepdf->getClientOriginalName();
            $filepdf->move(public_path('upload/admin'),$pdfname);
            
        }
        $request->validate([

            'name' => 'required',
            'place' =>  'required',
           // 'email' => ['required','email',Rule::unique('users', 'email')],
            'type' => 'required',
            'start' => 'required',
            'end' => 'required',
          //  'membership'  => 'required',
            'selected_memberships'  => 'required|array|min:1', // Ensure it's an array with at least one element




        ]);

    
        // $out_side_store = "";
        // if($request->outside == "")
        // {
        //     $out_side_store = $request->place;
        // }
        // else
        // {
        //     $out_side_store = $request->outside;
        // }


        $event_id = Event::insertGetId([

            'name' => $request->name,
            'place' => $request->place,
            'price' => $request->price,
            'event_type_id' => $request->type,
            'start' => $request->start,
            'end' => $request->end,
            'membership_id' => $selectedMembershipsString,
            'photo' => $filename,
            'pdf' => $pdfname,
            'url' => $request->url,


            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Event Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.events')->with($notification);

     

    }



    public function UpdateEventStore($id,Request $request )
    {
        $event = Event::find($id);


        $selectedMemberships = $request->input('selected_memberships', []);

        $selectedMembershipsString = implode(',', $selectedMemberships);

       // return $selectedMembershipsString;

        $filename = NULL;
        $pdfname = NULL;


     

        if($event->photo != NULL)
        {
            $filename = $event->photo;

        }

        if($event->pdf != NULL)
        {
            $pdfname = $event->pdf;

        }


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin/'.$event->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }


        if ($request->file('pdf')) {
            $pdffile = $request->file('pdf');
            @unlink(public_path('upload/admin/'.$event->pdf));
            $pdfname = date('YmdHi').$pdffile->getClientOriginalName();
            $pdffile->move(public_path('upload/admin'),$pdfname);
            
        }


       


        $request->validate([

            'name' => 'required',
            'place' =>  'required',
           // 'email' => ['required','email',Rule::unique('users', 'email')],
            'type' => 'required',
            'start' => 'required',
            'end' => 'required',
          //  'membership'  => 'required',
            'selected_memberships'  => 'required|array|min:1', // Ensure it's an array with at least one element




        ]);
     

       



        $event->update(
            [

                'name' => $request->name,
                'place' => $request->place,
                'price' => $request->price,
                'event_type_id' => $request->type,
                'start' => $request->start,
                'end' => $request->end,
                'membership_id' => $selectedMembershipsString,
                'photo' => $filename,
                'pdf' => $pdfname,
                'url' => $request->url,


    
            ]
    
    );

        $notification = array(
            'message' => 'Event updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.events')->with($notification);



    }
    /// API //
    public function allActivitiesBymembershipId($membership_id)
    {

      


        $integer = intval($membership_id);

        $membershipIds = array();
        $membershipIds[] = 0;
        $membershipIds[] = $integer;


       // $memberships = [3,0];





       //$membershipIds = [3,0];

       $event = Event::orderBy('id', 'DESC')
                   ->where(function ($query) use ($membershipIds) {
                       foreach ($membershipIds as $id) {
                           $query->orWhereRaw("FIND_IN_SET(?, membership_id)", [$id]);
                       }
                   })
                   ->get();
             
               foreach($event as $event2)
               {
                $event2["eventType"] = $event2->eventType->name;
               }

        return $event;



    }


    public function allActivitiesBymembershipIdLimited($membership_id)
    {

      


        $integer = intval($membership_id);

        $membershipIds = array();
        $membershipIds[] = 0;
        $membershipIds[] = $integer;


       // $memberships = [3,0];





       //$membershipIds = [3,0];

       $event = Event::orderBy('id', 'DESC')
                   ->where(function ($query) use ($membershipIds) {
                       foreach ($membershipIds as $id) {
                           $query->orWhereRaw("FIND_IN_SET(?, membership_id)", [$id]);
                       }
                   })
                   ->take(7)->get();
             
               foreach($event as $event2)
               {
                $event2["eventType"] = $event2->eventType->name;
               }

        return $event;



    }

    
}
