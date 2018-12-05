@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
			<div class="item">
			
			
								<div class="item">
                                <div class="carousel-caption">
                                    </div>
                                
                                <img src="/img/2.jpg" alt="">
                            </div>
							
                <div class="panel-heading"><a href="{{ url('/event/create') }}">Create event</a></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/event') }}">Event List</a>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
