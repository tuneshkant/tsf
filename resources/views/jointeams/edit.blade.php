@extends('layouts.app')
@section('content')
 <h1>Verify/Edit Members Details</h1>
 {!! Form::open(['action' => ['jointeamController@update',$event->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
 
 <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name',$event->name,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
            {{Form::label('mobileno','Mobile No')}}
            {{Form::text('mobileno',$event->mobileno,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
                {{Form::label('email','Email')}}
                {{Form::text('email',$event->email,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                    {{Form::label('education','Education')}}
                    {{Form::text('education',$event->name,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                        {{Form::label('skills','Name')}}
                        {{Form::text('skills',$event->name,['class'=>'form-control','placeholder'=>'Title'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('address','Address')}}
                            {{Form::textarea('address',$event->address,['class'=>'form-control'])}}
                        </div>
    <div class="form-group">
            {{Form::label('whyjoin','Join Our Team')}}
            {{Form::textarea('whyjoin',$event->whyjoin,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
                {{Form::label('member_image','Upload Image')}}
                {{Form::file('member_image')}}
                
            </div>
        {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
