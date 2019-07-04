
@extends('layouts.app')
@section('content')
 <h1>List of News</h1>
  @if(count($event)>0)
       @foreach($event as $even)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-xs-4">
                        <img style="width:100%" src="/lsapp/storage/app/public/cover_images/{{$even->cover_image}}" alt="no-imageavailable"/>
                    </div>
                    <div class="col-md-8 col-xs-8">
              <h3><a href="healthnews/{{$even->id}}">{{$even->title}}</a></h3>
              
                  <h5>{!!$even->body!!}<h5>
                  </div>
                </div>
            </div>
          
        @endforeach
        {{$event->links()}}
  @else
       <div class="well">
         <h3>No News Found</h3>
       </div>
  @endif
@endsection