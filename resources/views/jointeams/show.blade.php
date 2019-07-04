
@extends('layouts.app')
@section('content')
   <div class="well">
         
        <div class="row">
                <div class="col-md-3 col-xs-3">
                    <img style="width:100%" src="/lsapp/storage/app/public/member_images/{{$event->member_image}}" alt="no-imageavailable"/>
                </div>
                <div class="col-md-7 col-xs-7">
          <h3><a href="">{{$event->name}}</a></h3>
          <h5>{!!$event->mobileno!!}<h5>
                <h5>{!!$event->email!!}<h5>
                        <h5>{!!$event->education!!}<h5>
                                <h5>{!!$event->skills!!}<h5>
                                        <h5>{!!$event->address!!}<h5>
                                                <h5>{!!$event->whyjoin!!}<h5>
              <h5>{!!$event->body!!}<h5>
                        @if($event->verify==0)
                        <h5 style="color:red">  Not Verified</h5>
                     @else
                     <h5 style="color:green">  Not Verified</h5>
                         @endif
              </div>
                      <hr>
              
                      <small>Written on {{$event->created_at}}</small>
                      <a href="{{$event->id}}/edit" class="btn btn-primary">Verify</a> 
              {!!Form::open(['action'=>['jointeamController@destroy',$event->id],'method'=>'POST','class'=>'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
              {!!Form::close()!!}
          
          
          
        </div>
        
      

@endsection