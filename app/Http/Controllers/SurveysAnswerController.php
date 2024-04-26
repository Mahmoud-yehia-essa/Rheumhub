<?php

namespace App\Http\Controllers;

use App\Models\SurveysQu;
use Illuminate\Http\Request;
use App\Models\SurveysAnswer;
use Illuminate\Support\Carbon;

class SurveysAnswerController extends Controller
{
    


    public function AllSurveysAnswer()
    {


        $SurveysAnswer = SurveysAnswer::latest()->get();


        
        return view("admin.SurveysAnswer.all_SurveysAnswer",compact('SurveysAnswer'));
    }


    public function AddSurveysAnswer()
    {
       // PhysiotherapyVideo
       $SurveysQu = SurveysQu::orderBy('id', 'ASC')->get();

        return view("admin.SurveysAnswer.add_SurveysAnswer",compact('SurveysQu'));

    }


    public function UpdateSurveysAnswer($id)
    {
       
        $SurveysAnswer = SurveysAnswer::find($id);
        $SurveysQu = SurveysQu::orderBy('id', 'ASC')->get();


        return view("admin.SurveysAnswer.update_SurveysAnswer",compact('SurveysAnswer','SurveysQu'));

    }

 


    public function UpdateSurveysAnswerStore($id,Request $request )
    {
        $SurveysAnswer = SurveysAnswer::find($id);

     

       


        $request->validate([

            'answer' => 'required',
           // 'email' => ['required','email',Rule::unique('users', 'email')],
            'qu_id' =>  'required',

         



        ]);
     

       



        $SurveysAnswer->update(
            [

                'answer' => $request->answer,
                'qu_id' => $request->qu_id,
              
               
    
            ]
    
    );

        $notification = array(
            'message' => 'Surveys Answer updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.SurveysAnswer')->with($notification);



    }
    

    public function DeleteSurveysAnswer($id)
    {
         $SurveysAnswer = SurveysAnswer::find($id);

        
        $SurveysAnswer->delete();



        $notification = array(
            'message' => 'Surveys Answer Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.SurveysAnswer')->with($notification);


    }

    

 

    public function AddSurveysAnswerStore(Request $request)
    {

      
        $request->validate([

            'answer' => 'required',
            'qu_id' =>  'required',

       



        ]);



        $SurveysAnswer_id = SurveysAnswer::insertGetId([

            'answer' => $request->answer,
            'qu_id' => $request->qu_id,

            


            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Surveys Answer Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.SurveysAnswer')->with($notification);

     

    }



    //Api

    public function allSurveysAnswerApi($qu_id)
    {
        $surveysAnswers = SurveysAnswer::
            where('qu_id', $qu_id)
            ->get();
    
        // // Iterate over each SurveysAnswer and add the 'qu' key
        // $surveysAnswersData = $surveysAnswers->map(function ($item) {
        //     $item['qu'] = $item->surveysQus->qu;
        //     return $item;
        // });
    
        return $surveysAnswers;
    }

    


    public function increasCount($id)
    {


        $surveyAnswer = SurveysAnswer::find($id); // Replace $id with the actual ID of the record you want to update
        $surveyAnswer->increment('count');

        $surveyAnswer->save();


        //Model name SurveysAnswer
        // Field name i want increas count

        
    }




}
