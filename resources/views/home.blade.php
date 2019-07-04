@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-xs-12 well">
              <div class="text-center"><a href="adminupcomingevents/create">Add Upcoming Event</a>
              </div>
            </div>
              <div class="col-md-3 col-xs-12 well" style="margin-left:2%">
                    <div class="text-center"><a href="adminupcomingevents/">Show Upcoming Event</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 well" style="margin-left:2%">
                        <div class="text-center"><a href="healthnews/create">Add Heath and Fitness News</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12 well" style="margin-left:2%">
                            <div class="text-center"><a href="healthnews/">Show Health News</a>
                            </div>
                        </div>
            </div>
            <div class="row" style="margin-top:3%">
                    <div class="col-md-3 col-xs-12 well">
                          <div class="text-center"><a href="livesessions/create">Add Live Session</a>
                          </div>
                        </div>
                          <div class="col-md-3 col-xs-12 well" style="margin-left:2%">
                                <div class="text-center"><a href="livesessions/">Show Live Session</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12 well" style="margin-left:2%">
                                    <div class="text-center"><a href="testimonials">Verify/Show Testimonials</a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-12 well" style="margin-left:2%">
                                        <div class="text-center"><a href="jointeams">Verify Members</a>
                                        </div>
                                    </div>
                        </div>
        </div>
    
</div>
@endsection
