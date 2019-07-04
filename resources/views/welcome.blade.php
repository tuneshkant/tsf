<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
      <style>
       .photo {
    background-image: url("/lsapp/storage/app/public/images/crimage.jpeg");
  width:100%;
  height:600px;
  background-size: 100% 700px;
  background-repeat: no-repeat;

  /* Needed to position the navbar */
  position: relative;
 
}




        </style>
    </head>
    <body>
      <div class="photo">
        @include('inc.navbar')
      </div>
   <div class="healthnewsback">
    <div class="healthnews">

    <div class="container ">
        @if(count($healthnews)>0)
      <h1 class="text-center">Health and Fitness News</h1>
  
     
    <div class="accordian">
            <ul>
         @foreach($healthnews as $even)
           
           
                    <li>
                      <div class="image_title">
                            <h3><a href="healthnews/{{$even->id}}">{{$even->title}}</a></h3>
                
                            <h5>{!!$even->body!!}<h5>
                      </div> 
                   
                        
                        <img width="625px;" height="350px"  src="/lsapp/storage/app/public/cover_images/{{$even->cover_image}}" alt="no-imageavailable"/>
                        
                    </li>
              
          @endforeach
       
                  </ul>
                </div>
                @endif
      
                 
    </div>
  </div>
  </div>
  
  <div class="upcomingevents">
  <div class="container-fluid">
      <div class="row col-xs-12">
          <div class="livesessions col-md-6 col-md-offset-1 col-xs-12">
              <h1 class="text-center">Upcoming Event</h1>
              <div class="upevents">
      @if(count($events)>0)
    

      
            @foreach($events as $even)
          <div class="upcard  col-md-11 col-xs-11">
               
            <div class="update">
                {{$even->date}}
            </div>
            <div class="uptitle">
                {!!$even->title!!}
              </div>
              <div class="upbody">
                  {!!$even->body!!}
                </div>

          </div>
          @endforeach
      
          @endif
        </div>
        
                  </div>
                  <div class="col-md-1">
                      <div class="is-divider-vertical is-hidden-mobile"></div>
                  </div>
                  <div class="livesessions col-md-4 col-xs-12 upsession">
                      <h1 class="text-center">Live Sessions</h1>
                      <div class="upevents">
                      
                      @if(count($livesession)>0)
        
  
       
              @foreach($livesession as $even)
          
            <div class="livecard  col-md-11 col-xs-11">
              
            
              <div class="livetitle">
                  {!!$even->title!!}
                </div>
                <div class="livebody">
                    {!!$even->body!!}
                  </div>
  
            </div>
            @endforeach
            @endif
          
                    </div>
                  </div>
                 
        </div>
  
</div>
</div>
<div class="backtestimonial ">
<div class="testimonialns" >
    @if(count($events)>0)
    <h1 class="text-center"style="padding:2%;" >Testimonials</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
          
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            @php
$i = 0
@endphp
            @foreach($testimonial as $even)	
             @if($i==0)
          <div class="item carousel-item active">
            <div class="img-box"><img src="/lsapp/storage/app/public/user_images/{{$even->user_image}}" alt=""></div>
            <p class="overview text-center"><b>{!!$even->name!!}</b></p>
            <p class="testimonial"> {!!$even->body!!}</p>
          
           
          </div>
   @php
$i = 1
@endphp
          
          @else
          <div class="item carousel-item">
              <div class="img-box"><img src="/lsapp/storage/app/public/user_images/{{$even->user_image}}" alt=""></div>
              <p class="overview text-center"><b>{!!$even->name!!}</b></p>
              <p class="testimonial"> {!!$even->body!!}</p>
           
          
          </div>
           @endif
          @endforeach
        </div>
      
        <!-- Carousel controls -->
        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
          <i class="glyphicon glyphicon-chevron-left"></i>
        </a>
        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
          <i class="glyphicon glyphicon-chevron-right"></i>
        </a>
      </div>
      @endif
  </div>
  @include('inc.footer')
</div>

   


<!--<script src=   "{{ asset('js/custom.js') }}" ></script>

<script src=   "{{ asset('js/app.js') }}" ></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    $(".accordian ul li").hover(function () {
      $(this).toggleClass("images");
  });
    </script>
    </body>
</html>
