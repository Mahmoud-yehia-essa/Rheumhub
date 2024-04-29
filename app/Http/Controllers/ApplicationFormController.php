<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ApplicationForm;
use Illuminate\Support\Facades\Redirect;

class ApplicationFormController extends Controller
{
    //


    public function viewApplication()
    {
        return view('frontend/index');
    }


    public function addApplicationValues(Request $request)
    {


        /*
        $request->validate([

            'name' => 'required',
            'position' =>  'required',
            'workAddress' =>  'required',
            'email' =>  'required|email',
            'number' =>  'required',
            'title' =>  'required',
            'leader' =>  'required',

            'des' =>  'required',


            'grant' =>  'required',

            'jsjournal' => 'required|array|min:1', // The array must not be empty
            'jsMembers' => 'required|array|min:1', // The array must not be empty
            'jsobjectives' => 'required|array|min:1', 



            
        

             'jsprojectStartDate' => 'required|array|min:1', // The array must not be empty
            'jsprojectStartDate.*' => 'required|string|min:1', // Each element in the array must not be empty


    'jsprojectEndDate' => 'required|array|min:1', // The array must not be empty
            'jsprojectEndDate.*' => 'required|string|min:1', // Each element in the array must not be empty

           
            

             'jsprojectDescription' => 'required|array|min:1', // The array must not be empty
            'jsprojectDescription.*' => 'required|string|min:1' // Each element in the array must not be empty


            
            

        ],

        [
            'jsMembers.required' => 'Each Member entry must be provided.', // Ensuring no empty array elements
            'jsobjectives.required' => 'Each objectives entry must be provided.', // Ensuring no empty array elements
            'jsjournal.required' => 'Each journal entry must be provided.', 


            
        'jsprojectStartDate.required' => 'Each journal entry must be provided.', 

                'jsprojectEndDate.required' => 'Each journal entry must be provided.', 

                                'jsprojectDescription.required' => 'Each Description entry must be provided.', 

                
            // Ensuring no empty array elements
        ]
    
    );
   
// Convert the array to a string with elements quoted and comma-separated

$members = $request->jsMembers;
$membersString = '"' . implode('", "', $members) . '"';


$objectives = $request->jsobjectives;
$objectivesString = '"' . implode('", "', $objectives) . '"';


$journals = $request->jsjournal;
$journalString = '"' . implode('", "', $journals) . '"';



$projectStartDate = $request->jsprojectStartDate;
$projectStartDateString = '"' . implode('", "', $projectStartDate) . '"';


$projectEndDate = $request->jsprojectEndDate;
$projectEndDateString = '"' . implode('", "', $projectEndDate) . '"';

$projectDescription = $request->jsprojectDescription;
$projectDescriptionString = '"' . implode('", "', $projectDescription) . '"';


$grantCheckedString = "";


if(!empty($request->grant_checked))
{
    $grant_checked = $request->grant_checked;
    $grantCheckedString = '"' . implode('", "', $grant_checked) . '"';
     
}


$grantOther = "";
if($request->grantOther != null)
{
    $grantOther = $request->grantOther;
}







ApplicationForm::insert([


    'name' => $request->name,
    'position' => $request->position,
    'Work_Address' => $request->workAddress,
    'email' => $request->email,
    'number' => $request->number,
    'title' => $request->title,
    'leader' => $request->leader,
    'description' => $request->des,
    'grant' => $request->grant,
    'members' => $membersString,
    'objectives' => $objectivesString,
    'journal' => $journalString,
    'start' => $projectStartDateString,
    'end' => $projectEndDateString,
    'pdescription' => $projectDescriptionString,
    'grantChecked' => $grantCheckedString,
    'grantOther' =>  $grantOther,
    'created_at' => Carbon::now(),




]);



*/
return redirect()->route('view-application-done');
//return Redirect::to('https://karkwt.org/home/thank-you-for-participating-in-kar-research/');

//return redirect()->intended('https://karkwt.org/home/thank-you-for-participating-in-kar-research/');


}


    public function viewApplicationDone()
    {

        return view('frontend/done');
    }
}
