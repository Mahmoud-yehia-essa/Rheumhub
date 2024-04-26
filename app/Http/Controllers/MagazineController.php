<?php

namespace App\Http\Controllers;

use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MagazineController extends Controller
{
    

    public function AllMagazine()
    {


        // $users = User::whereIn('role', ['permanent', 'associate', 'affiliate'])
        // ->latest()->get();

        $Magazine = Magazine::orderBy('id', 'DESC')->get();


        return view('admin.Magazine.all_Magazine',compact('Magazine'));
    }
    public function AddMagazine()
    {


      

        
        return view('admin.Magazine.add_Magazine');

    }

    public function AddMagazineStore(Request $request)
    {


        $filename = NULL;


        $MagazineFile = NULL;

        if ($request->file('Magazine')) {
            $Magazine = $request->file('Magazine');
           // @unlink(public_path('upload/admin/'.$data->photo));
            $MagazineFile = date('YmdHi').$Magazine->getClientOriginalName();
            $Magazine->move(public_path('upload/admin'),$MagazineFile);
            
        }

        if ($request->file('photo')) {
            $file = $request->file('photo');
           // @unlink(public_path('upload/admin/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }

       
        
        $request->validate([

            'name' => 'required',
        



        ]);
     




        $Magazine_id = Magazine::insertGetId([

            'name' => $request->name,

          
            'photo' => $filename,
            'Magazine'=> $MagazineFile,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Magazine Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Magazine')->with($notification);

    }

    public function DeleteMagazine($id)
    {

        $Magazine = Magazine::find($id);

        
        $Magazine->delete();


        @unlink(public_path('upload/admin/'.$Magazine->photo));

        $notification = array(
            'message' => 'Magazine Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Magazine')->with($notification);

    }

  

    public function UpdateMagazine($id)
    {

        $Magazine = Magazine::find($id);

        
        return view('admin.Magazine.update_Magazine',compact('Magazine'));



       // return view('admin.users.update_user',compact('user','memberships'));

    }


    public function UpdateMagazineStore($id,Request $request )
    {
        $Magazine = Magazine::find($id);

        $filename = NULL;
        $MagazineFile = NULL;

   
     

        if($Magazine->photo != NULL)
        {
            $filename = $Magazine->photo;

        }

        if($Magazine->Magazine != NULL)
        {
            $MagazineFile = $Magazine->Magazine;

        }

        // if ($request->file('Magazine')) {
        //     $Magazine = $request->file('Magazine');
        //     @unlink(public_path('upload/admin/'.$Magazine->Magazine));
        //     $MagazineFile = date('YmdHi').$Magazine->getClientOriginalName();
        //     $Magazine->move(public_path('upload/admin'),$MagazineFile);
            
        // }

        if ($request->file('Magazine')) {
            $MagazineFile = $request->file('Magazine');
            @unlink(public_path('upload/admin/' . $Magazine->Magazine));
            $MagazineFileName = date('YmdHi') . $MagazineFile->getClientOriginalName();
            $MagazineFile->move(public_path('upload/admin'), $MagazineFileName);
            $Magazine->Magazine = $MagazineFileName;
        }


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin/'.$Magazine->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }


        $usernameRule = array();
        $emailRule = array();
        $phoneRule = array();


     

   


        $request->validate([

            'name' => 'required',
          



        ]);
     

        



        $Magazine->name = $request->name;
        $Magazine->photo = $filename;
        $Magazine->save();

        $notification = array(
            'message' => 'Magazine updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Magazine')->with($notification);



    }


    public function allMagazineApi()
    {
        $Magazine = Magazine::latest()->get();


        foreach($Magazine as $Magazine2)
        {
         $Magazine2["humanDate"] = Carbon::parse($Magazine2->created_at)->diffForHumans();

        }


        return $Magazine;


    }

    public function allMagazineLimitedApi()
    {
        $Magazine = Magazine::latest()->take(7)->get();


        foreach($Magazine as $Magazine2)
        {
         $Magazine2["humanDate"] = Carbon::parse($Magazine2->created_at)->diffForHumans();

        }


        return $Magazine;


    }


    
    
}
