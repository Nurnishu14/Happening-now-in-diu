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
                    <div class="panel-heading">Update event</div>   
                        <form method="post" action ="{{action('CreateEventController@update', $id)}}">
                        {{csrf_field()}}
                           <div class="input-group">
                           <input name="_method" type="hidden" value="PATCH">


						<div class="col-md-6">
							<label>Name of event</label>
                            <input type="text" class="form-control" name="event_name" value="{{$events->event_name}}">
                        </div>
						<div class="col-md-6">
							<label>Date</label>
                            <input type="date" class="form-control" name="date" value="{{$events->date}}" >
                        </div>
						<div class="col-md-6">
							<label>Start of Event</label>
                            <input type="time" class="form-control" name="time" value="{{$events->time}}">
                        </div>
						
						 <div class ="col-md-6" >
                              <label>Venue</label>
                           <select class="form-control" name="Venue" value="" >
                        <option value="{{$events->Venue}}" >{{$events->Venue}}</option>
						<option value="71aduitorium">71 Aduitorium</option>
                        <option value="maincampus">Main Campus</option>
                        <option value="classroom">Class Room</option>
                        </select>
                           </div>
                           
						
						
						<div class="col-md-6">
							<label>Event Details</label>
                            <input type="text" class="form-control" name="event_details" value="{{$events->event_details}}">
                        </div>
						<div class="col-md-6">
							<label>Need Registrtaion</label>
                            <select  class="form-control" name="need_registration"  value="{{$events->need_registration}}" >
								<option value="{{$events->need_registration}}">{{$events->need_registration}}</option>
								
								<option value="yes">yes</option>
							    <option value="No">No</option>
							   
							</select>
                        </div>

                         
                           
                       
                           

                        <button type="submit" name="submit" class="btn">Update</button > 
                        </form>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection

   
   