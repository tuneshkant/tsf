
@extends('layouts.app')
@section('content')
 <h1>List of upcoming event</h1>
  @if(count($adminupcomingevents)>0)
       @foreach($adminupcomingevents as $event)
            <div class="well nnn">
              <h3><a href="adminupcomingevents/{{$event->id}}">{{$event->title}}</a></h3>
              <h4>Date:{{$event->date}}<h4>
                  <h5>{!!$event->body!!}<h5>
            </div>
          
        @endforeach
        {{$adminupcomingevents->links()}}
  @else
       <div class="well">
         <h3>No Event Found</h3>
       </div>
  @endif
@endsection