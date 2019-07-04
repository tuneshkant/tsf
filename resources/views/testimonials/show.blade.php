
@extends('layouts.app')
@section('content')
   <div class="well">
         
        <div class="row">
                <div class="col-md-4 col-xs-4">
                    <img style="width:100%" src="/lsapp/storage/app/public/user_images/{{$event->user_image}}" alt="no-imageavailable"/>
                </div>
                <div class="col-md-8 col-xs-8">
          <h3><a href="">{{$event->name}}</a></h3>
          
              <h5>{!!$event->body!!}<h5>
                        @if($event->verify==0)
                      <h5 style="color:red">  Not Verified</h5>
                     @else
                     <h5 style="color:green;"> Verified</h5>
                         @endif
              </div>
                      <hr>
              
                      <small>Written on {{$event->created_at}}</small>
                      <a href="{{$event->id}}/edit" class="btn btn-primary">Verify</a> 
              {!!Form::open(['action'=>['testimonialController@destroy',$event->id],'method'=>'POST','class'=>'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
              {!!Form::close()!!}
          
          
          
        </div>
        
      

@endsection