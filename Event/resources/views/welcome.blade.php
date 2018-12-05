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
        <div class="banner">
            <div class="container">
                    <div class="carousel slide" id="myCarousel">
                                  
								  <div class="carousel-inner">
                            <div class="item">
                                <div class="carousel-caption">
                                    <h2>Happening now in DIU</h2><br>
                                    <h1>Daffodil Internation UNiversity</h1>
                                    <div class="shadow"><img src="/img/shadow.png" alt=""></div>
                                </div>
                                
                                <img src="/img/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <div class="carousel-caption">
                                    <h2>Happening now in DIU</</h2><br>
                                    <h1>Daffodil Internation Uiiversity</h1>
                                    <div class="shadow"><img src="/img/shadow.png" alt=""></div>
                                </div>
                                <img src="/img/2.jpg" alt="">
                            </div>
                            <div class="item active">
                                <div class="carousel-caption">
                                    <h2>Happening now in DIU</h2><br>
                                    <h1>Daffodil Internation University</h1>
                                    <div class="shadow"><img src="/img/shadow.png" alt=""></div>
                                </div>
                                <img src="/img/3.jpg" alt="">

                            </div>
                        </div>
                        <a data-slide="prev" href="#myCarousel" class="carousel-control left"><i class="fw-icon-chevron-left"></i></a>
                        <a data-slide="next" href="#myCarousel" class="carousel-control right"><i class="fw-icon-chevron-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="featured-blocks">
                    <div class="container">
                        <div class="row">
                        @foreach($events as $row)
                            <div class="span4" style="padding-bottom: 43px;">
                                <div class="block">
                                    
                                    <h1>{{$row['event_name']}}</h1>
                                    <p>{{$row['date']}}</p>
                                    <p>{{$row['event_details']}}</p>
									
                                    <a href="{{action('CreateEventController@details', $row['id'])}}" role="button" class="btn" data-toggle="modal">More Details</a>
                                </div>
                            </div>
                        @endforeach
                            
                        </div>
                        <div class="row-fluid">
                            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     </div>
                        </div>
                    </div>
                </div>
                
               
                </div>
                <div class="footer-wrapper">
                    <div class="container">
                        <div class="site-footer">
                            <div class="row-fluid">
                              
                                <div class="span3">
                                    <div class="block">
                                        <h1>Any Need</h1>
                                        <ul>
                                            <li>
                                                
                                                <div class="info">
                                                <span>Call Us</span><br><a href="#">01737417419</a>
                                                </div>
                                            </li>
                                            <li>
                                                
                                                <div class="info">
                                                <span>Mail Us</span><br><a href="#">happingnowinDIU@diu.edu.bd</a>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
        

       
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
