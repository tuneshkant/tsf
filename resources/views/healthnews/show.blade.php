
@extends('layouts.app')
@section('content')
   <div class="well">
         
        <div class="row">
                <div class="col-md-4 col-xs-4">
                    <img style="width:100%" src="/lsapp/storage/app/public/cover_images/{{$event->cover_image}}" alt="no-imageavailable"/>
                </div>
                <div class="col-md-8 col-xs-8">
          <h3><a href="healthnews/{{$event->id}}">{{$event->title}}</a></h3>
          
              <h5>{!!$event->body!!}<h5>
              </div>
                      <hr>
              
                      <small>Written on {{$event->created_at}}</small>
                      <a href="{{$event->id}}/edit" class="btn btn-primary">Edit</a> 
              {!!Form::open(['action'=>['HealthnewsController@destroy',$event->id],'method'=>'POST','class'=>'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
              {!!Form::close()!!}
          
          
          
        </div>
        
      

@endsection