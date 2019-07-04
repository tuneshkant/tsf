<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    <body >
    <div >
      @include('inc.navbar')
       </div>
       <div class="livesessions">
       <div class="container " >
            @include('inc.message')
            <div class="row">
            <div class="col-md-offset-2 col-md-7 col-xs-12">
 <h1 class="text-center">Join Our Team</h1>

 {!! Form::open(['action' => 'jointeamController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}

 <div class="form-group" >
 <b>   {{Form::label('name','Name')}}</b>
        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Name'])}}
    </div>
    <div class="form-group">
            {{Form::label('mobileno','Mobile No.')}}
            {{Form::text('mobileno','',['class'=>'form-control','placeholder'=>'Enter Mobile no'])}}
        </div>
        <div class="form-group">
                {{Form::label('email','Email')}}
              
                {{Form::text('email','',['class'=>'form-control','placeholder'=>'Enter Email'])}}
             
            </div>
            <div class="form-group">
                    {{Form::label('education','Education')}}
                    {{Form::text('education','',['class'=>'form-control','placeholder'=>'Enter Education'])}}
                </div>
                <div class="form-group">
                        {{Form::label('skills','Skill')}}
                        {{Form::text('skills','',['class'=>'form-control','placeholder'=>'Enter Skills'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('address','Address')}}
                            {{Form::textarea('address','',['class'=>'form-control','placeholder'=>'Enter Address'])}}
                        </div>
    <div class="form-group">
            {{Form::label('whyjoin','Why you want to join?')}}
            {{Form::textarea('whyjoin','',['class'=>'form-control','placeholder'=>'Enter Why you want to Join?'])}}
        </div>
        <div class="form-group">
                {{Form::label('member_image','Upload Your Image')}}
                {{Form::file('member_image')}}
                
            </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>

