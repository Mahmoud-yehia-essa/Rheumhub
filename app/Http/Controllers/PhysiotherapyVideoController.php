<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Physiotherapy;
use Illuminate\Support\Carbon;
use App\Models\PhysiotherapyVideo;

class PhysiotherapyVideoController extends Controller
{
    


    public function AllPhysiotherapyVideo()
    {


        $PhysiotherapyVideo = PhysiotherapyVideo::latest()->get();


        
        return view("admin.PhysiotherapyVideo.all_PhysiotherapyVideo",compact('PhysiotherapyVideo'));
    }


    public function AddPhysiotherapyVideo()
    {
       // PhysiotherapyVideo
        $Physiotherapy = Physiotherapy::orderBy('id', 'ASC')->get();

        return view("admin.PhysiotherapyVideo.add_PhysiotherapyVideo",compact('Physiotherapy'));

    }


    public function UpdatePhysiotherapyVideo($id)
    {
       
        $PhysiotherapyVideo = PhysiotherapyVideo::find($id);
        $Physiotherapy = Physiotherapy::orderBy('id', 'ASC')->get();


        return view("admin.PhysiotherapyVideo.update_PhysiotherapyVideo",compact('PhysiotherapyVideo','Physiotherapy'));

    }

 


    public function UpdatePhysiotherapyVideoStore($id,Request $request )
    {
        $PhysiotherapyVideo = PhysiotherapyVideo::find($id);

        $filename = NULL;

     

        if($PhysiotherapyVideo->video != NULL)
        {
            $filename = $PhysiotherapyVideo->video;

        }


        if ($request->file('video')) {
            $file = $request->file('video');
            @unlink(public_path('upload/admin/'.$PhysiotherapyVideo->video));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }


       


        $request->validate([

            'name' => 'required',
            'des' =>  'required',
           // 'email' => ['required','email',Rule::unique('users', 'email')],
            'physiotherapy' =>  'required',

         



        ]);
     

       



        $PhysiotherapyVideo->update(
            [

                'name' => $request->name,
                'des' => $request->des,
                'physiotherapy' => $request->physiotherapy,
              
               
                'video' => $filename,
    
            ]
    
    );

        $notification = array(
            'message' => 'Physiotherapy video updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.PhysiotherapyVideo')->with($notification);



    }
    

    public function DeletePhysiotherapyVideo($id)
    {
         $PhysiotherapyVideo = PhysiotherapyVideo::find($id);

        
        $PhysiotherapyVideo->delete();


        @unlink(public_path('upload/admin/'.$PhysiotherapyVideo->video));

        $notification = array(
            'message' => 'Physiotherapy Video Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.PhysiotherapyVideo')->with($notification);


    }

    

 

    public function AddPhysiotherapyVideoStore(Request $request)
    {

        //return $request->physiotherapy;
        $filename = NULL;

        if ($request->file('video')) {
            $file = $request->file('video');
           // @unlink(public_path('upload/admin/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }
        $request->validate([

            'name' => 'required',
            'des' =>  'required',
            'physiotherapy' =>  'required',

       



        ]);



        $event_id = PhysiotherapyVideo::insertGetId([

            'name' => $request->name,
            'des' => $request->des,

            
            'physiotherapy' => $request->physiotherapy,


            'video' => $filename,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Physiotherapy Video Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.PhysiotherapyVideo')->with($notification);

     

    }




    public function allPhysiotherapyVideoApi($id)
    {
        

       
        $PhysiotherapyVideo = PhysiotherapyVideo::where("physiotherapy",$id)->get();
      
      
        foreach($PhysiotherapyVideo as $PhysiotherapyVideo2)
        {
         $PhysiotherapyVideo2["humanDate"] = Carbon::parse($PhysiotherapyVideo2->created_at)->diffForHumans();
         $PhysiotherapyVideo2["physiotherapiesCate"] = $PhysiotherapyVideo2->physiotherapies->name;


        }


        return $PhysiotherapyVideo;



    }
    



}
