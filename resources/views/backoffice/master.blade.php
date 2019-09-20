<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jamii</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="location listing creative">
	<meta name="author" content="CodePassenger">
	<meta name="csrf_token" content="{{csrf_token()}}">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="{{asset('css/admin/other/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/other/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/other/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/other/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/other/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/other/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/other/lobipanel.min.css')}}">

    <!-- BX Slider CSS -->
    <link rel="stylesheet" href="{{asset('/css/admin/other/jquery.bxslider.css')}}">

    <link rel="stylesheet" href="{{asset('css/admin/main/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/admin/main/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('css/admin/main/icons.css')}}">
	<script src="{{asset('js/admin/other/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/admin/other/tether.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
 
	<style>
	.table-bordered td, .table-bordered th {
			border: 1px solid #eceeef;
			text-align: center;
			vertical-align: middle;
      }
	  button.done{
		padding: 6px 10px;
        border-radius: 5px;
		background: #9dcb45;
		color: white;
	  }

	  button.active{
		  padding: 6px 10px;
		  background: red;
		  border-radius: 5px;
		  color: white;
	  }
	  /* table span.done{
		  width: 100px;
		  height: 50px;
	  }
	  table .active{
		  width: 100px;
		  height: 50px;
	  } */
	</style>
 
</head>
<body class="dashboard">
    <div class="main-wrap">
		<!-- Main Navigation -->
        <div class="main-nav-section">
            <nav class="navbar navbar-toggleable-md fixed-top">
               
                <a class="navbar-brand" href="home-one.html">
                   <h2 style="    font-family: 'Alex Brush';
                   font-size: 30px;
                   color: #FF5F00;">Jamii</h2>
                </a>
            </nav>
        </div>
        <!-- main nav section -->
	     <!-- Slide Menu Section -->
		<div class="slide-menu-wrap">
			<nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
			
				<div class="accordion-menu responsive-menu" data-accordion-group>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
                            
							<a href="{{route('adminhome')}}">
                                <span class="menu-icon-wrap fa fa-dashboard"></span>
                              
								<span class="menu-title">Dashboard</span>
							</a>
						</div>
					</div>
					<div class="slide-navigation-wrap" data-accordion>
						<div class="nav-item has-sub" data-control>
							<a href="javascript:void(0)">
								<span class="menu-icon-wrap fa fa-user"></span>
								<span class="menu-title">User List</span>
							</a>
						</div>
						<div class="menu-content" data-content>
							<div class="nav-item">
								<a href="{{route('particularview')}}">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">Particular</span>
								</a>
							</div>
							<div class="nav-item">
								<a href="{{route('professionalview')}}">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">Professional</span>
								</a>
							</div>
						
						</div>
					</div>
			
					<div class="slide-navigation-wrap" data-accordion>
						<div class="nav-item has-sub" data-control>
							<a href="javascript:void(0)">
                                    <span class="menu-icon-wrap fas fa-heart"></span>
                                    <span class="menu-title">Advertise List</span>
							</a>
						</div>
						<div class="menu-content" data-content>
							<div class="nav-item">
								<a href="{{route('generalview')}}">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">General</span>
								</a>
							</div>
							<div class="nav-item">
								<a href="{{route('boostview')}}">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">Boost</span>
								</a>
							</div>
						</div>
					</div>
					<div class="slide-navigation-wrap" data-accordion>
						<div class="nav-item has-sub" data-control>
							<a href="javascript:void(0)">
								<span class="menu-icon-wrap icon fa fa-map"></span>
								<span class="menu-title">Actions</span>
							</a>
							
						</div>
						<div class="menu-content" data-content>
							<div class="nav-item">
								<a href="{{route('activeuser')}}">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">All Users</span>
								</a>
							</div>
							<div class="nav-item">
								<a href="{{route('activeadmob')}}">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">All Admobs</span>
								</a>
							</div>
						</div>
					</div>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a href="{{route('adminlogin')}}">
								<span class="menu-icon-wrap fa fa-sign-out"></span>
								<span class="menu-title">Log out</span>
							</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
        <!-- Slide Menu Section -->
		@yield('content')
	</div>

    <script src="{{asset('js/admin/other/jquery.bxslider.js')}}"></script>
  
    <script src="{{asset('js/admin/other/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery.counterup.min.js')}}"></script>
    {{-- <script src="{{asset('js/admin/other/lobipanel.min.js')}}"></script> --}}
    <script src="{{asset('js/admin/other/jquery.accordion.js')}}"></script>
    <script src="{{asset('js/admin/other/jquery.slimscroll.min.js')}}"></script>
    <!-- Tinymce-JS -->
    <script src="{{asset('js/admin/other/tinymce/tinymce.min.js')}}"></script>
    <!-- Google-map -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script> --}}
    {{-- <script src="{{asset('js/admin/other/gmap3.min.js')}}"></script> --}}
    <script src="{{asset('js/admin/main/custom.js')}}"></script>
</body>
</html>