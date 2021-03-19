<!doctype html>
<html lang="en">
<head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>frontassets/bootstrap/css/bootstrap.css">
	
	<!-- Custom CSS -->
	<link href="<?php echo base_url() ?>frontassets/css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url() ?>frontassets/css/responsive.css">
	
	<!-- FontAwesome CSS -->
	<link href="<?php echo base_url() ?>frontassets/fonts/css/all.css" rel="stylesheet" type="text/css">
	
	<title>khorroborre</title>
  </head>
  <body >
	
	<!-- <div>
		<video width="98%" height="640px" controls  class="video_size" id="myvideo" autoplay muted="">
			<source src="assets/images/video/intro.mp4" type="video/mp4" >
			
		  </video>
	</div> -->



	 <!-- first step
	
		  <video height="660" autoplay="true"  muted="true" id="myvideo" class="plyer" plays-inline="" class="video_index" style=" min-width:100%; z-index: -100; object-fit: cover;">
		<source src="assets/images/video/intro.mp4" type="video/mp4" class=" "> </video>
	-->
	
	

	<video class="videoBG" id="myvideo" poster="poster" autoplay muted >
		<source src="<?php echo base_url() ?>frontassets/images/video/intro.mp4" type="video/mp4"> 
	</video>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url() ?>frontassets/bootstrap/js/jquery-3.5.1.slim.js"></script>
    <script src="<?php echo base_url() ?>frontassets/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url() ?>frontassets/bootstrap/js/bootstrap.js"></script>
	  
	<script src="<?php echo base_url() ?>frontassets/js/hideshow.js"></script>
	  
	<script src="<?php echo base_url() ?>frontassets/fonts/js/all.js"></script>
	<script>
		document.getElementById('myvideo').addEventListener('ended',myHandler, false);
		function myHandler(e) {
		window.location="<?php echo base_url() ?>home/index1";
		};
	 </script>


<script>
	$(document).ready(function(){
		$('.popUpMain').click(function(){
			$('.popUpMain').hide();
		} );
	} );
  </script>
  <script>
	$(document).ready(function(){
		$('#inside_img2').click(function(){
			$('.popUpMain').show();
		} );
	} );
  </script>
	  
  </body>
</html>