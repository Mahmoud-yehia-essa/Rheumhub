<?php

namespace App\Http\Controllers;

use App\Models\userAnswer;
use Illuminate\Http\Request;

class UserAnswerController extends Controller
{
    //

    // Api ///
    public function UsersAnswer(Request $request)
    {



        userAnswer::insert(
            [
                'user_id' => $request->user_id,
                'qu_id' => $request->qu_id,
                'answer_id' => $request->answer_id,

            ]
        );
        return response()->json(['message' => 'done']);



    }


    public function UsersAnswerCheck(Request $request)
    {

       // return $request;

       // $userQustionsAnswer = userAnswer::where('user_id',$request->user_id)->where('qu_id',$request->qu_id)->first();
        $userQustionsAnswer = userAnswer::where('user_id', $request->user_id)
        ->where('qu_id', $request->qu_id)
        ->first();

        if($userQustionsAnswer)
        {
            return response()->json(['message' => 'true']);
        }
        else
        {
            return response()->json(['message' => 'false']);

        }



    }


    

}
