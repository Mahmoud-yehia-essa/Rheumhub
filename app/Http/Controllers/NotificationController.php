<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\JobPlace;
use App\Models\JobTitle;
use App\Models\EventType;
use App\Models\EventUsers;
use App\Models\Membership;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //



    public function NotificatioForAllType()
    {

        $memberships = Membership::orderBy('id', 'ASC')->get();
        $jobTitle = JobTitle::orderBy('id', 'ASC')->get();
        $jobPlace = JobPlace::orderBy('id', 'ASC')->get();



      //  $eventType = EventType::orderBy('id', 'ASC')->get();

        return view('admin.notification.add_notification_all_type',compact('memberships','jobTitle','jobPlace'));


    }


    public function MembershipsNotification()
    {

        $memberships = Membership::orderBy('id', 'ASC')->get();

      //  $eventType = EventType::orderBy('id', 'ASC')->get();

        return view('admin.notification.add_notification_membership',compact('memberships'));


    }
    public function jobTitleNotification()
    {

        $jobTitle = JobTitle::orderBy('id', 'ASC')->get();

        //  $eventType = EventType::orderBy('id', 'ASC')->get();

          return view('admin.notification.add_notification_jobTitle',compact('jobTitle'));
  

    }
    public function jobPlaceNotification()
    {

        $jobPlace = JobPlace::orderBy('id', 'ASC')->get();

        //  $eventType = EventType::orderBy('id', 'ASC')->get();

          return view('admin.notification.add_notification_jobPlace',compact('jobPlace'));
  
    }
    public function EventNotification()
    {


         $eventType = EventType::orderBy('id', 'ASC')->get();

          return view('admin.notification.add_notification_eventType',compact('eventType'));
    }

    public function UsersNotification()
    {


         //$users = User::orderBy('id', 'ASC')->get();
         $users = User::where('role', '!=', 'admin')->orderBy('name', 'ASC')->get();


          return view('admin.notification.add_notification_users',compact('users'));
    }

    /// New

    public function sendNotificatioForUser(Request $request)
    {




     // $User = User::latest();


      $request->validate([

        'title' => 'required',
        'description' => 'required',

        'type' => 'required',





      ]);



  

      
     
   
      // dd($response);


       /// End ///

       $tokenArray = array();
       

      if($request->type == "all")
      {
       // return "Send for all users";

        $user = User::where('role','user')->get();


        foreach($user as $user)
        {

          $tokenArray[] = $user->token;


          Notification::insert([

            'user_id'=>$user->id,
            'title'=>$request->title,
  
            'des'=>$request->description,
            "created_at" => Carbon::now(),
  
  
  
  
          ]);
        }

      }

     else
      {


        $user = User::find($request->type);

        $tokenArray[] = $user->token;


        Notification::insert([

          'user_id'=>$request->type,
          'title'=>$request->title,

          'des'=>$request->description,
          "created_at" => Carbon::now(),




        ]);


      







      }


       /// Send notifications ///

       $SERVER_API_KEY = 'AAAAaHFVKoM:APA91bEgIV2pHvoja0B7krgcMWcWLFGTKYFyCLA1JFgMwjM9vXqHF6EQc3T23Z9SoPT13RbG7dT01Q0vf_4CjpkPwT_vUF7GEFWBpeaylUjoELJLPZPOzKoAuV4NdlICPxTFx9YsldHo';

      // $token_1 = 'dlKdt-3mR9WlQEcTx0PTXx:APA91bH-tfNe949IBtsEXjGpl-96LxXqxAgk58ZTDdXAsET1KcQBxKYpZ--zv8gK17dqen1ZWncqkoJbZwagSJQYj95xJnCB2SHdMQhMQA-FJ7CmeavHDORvLrAvlaRZxEotw3nWs4jS';
   


       /*
       $data = [
   
           "registration_ids" => [
               $token_1
           ],
   
           "notification" => [
   
               "title" => 'Welcome',
   
               "body" => 'Description',
   
               "sound"=> "default" // required for sound on ios
   
           ],
   
       ];
       */

       $data = [
   
        "registration_ids" => $tokenArray,

        "notification" => [

            "title" => $request->title,

            "body" => '',
          //  'badge' => '1',
            "android_channel_id" => 'high_importance_channel',

            "sound"=> "default" // required for sound on ios

        ],
        
                "data" => ["title"=>"hello rhh"]


    ];

       
   
       $dataString = json_encode($data);
   
       $headers = [
   
           'Authorization: key=' . $SERVER_API_KEY,
   
           'Content-Type: application/json',
   
       ];
   

      $ch = curl_init();
   
      curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
  
      curl_setopt($ch, CURLOPT_POST, true);
  
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
      curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
  
      $response = curl_exec($ch);


      $notification = array(
        'message' => 'Notification sent Successfully',
        'alert-type' => 'success'
    );

     return redirect()->route('admin.all.notification.users')->with($notification);


      //return $request->type;


    }/// end





    



    public function sendNotificatioForAllType(Request $request)
    {

     // return $request->membership."-".$request->job_place."-".$request->job_title;
     $tokenArray = array();

     
      if( $request->membership == "all" && $request->job_place == "all" &&  $request->job_title == "all")
      {
      //  return "send for all user";

        $user = User::where('role','user')->get();
       // return $user;

      }


      else if( $request->membership == "all" && $request->job_place == "all" &&  $request->job_title != "all")
      {
        //return "send for all membership all job_place and Select job_title";

        //$users = User::where('role', '!=', 'admin')->orderBy('id', 'ASC')->get();

        $user = User::where('job_title_id',$request->job_title)->where('role','user')->get();

      //  return $user;

      }

      else if( $request->membership != "all" && $request->job_place == "all" &&  $request->job_title == "all")
      {
       // return "send for all job_title  all job_place and Select membership";
        $user = User::where('membership_id',$request->membership)->where('role','user')->get();


       // $user = User::where('job_title_id',$request->job_title)->where('role','user')->get();

       // return $user;
      }

      else if( $request->membership == "all" && $request->job_place != "all" &&  $request->job_title == "all")
      {
        //return "send for all membership  all job_title and Select job_place";

        $user = User::where('job_place_id',$request->job_place)->where('role','user')->get();
       // return $user;

      }


      else if( $request->membership != "all" && $request->job_place != "all" &&  $request->job_title == "all")
      {
        //return "send for all job_title  and Select membership , job_place";

        $user = User::where('job_place_id',$request->job_place)->where('membership_id',$request->membership)->where('role','user')->get();
       // return $user;

      }


      else if( $request->membership == "all" && $request->job_place != "all" &&  $request->job_title != "all")
      {
        //return "send for all membership  and Select job_place , job_title";

        $user = User::where('job_place_id',$request->job_place)->where('job_title_id',$request->job_title)->where('role','user')->get();
       //return $user;

      }


      else if( $request->membership != "all" && $request->job_place == "all" &&  $request->job_title != "all")
      {
       // return "send for all job_place  and Select membership , job_title";
        $user = User::where('job_title_id',$request->job_title)->where('membership_id',$request->membership)->where('role','user')->get();
       // return $user;

      }

      else if( $request->membership != "all" && $request->job_place != "all" &&  $request->job_title != "all")
      {
       // return " Select membership , job_place , job_title";

        $user = User::where('job_title_id',$request->job_title)->where('job_place_id',$request->job_place)->where('membership_id',$request->membership)->where('role','user')->get();
        //return $user;

      }


      foreach($user as $user)
      {


        $tokenArray[] = $user->token;


        Notification::insert([

          'user_id'=>$user->id,
          'title'=>$request->title,

          'des'=>$request->description,
          "created_at" => Carbon::now(),




        ]);
      }





      /// Send notification 


       /// Send notifications ///

       $SERVER_API_KEY = 'AAAAaHFVKoM:APA91bEgIV2pHvoja0B7krgcMWcWLFGTKYFyCLA1JFgMwjM9vXqHF6EQc3T23Z9SoPT13RbG7dT01Q0vf_4CjpkPwT_vUF7GEFWBpeaylUjoELJLPZPOzKoAuV4NdlICPxTFx9YsldHo';

      // $token_1 = 'dlKdt-3mR9WlQEcTx0PTXx:APA91bH-tfNe949IBtsEXjGpl-96LxXqxAgk58ZTDdXAsET1KcQBxKYpZ--zv8gK17dqen1ZWncqkoJbZwagSJQYj95xJnCB2SHdMQhMQA-FJ7CmeavHDORvLrAvlaRZxEotw3nWs4jS';
   


       /*
       $data = [
   
           "registration_ids" => [
               $token_1
           ],
   
           "notification" => [
   
               "title" => 'Welcome',
   
               "body" => 'Description',
   
               "sound"=> "default" // required for sound on ios
   
           ],
   
       ];
       */

       $data = [
   
        "registration_ids" => $tokenArray,

        "notification" => [

            "title" => $request->title,

            "body" => '',
          //  'badge' => '1',
            "android_channel_id" => 'high_importance_channel',

            "sound"=> "default" // required for sound on ios

        ],
        
                "data" => ["title"=>"hello rhh"]


    ];

       
   
       $dataString = json_encode($data);
   
       $headers = [
   
           'Authorization: key=' . $SERVER_API_KEY,
   
           'Content-Type: application/json',
   
       ];
   

      $ch = curl_init();
   
      curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
  
      curl_setopt($ch, CURLOPT_POST, true);
  
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
      curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
  
      $response = curl_exec($ch);


      $notification = array(
        'message' => 'Notification sent Successfully',
        'alert-type' => 'success'
    );

     return redirect()->route('admin.all.notification.users')->with($notification);


      //return $request->type;


    }

    public function sendNotificatioFormemberships(Request $request)
    {



      $request->validate([

        'title' => 'required',
        'description' => 'required',

        'membership' => 'required',





      ]);



  

       

      if($request->membership == "all")
      {
       // return "Send for all users";

        $user = User::where('role','user')->get();


        foreach($user as $user)
        {


          Notification::insert([

            'user_id'=>$user->id,
            'title'=>$request->title,
  
            'des'=>$request->description,
            "created_at" => Carbon::now(),
  
  
  
  
          ]);
        }

      }
      else
      {

        $user = User::where('membership_id',$request->membership)->where('role','user')->get();


        foreach($user as $user)
        {


          Notification::insert([

            'user_id'=>$user->id,
            'title'=>$request->title,
  
            'des'=>$request->description,
            "created_at" => Carbon::now(),
  
  
  
  
          ]);
        }

      }


      $notification = array(
        'message' => 'Notification sent Successfully',
        'alert-type' => 'success'
    );

     return redirect()->route('admin.all.notification.users')->with($notification);


      //return $request->type;


    }





    public function sendNotificatioForjobTitle(Request $request)
    {



      $request->validate([

        'title' => 'required',
        'description' => 'required',

        'job_title' => 'required',





      ]);



  

       

      if($request->job_title == "all")
      {
       // return "Send for all users";

        $user = User::where('role','user')->get();


        foreach($user as $user)
        {


          Notification::insert([

            'user_id'=>$user->id,
            'title'=>$request->title,
  
            'des'=>$request->description,
            "created_at" => Carbon::now(),
  
  
  
  
          ]);
        }

      }
      else
      {

        $user = User::where('job_title_id',$request->job_title)->where('role','user')->get();


        foreach($user as $user)
        {


          Notification::insert([

            'user_id'=>$user->id,
            'title'=>$request->title,
  
            'des'=>$request->description,
            "created_at" => Carbon::now(),
  
  
  
  
          ]);
        }

      }


      $notification = array(
        'message' => 'Notification sent Successfully',
        'alert-type' => 'success'
    );

     return redirect()->route('admin.all.notification.users')->with($notification);


      //return $request->type;


    }






    public function sendNotificatioForjobPlace(Request $request)
    {



      $request->validate([

        'title' => 'required',
        'description' => 'required',

        'job_place' => 'required',





      ]);



  

       

      if($request->job_place == "all")
      {
       // return "Send for all users";

        $user = User::where('role','user')->get();


        foreach($user as $user)
        {


          Notification::insert([

            'user_id'=>$user->id,
            'title'=>$request->title,
  
            'des'=>$request->description,
            "created_at" => Carbon::now(),
  
  
  
  
          ]);
        }

      }
      else
      {

        $user = User::where('job_place_id',$request->job_place)->where('role','user')->get();


        foreach($user as $user)
        {


          Notification::insert([

            'user_id'=>$user->id,
            'title'=>$request->title,
  
            'des'=>$request->description,
            "created_at" => Carbon::now(),
  
  
  
  
          ]);
        }

      }


      $notification = array(
        'message' => 'Notification sent Successfully',
        'alert-type' => 'success'
    );

     return redirect()->route('admin.all.notification.users')->with($notification);


      //return $request->type;


    }



    public function sendNotificatioForjobeventType(Request $request)
    {



      $request->validate([

        'title' => 'required',
        'description' => 'required',

        'eventType' => 'required',





      ]);



  

       

      if($request->eventType == "all")
      {
       // return "Send for all users";

        $user = User::where('role','user')->get();


        foreach($user as $user)
        {


          Notification::insert([

            'user_id'=>$user->id,
            'title'=>$request->title,
  
            'des'=>$request->description,
            "created_at" => Carbon::now(),
  
  
  
  
          ]);
        }

      }
      else
      {

        return $request->eventType;
       // event_users
        $EventUsers = EventUsers::where('event_id',$request->eventType)->get();


        foreach($EventUsers as $EventUsers)
        {


          Notification::insert([

            'user_id'=>$EventUsers->user_id,
            'title'=>$request->title,
  
            'des'=>$request->description,
            "created_at" => Carbon::now(),
  
  
  
  
          ]);
        }

      }


      $notification = array(
        'message' => 'Notification sent Successfully',
        'alert-type' => 'success'
    );

     return redirect()->route('admin.all.notification.users')->with($notification);


      //return $request->type;


    }
    


    



    


    public function allNotification()
    {

      $notification = Notification::latest()->get();

      return view('admin.notification.all_notification',compact('notification'));



    }




    /// Api

    public function allNotificationForUserId($user_id)
    {

      $notification = Notification::where('user_id',$user_id)->orderBy('id', 'DESC')->get();


      foreach($notification as $notification2)
        {
         $notification2["humanDate"] = Carbon::parse($notification2->created_at)->diffForHumans();

        }

      return $notification;


    }


    public function updateNotificationUserView($notification_id,Request $request)
    {

      
      $Notification = Notification::find($notification_id);


      

      //return $Notification;
      $Notification->update([


        'user_view'=>$request->value

      ]);
    

      return response()->json(['message' => 'true']);



    }


    public function updateNotificationUserViewByUserId($user_id,Request $request)
    {

      
      $Notification = Notification::where('user_id',$user_id);


      

      //return $Notification;
      $Notification->update([


        'user_view'=>$request->value

      ]);
    

      return response()->json(['message' => 'true']);



    }


    public function clearAllNotificationForUserId($user_id)
    {

      
      $notification = Notification::where('user_id',$user_id)->delete();


      

      return response()->json(['message' => 'true']);



    }

    


    
}



