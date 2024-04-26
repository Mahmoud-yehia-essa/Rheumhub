<?php

namespace App\Http\Controllers;

use App\Models\SurveysQu;
use Illuminate\Http\Request;
use App\Models\SurveysAnswer;

class SurveysResultController extends Controller
{
    
    public function SurveysResult($id)
    {

        $SurveysQu = SurveysQu::find($id);
        $SurveysAnswer = SurveysAnswer::Where('qu_id',$id)->get();


      


        return view('admin.SurveysResult.all_SurveysResult',compact('SurveysQu','SurveysAnswer'));




    }


}
