<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livesession;
class LivesessionController extends Controller
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
            $event=livesession::orderBy('created_at','asc')->paginate(4);
            return view('pages.livesession')->with('event',$event);
           }
        $event=livesession::orderBy('created_at','asc')->paginate(4);
        return view('livesessions.index')->with('event',$event);
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
        $event=new livesession;
        
        return view('livesessions.create');
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
       

        ]);
        $event=new livesession;
       
        $event->title=$request->input('title');
        $event->body=$request->input('body');

        $event->save();
        return redirect('livesessions')->with('success','Live Session Added');
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
        $event= livesession::find($id);
        return view('livesessions.show')->with('event',$event);
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
        $event= livesession::find($id);
       
        return view('livesessions.edit')->with('event',$event);
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
        $event=livesession::find($id);
        
        $this->validate($request,[
            'title'=>'required|string|max:190',
            'body'=>'required|string',
           
        ]);

        
        $event->title=$request->input('title');
        $event->body=$request->input('body');
      
        $event->save();
        return redirect('livesessions')->with('success','Live Session Updated');
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
        $event= livesession::find($id);
        $event->delete();
        return redirect('livesessions')->with('success','Live Session Removed');
    }
}
