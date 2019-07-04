<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livesession;
use App\Http\Requests;
use App\Http\Resources\livesessionapi as LivesessionResource;
class LivesessionapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $event=livesession::orderBy('created_at','asc')->paginate(15);
        return LivesessionResource::collection($event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $event=$request->isMethod('put')?
        Livesession::find($request->id):new Livesession;
        $event->id=$request->input('id');
        $event->title=$request->input('title');
        $event->body=$request->input('body');
        if($event->save())
        {
            return new LivesessionResource($event);
        }
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
            $event= livesession::find($id);
            return new LivesessionResource($event);
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
        $event=Livesession::findorfail($id);
        if($event->delete())
        {
            return new LivesessionResource($event);
        }
    }
}
