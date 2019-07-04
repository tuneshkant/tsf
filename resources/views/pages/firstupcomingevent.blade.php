@if(count($event)>0)
<div class="accordian">
        <ul>
     @foreach($event as $even)
       
          
                <li>
                  <div class="image_title">
                        <h3><a href="healthnews/{{$even->id}}">{{$even->title}}</a></h3>
            
                        <h5>{!!$even->body!!}<h5>
                  </div> 
                
                    <img style="width:100%" src="/lsapp/storage/app/public/cover_images/{{$even->cover_image}}" alt="no-imageavailable"/>
               
                </li>
      @endforeach
@else
     <div class="well">
       <h3>No News Found</h3>
     </div>
@endif