<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\JobPlace;
use App\Models\JobTitle;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function UserDashBoard()
    {
        return view('user.user_dashboard');

    }


    public function AllUsers()
    {


        // $users = User::whereIn('role', ['permanent', 'associate', 'affiliate'])
        // ->latest()->get();

        $users = User::where('role', '!=', 'admin')->orderBy('id', 'DESC')->get();

        //return $users;

        return view('admin.users.all_users',compact('users'));
    }
    public function AddUser()
    {


        $memberships = Membership::orderBy('id', 'ASC')->get();
        $jobPlace = JobPlace::orderBy('id', 'ASC')->get();
        $jobTitle = JobTitle::orderBy('id', 'ASC')->get();


        
        return view('admin.users.add_user',compact('memberships','jobPlace','jobTitle'));

    }

    public function AddUserStore(Request $request)
    {


        $filename = NULL;


        $licenseFile = NULL;

        if ($request->file('license')) {
            $license = $request->file('license');
           // @unlink(public_path('upload/admin/'.$data->photo));
            $licenseFile = date('YmdHi').$license->getClientOriginalName();
            $license->move(public_path('upload/admin'),$licenseFile);
            
        }

        if ($request->file('photo')) {
            $file = $request->file('photo');
           // @unlink(public_path('upload/admin/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }

       
        
        $request->validate([

            'name' => 'required',
            'ar_name' => 'required',
            'username' =>  ['required',Rule::unique('users', 'username')],
            'email' => ['required','email',Rule::unique('users', 'email')],
            'password' => 'required',
            'job_title' => 'required',
            'job_place' => 'required',
            'kma_no' => 'required',
            'kma_valid' => 'required',
            'membership'  => 'required',
            'phone' => ['required',Rule::unique('users', 'phone')],



        ]);
     


        $passwordHash = Hash::make($request->password);


        $user_id = User::insertGetId([

            'name' => $request->name,
            'ar_name' => $request->ar_name,

            'username' => $request->username,
            'email' => $request->email,
            'password' => $passwordHash,
            'job_title_id' => $request->job_title,
            'job_place_id' => $request->job_place,
            'membership_id' => $request->membership,

            'kma_no' => $request->kma_no,
            'kma_valid' => $request->kma_valid,
            'phone' => $request->phone,
            'photo' => $filename,
            'license_picture'=> $licenseFile,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.users')->with($notification);

    }

    public function DeleteUser($id)
    {

        $user = User::find($id);

        
        $user->delete();


        @unlink(public_path('upload/admin/'.$user->photo));

        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.users')->with($notification);

    }

    public function ActiveUser($id)
    {
        $user = User::find($id);

        $user->update([

            'status' => 'active'


        ]);


        $notification = array(
            'message' => 'status updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.users')->with($notification);

    }

    public function InactiveUser($id)
    {
        $user = User::find($id);
        $user->update([

            'status' => 'inactive'


        ]);


        $notification = array(
            'message' => 'status updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.users')->with($notification);

    }


    public function UpdateUser($id)
    {

        $memberships = Membership::orderBy('id', 'ASC')->get();
        $jobPlace = JobPlace::orderBy('id', 'ASC')->get();
        $jobTitle = JobTitle::orderBy('id', 'ASC')->get();
        $user = User::find($id);

        
        return view('admin.users.update_user',compact('user','memberships','jobPlace','jobTitle'));



       // return view('admin.users.update_user',compact('user','memberships'));

    }


    public function UpdateUserStore($id,Request $request )
    {
        $user = User::find($id);

        $filename = NULL;
        $licenseFile = NULL;

   
     

        if($user->photo != NULL)
        {
            $filename = $user->photo;

        }

        if($user->license_picture != NULL)
        {
            $licenseFile = $user->license_picture;

        }

        if ($request->file('license')) {
            $license = $request->file('license');
           // @unlink(public_path('upload/admin/'.$data->photo));
            $licenseFile = date('YmdHi').$license->getClientOriginalName();
            $license->move(public_path('upload/admin'),$licenseFile);
            
        }


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin/'.$user->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }


        $usernameRule = array();
        $emailRule = array();
        $phoneRule = array();


        if($request->username == $user->username)
        {
            $usernameRule = ['required'];
        }
        else
        {
            $usernameRule = ['required',Rule::unique('users', 'username')];
   
        }


        if($request->email == $user->email)
        {
            $emailRule = ['required'];
        }
        else
        {
            $emailRule = ['required',Rule::unique('users', 'email')];
   
        }


        if($request->phone == $user->phone)
        {
            $phoneRule = ['required'];
        }
        else
        {
            $phoneRule = ['required',Rule::unique('users', 'phone')];
   
        }


        $request->validate([

            'name' => 'required',
            'ar_name' => 'required',

            'username' =>  $usernameRule,
            'email' => $emailRule,
            //'password' => 'required',
            'job_title' => 'required',
            'job_place' => 'required',
            
            'kma_no' => 'required',
            'kma_valid' => 'required',
            'membership'  => 'required',
            'phone' => $phoneRule,
            



        ]);
     

        if($request->password == "")
        {

            $passwordHash = $user->password;

        }
        else
        {
            $passwordHash = Hash::make($request->password);

        }



        $user->update([

            'name' => $request->name,
            'ar_name' => $request->ar_name,

            'username' => $request->username,
            'email' => $request->email,
            'password' => $passwordHash,
            'job_title_id' => $request->job_title,
            'job_place_id' => $request->job_place,
            'membership_id' => $request->membership,
            'kma_no' => $request->kma_no,
            'kma_valid' => $request->kma_valid,


            //'role' => $request->membership,
            'phone' => $request->phone,
            'photo' => $filename,
            'license_picture' => $licenseFile,

            
            'address' => $request->address,

            
        ]);

        $notification = array(
            'message' => 'User updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.users')->with($notification);



    }
    




    /// API ////


    public function loginApi(Request $request)
    {

        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($incomingFields)) {
            $user = User::where('email', $incomingFields['email'])->first();
            $token = $user->createToken('ourapptoken')->plainTextToken;
            return response()->json(['token' => $token,'user'=>$user]);

        }
        return response()->json(['message' => 'Authentication failed'], 401);
    }



    public function userByPhoneNumber($phone)
    {


        $user = User::where('phone',$phone)->first();


        if($user == NULL)
        {
            return response()->json(['message' => 'noUser'], 401);
 
        }
        else
        {
       // return response()->json(['user'=>$user]);



       
       $userData = $user->toArray();

       $userData['jobTitle'] = $user->jobTitle->name;
         
       $userData['jobTitleAr'] = $user->jobTitle->ar_name;

      $userData['jobPlace'] = $user->jobPlace->name;

      $userData['jobPlaceAr'] = $user->jobPlace->ar_name;

      $userData['membership'] = $user->membership->name;


      $userData['message'] = "done";


       return $userData;



    //    [
    //     "id": $user->id,
    //     "name": $user->name,
    //     "ar_name": $user->ar_name,
    //     "username": $user->username,
    //     "email": $user->email,
    //     "job_title_id": $user->jobTitle->name,
    //     "job_place_id": $user->jobPlace->name,
    //     "membership_id": $user->membership->name,
    //     "kma_no": $user->,
    //     "kma_valid": $user->,
    //     "email_verified_at": $user->,
    //     "photo": $user->,
    //     "license_picture": $user->,
    //     "phone": $user->,
    //     "address": $user->,
    //     "role": $user->,
    //     "status": $user->,
    //     "app_access": $user->,
    //     "created_at": $user->,
    //     "updated_at": $user->
    //    ]


      // return response()->json(['user' => $user->jobTitle->name,], 401);

        }

        //return response()->json(['message' => 'Authentication failed'], 401);
    }





    


    /////////////////////////////////
    public function createUserApi(Request $request)
    {

       // $user = User::find($id);

       DB::beginTransaction();


 try {
      $user_id = User::insertGetId(
            [

            'name' => $request->name,
            "ar_name" => $request->ar_name,
            "email"=> $request->email,
            "username"=> $request->username,
            "phone"=> $request->phone,
            "created_at" => Carbon::now(),
            "job_title_id" => $request->job_title_id,
            "job_place_id" => $request->job_place_id,
            "membership_id" => $request->membership_id,
            "kma_no" => $request->kma_no,
            "kma_valid" => $request->kma_valid,
            "photo" => $request->photo,
            "license_picture" => $request->license_picture,
           // "phone" => $request->phone,
            "address" => $request->address,
            "app_access" => $request->app_access,
             "token" => $request->token,

            "status" => $request->status
      
       
            ]
            );

        $user = User::find($user_id);




            if ($user) {
                // Reload the user model to get the updated values
                $user = $user->fresh();



                $userData = $user->toArray();

                $userData['jobTitle'] = $user->jobTitle->name;
         
                $userData['jobTitleAr'] = $user->jobTitle->ar_name;

               $userData['jobPlace'] = $user->jobPlace->name;

               $userData['jobPlaceAr'] = $user->jobPlace->ar_name;

               $userData['membership'] = $user->membership->name;
         
               $userData['message'] = "true";


        
                // Return the updated user
             //   return response()->json(['user' => $user]);
        DB::commit();

             return $userData;
            } else {
                // Return an error response if the update fails

                return response()->json(['message' => 'false'], 500);

            }

            }

            catch (\Exception $error) {
        DB::rollBack();

        return response()->json(['message' => 'false'], 500);
    }


    }
    //////////////////////////////////////
    public function updateUserById($id,Request $request)
    {

        $user = User::find($id);

      $updated =  $user->update(
            [

            'name' => $request->name,
            "ar_name" => $request->ar_name,
            "email"=> $request->email,
            "job_title_id" => $request->job_title_id,
            "job_place_id" => $request->job_place_id,
           // "membership_id" => $request->membership_id,
            "kma_no" => $request->kma_no,
            "kma_valid" => $request->kma_valid,
            "photo" => $request->photo,
            "license_picture" => $request->license_picture,
           // "phone" => $request->phone,
            "address" => $request->address,
            "app_access" => $request->app_access,
             "token" => $request->token,

      
       
            ]
            );



            if ($updated) {
                // Reload the user model to get the updated values
                $user = $user->fresh();



                $userData = $user->toArray();

                $userData['jobTitle'] = $user->jobTitle->name;
         
                $userData['jobTitleAr'] = $user->jobTitle->ar_name;

               $userData['jobPlace'] = $user->jobPlace->name;

               $userData['jobPlaceAr'] = $user->jobPlace->ar_name;

               $userData['membership'] = $user->membership->name;
         
               $userData['message'] = "done";


        
                // Return the updated user
             //   return response()->json(['user' => $user]);

             return $userData;
            } else {
                // Return an error response if the update fails

                return response()->json(['message' => 'Failed to update user'], 500);

            }

    }



    






    /// upload image ///

    public function uploadImageApi(Request $request)
    {


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin/'.$user->photo));
            $filename = 'app-'.date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);


            return response()->json(['link' => $filename], 200);

        }

      else {
            return response()->json(['error' => 'Image not provided'], 400);
        }



        /*
  if ($request->hasFile('consultOnlineApp')) {
            $file = $request->file('consultOnlineApp');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('images', $fileName, 'public'); // This will store the image in the storage/app/public/images directory

            // You can also save the file path or URL in your database if needed
            $filePath = 'storage/images/' . $fileName;

            return response()->json(['link' => $filePath], 200);
        } 
        */
    }




    public function userUpdateToken($phone,Request $request)
    {


        //return $request->token;

        $user = User::where('phone',$phone);


        if($user == NULL)
        {
            return response()->json(['message' => 'false'], 401);
 
        }
        else
        {


        $user->update([

           "token"=>$request->token,
      

            
        ]);

        return response()->json(['message' => 'true']);

    }

    }

}
