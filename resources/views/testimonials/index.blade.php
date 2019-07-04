
@extends('layouts.app')
@section('content')
 <h1>List of Testimonial</h1>
  @if(count($event)>0)
       @foreach($event as $even)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-xs-4">
                        <img style="width:100%" src="/lsapp/storage/app/public/user_images/{{$even->user_image}}" alt="no-imageavailable"/>
                    </div>
                    <div class="col-md-8 col-xs-8">
              <h3><a href="testimonials/{{$even->id}}">{{$even->name}}</a></h3>
              
                  <h5>{!!$even->body!!}<h5>
                      @if($even->verify==0)
                      <h5 style="color:red">  Not Verified</h5>
                       @else
                       <h5 style="color:green">   Verified</h5>
                           @endif
                  </div>
                </div>
            </div>
          
        @endforeach
        {{$event->links()}}
  @else
       <div class="well">
         <h3>No Testimonials Found</h3>
       </div>
  @endif
@endsection