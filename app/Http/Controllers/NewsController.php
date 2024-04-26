<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class NewsController extends Controller
{
    

    public function AllNews()
    {


        $News = News::latest()->get();


        
        return view("admin.News.all_News",compact('News'));
    }


    public function AddNews()
    {


        return view("admin.News.add_News");

    }


    public function UpdateNews($id)
    {
        $News = News::find($id);

        return view("admin.News.update_News",compact('News'));

    }

 


    public function UpdateNewsStore($id,Request $request )
    {
        $News = News::find($id);

        $filename = NULL;

     

        if($News->photo != NULL)
        {
            $filename = $News->photo;

        }


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin/'.$News->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }


       


        $request->validate([

            'name' => 'required',
            'des' =>  'required',
           
         



        ]);
     

       



        $News->update(
            [

                'name' => $request->name,
                'des' => $request->des,
             
                'photo' => $filename,
    
            ]
    
    );

        $notification = array(
            'message' => 'News updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.News')->with($notification);



    }
    

    public function DeleteNews($id)
    {
         $News = News::find($id);

        
        $News->delete();


        @unlink(public_path('upload/admin/'.$News->photo));

        $notification = array(
            'message' => 'News Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.News')->with($notification);


    }

    

 

    public function AddNewsStore(Request $request)
    {
        $filename = NULL;

        if ($request->file('photo')) {
            $file = $request->file('photo');
           // @unlink(public_path('upload/admin/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin'),$filename);
            
        }
        $request->validate([

            'name' => 'required',
            'des' =>  'required',
           



        ]);



        $News_id = News::insertGetId([

            'name' => $request->name,
            'des' => $request->des,

        
            'photo' => $filename,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'News Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.News')->with($notification);

     

    }


    //// Api

    public function allNewsApi($number)
    {
        

        if($number != 0)
        {
        $news = News::latest()->take($number)->get();
        }
        else
        {
            $news = News::latest()->get();

        }
        foreach($news as $news2)
        {
         $news2["humanDate"] = Carbon::parse($news2->created_at)->diffForHumans();

        }


        return $news;



    }

}
