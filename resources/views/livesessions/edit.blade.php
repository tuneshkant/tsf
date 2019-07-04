@extends('layouts.app')
@section('content')
 <h1>Edit Live Session</h1>
 {!! Form::open(['action' => ['LivesessionController@update',$event->id],'method'=>'POST']) !!}
 
 <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$event->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$event->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
