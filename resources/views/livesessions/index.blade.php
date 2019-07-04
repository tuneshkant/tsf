
@extends('layouts.app')
@section('content')
 <h1>List of Live Sessions</h1>
  @if(count($event)>0)
       @foreach($event as $even)
            <div class="well nnn">
              <h3><a href="livesessions/{{$even->id}}">{{$even->title}}</a></h3>
              
                  <h5>{!!$even->body!!}<h5>
            </div>
          
        @endforeach
        {{$event->links()}}
  @else
       <div class="well">
         <h3>No Event Found</h3>
       </div>
  @endif
@endsection