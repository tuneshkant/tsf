
@extends('layouts.app')
@section('content')
    <!--<a href="adminupcomingevents" class="btn btn-default">Go Back</a>
    --><div class="well">

           <h3>{{$event->title}}</h3>
              <h4>Date:{{$event->date}}<h4>
                  <h5>{!!$event->body!!}<h5>
                      <hr>
              
                      <small>Written on {{$event->created_at}}</small>
                      <a href="{{$event->id}}/edit" class="btn btn-primary">Edit</a> 
              {!!Form::open(['action'=>['Upcomingevent@destroy',$event->id],'method'=>'POST','class'=>'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
              {!!Form::close()!!}
          
          
          
        </div>
        
      

@endsection