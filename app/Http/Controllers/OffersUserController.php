<?php

namespace App\Http\Controllers;

use App\Models\OffersUser;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OffersUserController extends Controller
{
    //
    public function applyoffers(Request $request)
    {


       // return  $request;
       OffersUser::insert([

            'user_id'=>$request->user_id,
            'offer_id'=>$request->offer_id,
            'created_at'=>Carbon::now()



        ]);
       

    return response()->json(['message' => 'done']);
    }


    public function CheckoffersApply(Request $request)
    {
        // return $request;

       // $userQustionsAnswer = userAnswer::where('user_id',$request->user_id)->where('qu_id',$request->qu_id)->first();
       $OffersUser = OffersUser::where('user_id', $request->user_id)
       ->where('offer_id', $request->offer_id)
       ->first();

       if($OffersUser)
       {
           return response()->json(['message' => 'true']);
       }
       else
       {
           return response()->json(['message' => 'false']);

       }


    }



    public function getUsersForOffers($offer_id)
    {
        $OfferUsers = OffersUser::where('offer_id',$offer_id)->get();



        return view('admin.Offers.all_users_register',compact('OfferUsers'));
    }

}
