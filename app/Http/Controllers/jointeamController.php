<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jointeam;
use Illuminate\Support\Facades\Storage;

class jointeamController extends Controller
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
            $event=jointeam::where('verify','=','1')->orderBy('created_at','asc')->paginate(4);
           
            return view('pages.ourteammember')->with('event',$event);
           }
        $event=jointeam::orderBy('created_at','asc')->paginate(4);
        return view('jointeams.index')->with('event',$event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        $event=new jointeam;
        
        return view('jointeams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'name'=>'required|string|max:190',
            'mobileno'=>'required|string|max:12',
            'email'=>'required|string|email|max:255|unique:jointeams',
            'address'=>'required|string',
            'education'=>'required|string|max:190',
            'whyjoin'=>'required|string',
            'member_image'=>'image|nullable|max:1999'
        ]);
        if($request->hasFile('member_image'))
        {   //Get Filename with extension
              $filenameWithExt=$request->file('member_image')->getClientOriginalName();
             //Get Just Filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Extension
            $extension=$request->file('member_image')->getClientOriginalExtension();
            //Filename to store
               $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //Upload image
        $path=$request->file('member_image')->storeAs('public/member_images',$fileNameToStore);
        }
        else{
            $fileNameToStore='noimage.jpg';
        }
        
       
        $event=new jointeam;
       $event->member_image=$fileNameToStore;
        $event->name=$request->input('name');
        $event->mobileno=$request->input('mobileno');
        $event->email=$request->input('email');
        $event->address=$request->input('address');
        $event->education=$request->input('education');
        $event->skills=$request->input('skills');
        $event->whyjoin=$request->input('whyjoin');
        $event->verify='0';

        $event->save();
        return redirect('joinourteam')->with('success','Your request is send to admin for verification');
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
        $event= jointeam::find($id);
        return view('jointeams.show')->with('event',$event);
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
        $event= jointeam::find($id);
       
        return view('jointeams.edit')->with('event',$event);
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
        $event=jointeam::find($id);
        $this->validate($request,[
            'name'=>'required|string|max:190',
            'mobileno'=>'required|string|max:20',
            'email'=>'required|string|email|max:255',
            'address'=>'required|string',
            'education'=>'required|string|max:190',
            'whyjoin'=>'required|string',
            'member_image'=>'image|nullable|max:1999'
        ]);
        if($request->hasFile('member_image'))
        {   //Get Filename with extension
              $filenameWithExt=$request->file('member_image')->getClientOriginalName();
             //Get Just Filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Extension
            $extension=$request->file('member_image')->getClientOriginalExtension();
            //Filename to store
               $fileNameToStore=$filename.'_'.time().'.'.$extension;
              
             
                  
          
               //Upload image
                 
        Storage::delete('public/member_images/'.$event->user_image);
               $path=$request->file('member_image')->storeAs('public/member_images',$fileNameToStore);
        }
       else{
      
        $fileNameToStore=$event->member_image;
        
       }
        
       
    
               
      
       $event->member_image=$fileNameToStore;
        $event->name=$request->input('name');
        $event->mobileno=$request->input('mobileno');
        $event->email=$request->input('email');
        $event->address=$request->input('address');
        $event->education=$request->input('education');
        $event->skills=$request->input('skills');
        $event->whyjoin=$request->input('whyjoin');
        $event->verify='1';
        $event->save();
        return redirect('jointeams')->with('success','Member is Verified');
        
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
       
        $event= jointeam::find($id);
        if($event->cover_image!='noimage.jpg')
        {
            Storage::delete('public/cover_images/'.$event->cover_image);
        }
        $event->delete();
        return redirect('jointeams')->with('success','jointeams member is Removed');
    }
}
