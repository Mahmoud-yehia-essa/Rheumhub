<?php

namespace App\Http\Controllers;

use App\Models\EventUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EventUsersController extends Controller
{
    //

    public function applyEvent(Request $request)
    {


        EventUsers::insert([

            'user_id'=>$request->user_id,
            'event_id'=>$request->event_id,
            'created_at'=>Carbon::now()



        ]);
       

    return response()->json(['message' => 'done']);
    }

    public function CheckEventApply(Request $request)
    {
        // return $request;

       // $userQustionsAnswer = userAnswer::where('user_id',$request->user_id)->where('qu_id',$request->qu_id)->first();
       $EventUsers = EventUsers::where('user_id', $request->user_id)
       ->where('event_id', $request->event_id)
       ->first();

       if($EventUsers)
       {
           return response()->json(['message' => 'true']);
       }
       else
       {
           return response()->json(['message' => 'false']);

       }


    }


    public function getUsersForEvents($event_id)
    {
        $EventUsers = EventUsers::where('event_id',$event_id)->get();



        return view('admin.events.all_users_register',compact('EventUsers'));
    }
}
