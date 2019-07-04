@extends('layouts.app')
@section('content')
 <h1>Edit Live Session</h1>
 {!! Form::open(['action' => ['testimonialController@update',$event->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
 
 <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name',$event->name,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body','Comment')}}
            {{Form::textarea('body',$event->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        <div class="form-group">
                {{Form::file('user_image')}}
                
            </div>
        {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
