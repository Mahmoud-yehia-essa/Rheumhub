<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class VideoController extends Controller
{
    
    public function AllVideo()
    {


        $Video = Videos::latest()->get();


        
        return view("admin.Video.all_Video",compact('Video'));
    }


    public function AddVideo()
    {


        return view("admin.Video.add_Video");

    }


    public function UpdateVideo($id)
    {
        $Video = Videos::find($id);

        return view("admin.Video.update_Video",compact('Video'));

    }

 


    public function UpdateVideoStore($id,Request $request )
    {
        $Video = Videos::find($id);

   


      


       


        $request->validate([

            'name' => 'required',
            'des' =>  'required',
            'youtube_id' => 'required',

         



        ]);
     

       



        $Video->update(
            [

                'name' => $request->name,
                'des' => $request->des,
             
                'youtube_id' => $request->youtube_id,
    
            ]
    
    );

        $notification = array(
            'message' => 'Video updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Video')->with($notification);



    }
    

    public function DeleteVideo($id)
    {
         $Video = Videos::find($id);

        
        $Video->delete();



        $notification = array(
            'message' => 'Video Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Video')->with($notification);


    }

    

 

    public function AddVideoStore(Request $request)
    {
       
        $request->validate([

            'name' => 'required',
            'des' =>  'required',
            'youtube_id' =>  'required',




        ]);



        $Video_id = Videos::insertGetId([

            'name' => $request->name,
            'des' => $request->des,

        
            'youtube_id' =>$request->youtube_id,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Video Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.Video')->with($notification);

     

    }


    


    //// Api

    public function allVideoapi()
    {

        $Videos = Videos::latest()->get();


        foreach($Videos as $Videos2)
        {
         $Videos2["humanDate"] = Carbon::parse($Videos2->created_at)->diffForHumans();

        }

        return $Videos;



    }

}
