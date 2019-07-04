@extends('layouts.app')
@section('content')
 <h1>Add Upcoming Event</h1>
 {!! Form::open(['action' => ['Upcomingevent@update',$event->id],'method'=>'POST']) !!}
 <div class="form-group">
        {{Form::label('date','Date')}}
        {{Form::date('date',$event->date,['class'=>'form-control','placeholder'=>'date'])}}
    </div>
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
