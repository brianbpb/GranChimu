<!DOCTYPE HTML>
<html>
	<head>
		<title>Gran Chimu</title>

		<link href="{{ URL::to('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
		<script src="{{ URL::to('js/jquery.min.js') }}"></script>
		 <!-- Custom Theme files -->
		<link href="{{ URL::to('css/style.css') }}" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   		 <!-- webfonts -->
   		 <link href='http://fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
   		 <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
   		 <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
   		  <!-- webfonts -->
	</head>

	<body>
		@include('layout.web.head');

		@yield('content');

		@include('layout.web.footer');

		<!----start-slider-script---->
			<script src="{{ URL::to('js/responsiveslides.min.js') }}"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 50,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	</body>	
</html>
