<!doctype html>
<html lang="en">
<head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
	
	<!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/responsive.css">
	
	<!-- FontAwesome CSS -->
  <link href="assets/fonts/css/all.css" rel="stylesheet" type="text/css">

 
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<title>khorroborre</title>
  </head>
  <body>
    <div class="game">

      <!-- popup -->
      <div class="popUpMain" style="display: none;">
        <div id="">
            <img src="assets/images/background/exit_bg.png" class="pop_img_s" />
            <div>
              <div class="row exit_txt">
                <div class="col">
                 <img src="assets/images/background/koro_logo.png" alt="">
                </div>
              </div>
              <div class="row exit_txt2">
                <div class="col-lg-4 col-md-4">
                  <img src="assets/images/background/end_4.png" alt="" width="80%">
                </div>
                <div class="col-lg-8 col-md-8">
                  <div class="row">
                    <div class="col font_all liking" >
                      Liking it? Want to read more?
                    </div>
                  </div>
                  <div class="row" style="margin-top: 20px;">
                     <img src="assets/images/background/next_btn.png" alt="" class="img_next" width="20%">
                    <img src="assets/images/background/index.png" alt="" class="index_img" width="20%">
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- popup end -->
   
      <div class="row">
        <div class="col-lg-10 col-md-10 moon family_top_text why_top" >
          What is ‘My’ powerful why of attending this Moonshot conversation ?
        </div>
        <div class="col-lg-2 col-md-2" align="right">
          <img src="assets/images/icons/right_side_icon.png" alt="" class="right_side_icon menu_icon">
        </div>
      </div>

      <div class="row">
        <div class="col padding_error" align="right">
          <div style="margin-right: 15px;">
            <img src="assets/images/icons/boy_g.png" data-toggle="tooltip" data-placement="bottom" title="Individual activity " alt=""  class="right_side_icon ">
          
          </div>
         
         
         </div>
       </div>
       <div class="row">
        <div class="col padding_error" align="right">
          <div style="margin-right: 15px;">
            <img src="assets/images/icons/book.png" alt="" data-toggle="tooltip" data-placement="bottom" title="Journal entry" class="right_side_icon ">
          </div>
          
        
        </div>
       
      </div>
     
      <div class="row ">
        <div class="col padding_error" align="center">
          <img src="assets/images/background/with_out_qustion.png" alt=""  class="game_bg">
          <div class="why_r_u thre_quitns thre_quitns_top" style="left:40%; font-size:14px;top:28%">
         <input type="radio" id="male" name="answer"  value="no" class="first_int">
              <label for="male " class="child "> To know more about my child
             
          </div>
          <div class="why_r_u thre_quitns thre_quitns_top2" style="left:40%; font-size:14px;top:38%">
           <input type="radio" id="male" name="answer"  value="no" class="first_int">
              <label for="male " class="child "> To learn about conscious parenting 
           
          </div>
          <div class="why_r_u thre_quitns thre_quitns_top3" style="left:40%; font-size:14px;top:48%">
           <input type="radio" id="male" name="answer" value="no" class="first_int">
              <label for="male " class="child "> To interact with other parents
              </label><br>
          
          </div>
          <div class="why_r_u thre_quitns thre_quitns_top4" style="left:40%; font-size:14px;top:58%">
           
              <input type="radio" id="male" name="answer" value="other" class="other_btn first_int">
              <label for="male " class="child "> Other </label><br>
            
          </div>
          <div class="why_r_u input_entry_thre" style="left:40%; font-size:14px;top:68%">
         
            <a href="#myModal" class="submit_input_3" data-toggle="modal"> <input style="display:none;" data-toggle="modal" data-target="#exampleModal4" type="text" placeholder="" class="input_game_ans" name="otherAnswer" id="otherAnswer"></a>
            
          </div>

           <!-- Modal HTML -->
    <div id="myModal" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="border-bottom: none;">
            <img src="assets/images/background/koro_logo.png" alt=""  width="30%" style="margin-left: 35%;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" align="center">
            <textarea name=""  id="other_info" cols="60" rows="5" ></textarea>
          </div>
          <div class="modal-footer" style="border-top: none;">
		  <center>
		  <font style="color:#000; font-size:13px;font-family:Segoe UI semibold">
		  
	<b>  NOTE : </b>Click on the same space to edit your answers.
		  </font>
		  </center>
            <button type="button" class="btn btn-primary close_dumy_box" data-dismiss="modal" onclick="save()">Save </button>
           

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>

       

    
          <div class="write" style="left: 46%;bottom: -40px;">
            <a href="<?php echo base_url() ?>topics/topic_3_4"> <img src="assets/images/background/submit.png" alt="" class="write_box submit_btn_all submit_sucess_btn add_submit_an"></a>
          </div>
        </div>
      

      </div>

    


      
    
   

    
    </div>

    <div class="row">
      <div class="col padding_error">
        <div class="hide_expand">
          <a href="#" onClick="hideShow()">
            <h5>Click to expand  </h5>
            
          </a>
        </div>
        <div class="box_bottom" id="hideShow" style="display: none;">
          <div class="row">
          
            <div class="col" >
              <div class="index_btn" >
                <a href="<?php echo base_url() ?>home/view">
                  <img src="assets/images/icons/new_index.png" class="img-fluid1 btm_logo" alt="khorroborre journal" id="button_img" />
                </a>
              </div>
            </div>
       
          </div>
          <div class="" align="center" >
            <div class="row" >
              <div class="col padding_error btm_txt_all" align="left" style="padding-top: 4px;"  >
               <span class="ls_tp"> Last Topic </span>
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
             <span class="nt_tp submit_btn_all"> Next Topic </span>
            </div>
            </div>
  
         
            </div>
        </div>
      </div>
    </div>
  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/bootstrap/js/jquery-3.5.1.slim.js"></script>
    <script src="assets/bootstrap/js/popper.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
	  
	<script src="assets/js/hideshow.js"></script>
	  
  <script src="assets/fonts/js/all.js"></script>
  <script>
    $(document).ready(function() {
        $("input[type='radio']").change(function() {
            if ($(this).val() == "other") {
                $("#otherAnswer").show();
            } else {
                $("#otherAnswer").hide();
            }
        });
    });
</script>


  <script>
    $(document).ready(function() {
       $('.img_next').click(function() {
           window.location.href = "<?php echo base_url() ?>topics/topic_4";
       });
   });
   $(document).ready(function() {
       $('.index_img').click(function() {
           window.location.href = "<?php echo base_url() ?>home/view";
       });
   });
</script>
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
  </script>


<script>
function save(){
var a=document.getElementById("other_info").value;
document.getElementById("otherAnswer").value=a;

}


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
  $(document).ready(function(){
    $('.submit_sucess_btn').click(function(){
      $('.click_submit').hide(); 
      $('.click_submit_sucess').show(); 
    });
});
</script>
<script>
  $(document).ready(function(){
    $('.first_int').click(function(){
      $('.add_submit_an').addClass("blob"); 
    });
  });
</script>

<!-- model box -->
<script>
  $(document).ready(function(){
      function alignModal(){
          var modalDialog = $(this).find(".modal-dialog");
          
          // Applying the top margin on modal to align it vertically center
          modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
      }
      // Align modal when it is displayed
      $(".modal").on("shown.bs.modal", alignModal);
      
      // Align modal when user resize the window
      $(window).on("resize", function(){
          $(".modal:visible").each(alignModal);
      });   
  });
  </script>
 
	  
  </body>
</html>





    