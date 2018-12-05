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
                    <table class="table table-striped">
						<thead>
							<tr>
								<th>Event Name</th>
								<th>Date</th>
								<th>Start of Event</th>
								<th>Venue</th>
								<th>Event Details</th>
									<th>Need Registration</th>
									<th colspan="2">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($events as $row)
							<tr>
								<td>{{$row['event_name']}}</td>
								<td>{{$row['date']}}</td>
								<td>{{$row['time']}}</td>
								<td>{{$row['Venue']}}</td>
								<td>{{$row['event_details']}}</td>
								<td>
								<a href="{{ url('/event/event_registered',$row['id']) }}">{{$row['need_registration']}}</a>
								</td>
								
								<td>
								<a href="{{action('CreateEventController@edit', $row['id'])}}" type="button" >Edit</a>
								</td>
								
								<td>
								<form action="{{action('CreateEventController@destroy', $row['id'])}}" method="post">
								{{csrf_field()}}
							<input name="_method" type="hidden" value="DELETE">
								<button class="btn" type="submit">Delete</button>
							</form>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
