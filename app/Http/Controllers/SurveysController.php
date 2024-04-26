<?php

namespace App\Http\Controllers;

use App\Models\SurveysQu;
use App\Models\userAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SurveysController extends Controller
{
    ///// QUSTIONS 

  
    
    public function AllSurveysQuestions()
    {

        $SurveysQu = SurveysQu::latest()->get();
        

        return view('admin.Surveys.all_SurveysQu',compact('SurveysQu'));

    }

    public function AddSurveysQuestions()
    {
        return view('admin.Surveys.add_SurveysQu');

    }


    public function AddSurveysQuestionsStore(Request $requset)
    {

        $requset->validate([


            'qu' => 'required',
            'start' => 'required',
            'end' => 'required',




        ]);


        SurveysQu::insert([

            'qu' => $requset->qu,
            'start' => $requset->start,
            'end' => $requset->end,
            'created_at' => Carbon::now(),



        ]);


        $notification = array(
            'message' => 'Questions Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Surveys.Questions')->with($notification);

     
        
    }

    public function UpdateSurveysQuestions($id)
    {
        
        $SurveysQu = SurveysQu::find($id);

        return view('admin.Surveys.update_SurveysQu',compact('SurveysQu'));



    }

    public function DeleteSurveysQuestions($id)
    {

        $SurveysQu = SurveysQu::find($id);

        
        $SurveysQu->delete();



        $notification = array(
            'message' => 'Surveys Questions Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Surveys.Questions')->with($notification);

        
    }



    public function UpdateSurveysQuestionsStore($id,Request $requset)
    {

        $SurveysQu = SurveysQu::find($id);

        
        $requset->validate([


            'qu' => 'required',
            'start' => 'required',
            'end' => 'required',




        ]);


        $SurveysQu->update([

            'qu' => $requset->qu,
            'start' => $requset->start,
            'end' => $requset->end,
        ]);



        $notification = array(
            'message' => 'Surveys Questions Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Surveys.Questions')->with($notification);


    }


    public function AllSurveysQuestionsUseers($id)
    {

       // $userAnswer = userAnswer::where('qu_id',$id)->with('users')->get();
       $userAnswer = userAnswer::where('qu_id',$id)->get();

        // foreach ($userAnswer as $userAnswer) {
        //     // Access the user relationship and then the name property
        //     $userName = $userAnswer->users->name;
        //     echo $userName;
        // }


        return view('admin.Surveys.all_SurveysUsers',compact('userAnswer'));

            
    }

    /// API



    public function allSurveysApi()
    {


       // return "ok";
        $SurveysQu = SurveysQu::latest()->get();

        return $SurveysQu;


    }




    ///// END QUSTIONS
}
