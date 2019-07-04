<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testimonial;
use Illuminate\Support\Facades\Storage;
class testimonialController extends Controller
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
               return redirect('login')->with('error','Unauthorized Page');
           }
        $event=testimonial::orderBy('created_at','asc')->paginate(4);
        return view('testimonials.index')->with('event',$event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        $event=new testimonial;
        
        return view('testimonials.create');
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
       
        $this->validate($request,[
            'name'=>'required|string|max:190',
            'body'=>'required|string',
            'user_image'=>'image|nullable|max:1999'
        ]);
        if($request->hasFile('user_image'))
        {   //Get Filename with extension
              $filenameWithExt=$request->file('user_image')->getClientOriginalName();
             //Get Just Filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Extension
            $extension=$request->file('user_image')->getClientOriginalExtension();
            //Filename to store
               $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //Upload image
        $path=$request->file('user_image')->storeAs('public/user_images',$fileNameToStore);
        }
        else{
            $fileNameToStore='noimage.jpg';
        }
        
       
        $event=new testimonial;
       $event->user_image=$fileNameToStore;
        $event->name=$request->input('name');
        $event->body=$request->input('body');
        $event->verify='0';

        $event->save();
        return redirect('writereview')->with('success','Testimonial is send to Admin for verification');
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
        $event= testimonial::find($id);
        return view('testimonials.show')->with('event',$event);
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
        $event= testimonial::find($id);
       
        return view('testimonials.edit')->with('event',$event);
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
        $event=testimonial::find($id);
        $this->validate($request,[
            'name'=>'required|string|max:190',
            'body'=>'required|string',
            'user_image'=>'image|nullable|max:1999'
        ]);
        if($request->hasFile('user_image'))
        {   //Get Filename with extension
              $filenameWithExt=$request->file('user_image')->getClientOriginalName();
             //Get Just Filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Extension
            $extension=$request->file('user_image')->getClientOriginalExtension();
            //Filename to store
               $fileNameToStore=$filename.'_'.time().'.'.$extension;
              
             
                  
          
               //Upload image
                 
        Storage::delete('public/user_images/'.$event->user_image);
               $path=$request->file('user_image')->storeAs('public/user_images',$fileNameToStore);
        }
       else{
      
        $fileNameToStore=$event->user_image;
        
       }
        
       
    
               
        $event->user_image=$fileNameToStore;
        $event->name=$request->input('name');
        $event->body=$request->input('body');
         $event->verify='1';
        $event->save();
        return redirect('testimonials')->with('success','Testimonials Verified');
        
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
       
        $event= testimonial::find($id);
        if($event->cover_image!='noimage.jpg')
        {
            Storage::delete('public/cover_images/'.$event->cover_image);
        }
        $event->delete();
        return redirect('testimonials')->with('success','Testimonials Removed');
    }
}
