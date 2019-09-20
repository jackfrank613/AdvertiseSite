<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jamii</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="location listing creative">
    <meta name="author" content="CodePassenger">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type='text/css'>

    <link rel="stylesheet" href="{{asset('css/admin/other/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/other/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/other/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/other/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/other/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/other/magnific-popup.css')}}">

    <!-- Owl Carousel CSS -->
   
    <!-- BX Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/admin/other/jquery.bxslider.css')}}">

    <link rel="stylesheet" href="{{asset('css/admin/main/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/admin/main/responsive.css')}}">
</head>

<body>
    <div class="main-wrap">
        <!-- Main Navigation -->
       
           
        </div>
        <!-- main nav section -->
        
        <div class="user-form-block"  style="background-image:url('img/background.jpg');background-size:cover">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-12">
                            <div class="registration-form-block" style="background: aliceblue;
                            border-radius: 10px;">
                                <div class="registration-form-title">
                                    <h4>Sign in</h4>
                                </div>
                                <div class="form-block">
                                    <form class="form-common" action="{{route('ownerlogin')}}">
                                        <div class="form-group">
                                            <label for="userName">Admin Name *</label>
                                            <input type="text" class="form-control" name="name" id="userName" placeholder="Enter your Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password *</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Passwoed">
                                        </div>
                                       <div>
                                        <span style="color:red">@if(Session::has('error_message')) Login failed @endif</span>
                                       </div>
                                        <div class="form-group">
                                            <div class="form-btn-block">
                                                <button type="submit" class="form-btn">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                   
                                </div>
                            </div>
                            <!-- panel -->
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="call-to-action-section">
            <div class="container">
                <h2>
                    Commencez dès aujourd'hui pour obtenir plus de visibilité et <br> développer votre entreprise
                </h2>
              
              
            </div>
        </div>
        <!-- call-to-action section-->
        
    </div>
   <script src="{{asset('js/admin/other/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/admin/other/tether.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery.bxslider.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/admin/other/lobipanel.min.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery.accordion.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery.slimscroll.min.js')}}"></script>
    <!-- Tinymce-JS -->
    <script src="{{asset('js/admin/other/tinymce/tinymce.min.js')}}"></script>
    <!-- Google-map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="{{asset('js/admin/other/gmap3.min.js')}}"></script>
    <script src="{{asset('js/admin/main/custom.js')}}"></script>
</body>
</html>