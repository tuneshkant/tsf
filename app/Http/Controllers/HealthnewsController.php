<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\healthnews;
use Illuminate\Support\Facades\Storage;
class HealthnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       
        if(!auth()->user('id'))
           {
            $event=healthnews::orderBy('created_at','desc')->paginate(4);
            return view('pages.healthnews')->with('event',$event);
           }
        $event=healthnews::orderBy('created_at','desc')->paginate(4);
        return view('healthnews.index')->with('event',$event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!auth()->user('id'))
        {
            return redirect('login')->with('error','Unauthorized Page');
        }
        $event=new healthnews;
        
        return view('healthnews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(!auth()->user('id'))
        {
            return redirect('login')->with('error','Unauthorized Page');
        }
        $this->validate($request,[
            'title'=>'required|string|max:190',
            'body'=>'required|string',
            'cover_image'=>'image|nullable|max:1999'
        ]);
        if($request->hasFile('cover_image'))
        {   //Get Filename with extension
              $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
             //Get Just Filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Extension
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
               $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //Upload image
        $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }
        else{
            $fileNameToStore='noimage.jpg';
        }
        
       
        $event=new healthnews;
       $event->cover_image=$fileNameToStore;
        $event->title=$request->input('title');
        $event->body=$request->input('body');

        $event->save();
        return redirect('healthnews')->with('success','Health News Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if(!auth()->user('id'))
        {
            return redirect('login')->with('error','Unauthorized Page');
        }
        $event= healthnews::find($id);
        return view('healthnews.show')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if(!auth()->user('id'))
        {
            return redirect('login')->with('error','Unauthorized Page');
        }
        $event= healthnews::find($id);
       
        return view('healthnews.edit')->with('event',$event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if(!auth()->user('id'))
        {
            return redirect('login')->with('error','Unauthorized Page');
        }
        $event=healthnews::find($id);
        $this->validate($request,[
            'title'=>'required|string|max:190',
            'body'=>'required|string',
            'cover_image'=>'image|nullable|max:1999'
        ]);
        if($request->hasFile('cover_image'))
        {   //Get Filename with extension
              $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
             //Get Just Filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Extension
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
               $fileNameToStore=$filename.'_'.time().'.'.$extension;
              
             
               Storage::delete('public/cover_images/'.$event->cover_image);  
          
               //Upload image
        $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }
       else{
      
        $fileNameToStore=$event->cover_image;
        
       }
        
       
        
       
               
        $event->cover_image=$fileNameToStore;
        $event->title=$request->input('title');
        $event->body=$request->input('body');

        $event->save();
        return redirect('healthnews')->with('success','Health News Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(!auth()->user('id'))
        {
            return redirect('login')->with('error','Unauthorized Page');
        }
       
        $event= healthnews::find($id);
        if($event->cover_image!='noimage.jpg')
        {
            Storage::delete('public/cover_images/'.$event->cover_image);
        }
        $event->delete();
        return redirect('healthnews')->with('success','Health News Removed');
    }
}
