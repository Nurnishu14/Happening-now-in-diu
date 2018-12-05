<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DIU</title>
        <link rel="stylesheet" href="{{URL::to('/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{URL::to('/css/bootstrap-responsive.css')}}">
        <link rel="stylesheet" href="{{URL::to('/css/custom-styles.css')}}">
        <link rel="stylesheet" href="{{URL::to('/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{URL::to('/css/component.css')}}">
        <link rel="stylesheet" href="{{URL::to('/css/font-awesome-ie7.css')}}">

        <script src="{{URL::to('/js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>
        <div class="header-wrapper">
            <div class="container">
                <div class="logo">
                    <h1>bizname</h1>
                </div>
            <div class="menu">
                <div class="navbar">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <i class="fw-icon-th-list"></i>
                        </a>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Services</a></li>
                                <li>
                                    <div class="site-name">
                                        <h1>DIU</h1>
                                    </div>
                                </li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Contact</a></li>
								<li><a href="#">About</a></li>
                            </ul>
                        </div>
                </div>
            </div>
            </div>
        </div>
        <div class="featured-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <h4>Event Registration</h4>
                        </div>
                        <hr>
                        <form method="post" action="{{url('event/registration/{id}')}}">
                        {{csrf_field()}}
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Name</label>
                                
                                    <input type="hidden" name="event_id" value="{{$events['id']}}" required>
                                    <input type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Email</label>
                                    <input type="text" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Department</label>
                                    <input type="text" name="dept" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Student ID</label>
                                    <input type="text" name="s_id" required>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn">Submit</button >
                        </form>
                    </div>
                </div>
            </div>
        </div>
               
                
        

        
       <script src="{{URL::to('/js/jquery-1.9.1.js')}}"></script> 
<script src="{{URL::to('/js/bootstrap.js')}}"></script>
<script src="{{URL::to('/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{URL::to('/js/imagesloaded.js')}}"></script>
    <script src="{{URL::to('/js/classie.js')}}"></script>
    <script src="{{URL::to('/js/AnimOnScroll.js')}}"></script>
    
    <script>
      new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
      } );
    </script>
<script>
$('#myCarousel').carousel({
    interval: 1800
});
</script>

    </body>
</html>
