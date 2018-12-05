@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					
					<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
		      <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            /* .content {
                text-align: center;
            } */

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
		
		                            <div class="site-name">
                                        <h1>Create event</h1>
                                    </div>
		
                    </br>
                 
                  <form method="post" action ="{{url('event')}}">
                  {{csrf_field()}}
						<div class="col-md-6">
							<label>Name of event</label>
                            <input type="text" class="form-control" name="event_name" required>
                        </div>
						<div class="col-md-6">
							<label>Date</label>
                            <input type="date" class="form-control" name="date" required>
                        </div>
						<div class="col-md-6">
							<label>Start of Event</label>
                            <input type="time" class="form-control" name="time" required>
                        </div>
						<div class="col-md-6">
							<label>Venue</label>
                            <select  class="form-control" name="venue" required>
								<option value="71aduitorium">71 Aduitorium</option>
							    <option value="maincampus">Main Campus</option>
							    <option value="classroom">Class Room</option>
							</select>
                        </div>
						<div class="col-md-6">
							<label>Event Details</label>
                            <input type="text" class="form-control" name="event_details" required>
                        </div>
						<div class="col-md-6">
							<label>Need Registrtaion</label>
                            <select  class="form-control" name="need_registration" required>
								<option value="Yes">yes</option>
							    <option value="No">No</option>
							   
							</select>
                        </div>
                  <button type="submit" name="submit" class="btn">Submit</button > 
                  </form>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
