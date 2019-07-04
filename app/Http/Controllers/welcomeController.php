<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adminupcomingevents;
use App\testimonial;
use Illuminate\Support\Facades\Storage;
use App\livesession;
use App\jointeam;

use App\healthnews;

class welcomeController extends Controller
{
    //
    public function homepage()
    {  $events=adminupcomingevents::orderBy('date','asc')->get()->where('date', '>=', date("Y-m-d"));
        $testimonial=testimonial::orderBy('created_at','desc')->get();
        $livesession=livesession::orderBy('created_at','desc')->get();
      
        $healthnews=healthnews::orderBy('created_at','desc')->get();
        return view('welcome')->with('events',$events)
        ->with('testimonial',$testimonial)
        ->with('livesession',$livesession)
        ->with('healthnews',$healthnews);
    }
}
