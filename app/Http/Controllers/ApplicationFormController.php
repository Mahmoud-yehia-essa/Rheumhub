<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\JobPlace;
use Illuminate\Http\Request;
use App\Models\ApplicationForm;
use Illuminate\Support\Facades\Redirect;

class ApplicationFormController extends Controller
{
    //


    public function AllResearch(Request $request)
    {

   
        $applicationForm = ApplicationForm::latest()->get();


        
        return view("admin.Research.all_Research",compact('applicationForm'));

    }

    public function viewApplication()
    {


        $jobPlace = JobPlace::latest()->orderBy('id','DESC')->get();
        $jobPlace2 = JobPlace::latest()->orderBy('id','DESC')->get();

        return view('frontend/index',compact('jobPlace','jobPlace2'));
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


/// New
$request->validate([

    'name' => 'required',
    'position' =>  'required',
    'workAddress' =>  'required',
    'email' =>  'required|email',
    'number' =>  'required',
    'title' =>  'required',
    'leader' =>  'required',

    'clinic' => 'required',
    'journal'=> 'required',

    'des' =>  'required',

    'pdes' => 'required',

    'grant' =>  'required',

            'jsMembers' => 'required|array|min:1',
            'jsobjectives' => 'required|array|min:1', 
            'jstimeline' => 'required|array|min:1', 

            

],[

    'jsMembers.required' => 'The member field is required..', // Ensuring no empty array elements
    'jsobjectives.required' => 'The objectives field is required..', // Ensuring no empty array elements
    'jstimeline.required' => 'The timeline field is required..', 
    'des.required' => 'The description field is required..', // Ensuring no empty array elements
    // Ensuring no empty array elements
    'pdes.required' => 'The timeline description field is required..', // Ensuring no empty array elements



]);


$members = $request->jsMembers;
$membersString = '' . implode(', ', $members) . '';



$objectives = $request->jsobjectives;
$objectivesString = '' . implode(', ', $objectives) . '';






$clinic = $request->clinic;
$clinicString = '' . implode(', ', $clinic) . '';


$timeline = $request->jstimeline;
$timelineString = '' . implode(', ', $timeline) . '';



$journal = $request->journal;
$journalRequiredString = '' . implode(', ', $journal) . '';





$journalString = "";
$journals = $request->jsjournal;

if($journals !== null)

{
$journalString = '' . implode(', ', $journals) . '';
}


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




$getLastId = ApplicationForm::insertGetId([


    'name' => $request->name,
    'position' => $request->position,
    'Work_Address' => $request->workAddress,
    'email' => $request->email,
    'number' => $request->number,
    'title' => $request->title,
    'leader' => $request->leader,
    'members' => $membersString,
    'objectives' => $objectivesString,
    'description' => $request->des,
    'project_organization' =>  $clinicString,
    'timeline' => $timelineString,
    'pdescription' => $request->pdes,

    'journal' => $journalRequiredString,
    'other_journal'=>$journalString,
    'grant' => $request->grant,
    'grantChecked' => $grantCheckedString,
    'grantOther' =>  $grantOther,
    'created_at' => Carbon::now(),




]);


//return redirect()->route('view-application-done',$getLastId);
return view('frontend/done',compact('getLastId'));

//return Redirect::to('https://karkwt.org/home/thank-you-for-participating-in-kar-research/');

//return redirect()->intended('https://karkwt.org/home/thank-you-for-participating-in-kar-research/');


}


    public function viewApplicationDone($id)
    {

        $getId = $id;

        return view('frontend/done',compact('getId'));
    }


    public function DeleteResearch($id)
    {
         $ApplicationForm = ApplicationForm::find($id);

        
        $ApplicationForm->delete();



        $notification = array(
            'message' => 'Research Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Research')->with($notification);


    }

}
