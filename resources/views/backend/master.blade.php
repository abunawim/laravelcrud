<!DOCTYPE HTML>
<html>
<head>
<title>@yield('page_title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{ asset('public/backend/css/bootstrap.min.css') }} " rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{ asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="{{ asset('public/backend/css/icon-font.min.css')}}" type='text/css' />
<!-- //lined-icons -->
<script src="{{ asset('public/backend/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{ asset('public/backend/js/amcharts.js')}}"></script>	
<script src="{{ asset('public/backend/js/serial.js')}}"></script>	
<script src="{{ asset('public/backend/js/light.js')}}"></script>	
<script src="{{ asset('public/backend/js/radar.js')}}"></script>	
<link href="{{ asset('public/backend/css/barChart.css')}}" rel='stylesheet' type='text/css' />
<link href="{{ asset('public/backend/css/fabochart.css')}}" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="{{ asset('public/backend/js/css3clock.js')}}"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="{{ asset('public/backend/js/skycons.js')}}"></script>

<script src="{{ asset('public/backend/js/jquery.easydropdown.js')}}"></script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
				<!--menu-right-->
				<div class="top_menu">
				        <div class="main-search">
							<form>
							   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
								<input type="submit" value="">
							</form>
							<div class="close"><img src=" {{asset('public/backend/images/cross.png')}} " /></div>
						</div>				
					<!--/profile_details-->

						@include('backend.include.header_top')

					<div class="clearfix"></div>	
					<!--//profile_details-->
				</div>
				<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->

						@yield('body_content')

									 <!--footer section start-->
										<footer>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->

				@include('backend.include.sidbar');

	  <div class="clearfix"></div>		
	</div>


<script>
var toggle = true;
			
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
	$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
	$("#menu span").css({"position":"absolute"});
  }
  else
  {
	$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
	setTimeout(function() {
	  $("#menu span").css({"position":"relative"});
	}, 400);
  }
				
				toggle = !toggle;
			});
</script>
<!--js -->
<link rel="stylesheet" href="{{ asset('public/backend/css/vroom.css')}}">
<script type="{{ asset('public/backend/text/javascript" src="js/vroom.js')}}"></script>
<script type="{{ asset('public/backend/text/javascript" src="js/TweenLite.min.js')}}"></script>
<script type="{{ asset('public/backend/text/javascript" src="js/CSSPlugin.min.js')}}"></script>
<script src="{{ asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{ asset('public/backend/js/scripts.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('public/backend/js/bootstrap.min.js')}}"></script>
</body>
</html>