<!doctype html>
<html lang="en">
<head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>frontassets/bootstrap/css/bootstrap.css">
	
	<!-- Custom CSS -->
    <link href="<?php echo base_url() ?>frontassets/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>frontassets/css/responsive.css" rel="stylesheet">
	
	<!-- FontAwesome CSS -->
  <link href="<?php echo base_url() ?>frontassets/fonts/css/all.css" rel="stylesheet" type="text/css">
  
  <!-- Aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
	<title>khorroborre</title>
  </head>
  <body>
	<div class="bg">
   
    <!-- <div class="row">
      <div class="col padding_error facebook_c" style="display: none;">
            <div id="main">
              <div style="background-color:coral;margin-top:5px;padding:5px;">RED</div>
              <div style="background-color:lightblue;margin-top:5px;padding:5px;">BLUE</div>  
              <div style="background-color:lightgreen;margin-top:5px;padding:5px;">Green div with more content.</div>
            </div>
      </div>
      <div class="col padding_error facebook_r_c" align="right" style="display: none;">
        <div id="main2">
          <div style="background-color:coral;margin-top:5px;padding:5px;">RED</div>
          <div style="background-color:lightblue;margin-top:5px;padding:5px;">BLUE</div>  
          <div style="background-color:lightgreen;margin-top:5px;padding:5px;">Green div with more content.</div>
        </div>
      </div>
    </div> -->

   


  


    
  </div>
  
 





	<div class="row"> 
    <div class="col padding_error">
      <div class="hide_expand">
        <a href="#" onClick="hideShow()">
          <h5>Click to expand  </h5>
          
        </a>
      </div>
      <div class="box_bottom" id="hideShow">
        <div class="row">
        
          <div class="col" >
            <div class="index_btn" >
              <a href="<?php echo base_url() ?>home/view">
                <img src="<?php echo base_url() ?>frontassets/images/icons/new_index.png" class="img-fluid1 btm_logo" alt="khorroborre journal" id="button_img" />
              </a>
            </div>
          </div>
     
        </div>
        <div class="" align="center" >
          <div class="row" >
            <div class="col padding_error btm_txt_all" align="left" style="padding-top: 4px;"  >
             
            </div>
            <div class="col btm_txt_all" style="padding-top: 4px;">
              March 2020
            </div>
          <div class="col btm_txt_all" style="padding-top: 4px;" >
            Journal No 02
          </div>
          <div class="col" style="margin-top: 30px;">
             
             <div style="color:white"> 
              <span onClick="hideShow()" class="cursor"> Index </span>
            </div>
              <div style="color:white;margin-top: -10px;">
                <span onClick="hideShow()" class="cursor">
                  <i class="fa fa-angle-down" aria-hidden="true"></i>   
                </span> 
              </div>
            
          </div>
          <div class="col btm_txt_all" style="padding-top: 4px;">
            00 Bookmarks
          </div>
          <div class="col btm_txt_all" style="padding-top: 4px;">
            Main Menu
          </div>
          <div class="col padding_error btm_txt_all" align="right" style="padding-top: 4px;">
          
          </div>
          </div>

       
          </div>
      </div>
    </div>
  </div>

 
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url() ?>frontassets/bootstrap/js/jquery-3.5.1.slim.js"></script>
    <script src="<?php echo base_url() ?>frontassets/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url() ?>frontassets/bootstrap/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>frontassets/js/hideshow.js"></script>
	  
  <script src="<?php echo base_url() ?>frontassets/fonts/js/all.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  

  <script >
    $(document).ready(function() {
      
        $('#button_img').on('click', function() {
                $('.facebook_c, .facebook_r_c').toggle(3000)
        });
    });
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

<script>
  AOS.init();
</script>
	  
  </body>
</html>