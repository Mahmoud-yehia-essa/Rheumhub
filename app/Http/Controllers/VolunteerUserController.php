<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VolunteerUser;
use Illuminate\Support\Carbon;

class VolunteerUserController extends Controller
{
    //

    public function applyVolunteer(Request $request)
    {


       // return  $request;
        VolunteerUser::insert([

            'user_id'=>$request->user_id,
            'volunteer_id'=>$request->volunteer_id,
            'created_at'=>Carbon::now()



        ]);
       

    return response()->json(['message' => 'done']);
    }


    public function CheckVolunteerApply(Request $request)
    {
        // return $request;

       // $userQustionsAnswer = userAnswer::where('user_id',$request->user_id)->where('qu_id',$request->qu_id)->first();
       $VolunteerUser = VolunteerUser::where('user_id', $request->user_id)
       ->where('volunteer_id', $request->volunteer_id)
       ->first();

       if($VolunteerUser)
       {
           return response()->json(['message' => 'true']);
       }
       else
       {
           return response()->json(['message' => 'false']);

       }


    }


    public function getUsersForVolunteer($volunteer_id)
    {
        $VolunteerUser = VolunteerUser::where('volunteer_id',$volunteer_id)->get();



        return view('admin.volunteer.all_users_register',compact('VolunteerUser'));
    }
}
