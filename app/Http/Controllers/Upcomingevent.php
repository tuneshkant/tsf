<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adminupcomingevents;

class Upcomingevent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       
        if(!auth()->user('id'))
           {        $adminupcomingevents=adminupcomingevents::orderBy('date','asc')->paginate(4);
               return view('pages.upcomingevent')->with('adminupcomingevents',$adminupcomingevents);
           }
        $adminupcomingevents=adminupcomingevents::orderBy('date','asc')->paginate(4);
        return view('upcomingevents.index')->with('adminupcomingevents',$adminupcomingevents);
    }
    public function upevent()
    { 
       
        if(!auth()->user('id'))
           {        $event=adminupcomingevents::orderBy('date','asc')->paginate(4);
               return view('pages.firstupcomingevent')->with('event',$event);
           }
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
        $event=new adminupcomingevents;
        
        return view('upcomingevents.create');
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
            'body'=>'required',
            'date'=>'required'

        ]);
        $event=new adminupcomingevents;
       
        $event->title=$request->input('title');
        $event->body=$request->input('body');
        $event->date=$request->input('date');
        $event->save();
        return redirect('adminupcomingevents')->with('success','Event Added');
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
        $event= adminupcomingevents::find($id);
        return view('upcomingevents.show')->with('event',$event);
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
        $event= adminupcomingevents::find($id);
       
        return view('upcomingevents.edit')->with('event',$event);
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
        $event=adminupcomingevents::find($id);
        
        $this->validate($request,[
            'title'=>'required|string|max:190',
            'body'=>'required',
            'date'=>'required'
        ]);

        
        $event->title=$request->input('title');
        $event->body=$request->input('body');
        $event->date=$request->input('date');
        $event->save();
        return redirect('adminupcomingevents')->with('success','Event Updated');
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
        $event= adminupcomingevents::find($id);
        $event->delete();
        return redirect('adminupcomingevents')->with('success','Event Removed');
    }
}
