<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
      <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
      <meta name="author" content="pixelstrap">
      <link rel="icon" href="<?php echo base_url(); ?>adminassets/images/logo/5thdt_logo.jpeg" type="image/x-icon">
      <link rel="shortcut icon" href="<?php echo base_url(); ?>adminassets/images/logo/5thdt_logo.jpeg" type="image/x-icon">
      <title>Korroboree Admin Panel</title>
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
	  <!-- FontAwesome Icons--> 
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/all.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/fontawesome.css"> 
      <!-- ico-font-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/vendors/icofont.css">
      <!-- Themify icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/vendors/themify.css">
      <!-- Flag icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/vendors/flag-icon.css">
      <!-- Feather icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/vendors/feather-icon.css">
      <!-- Plugins css start-->
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/vendors/datatables.css"> 
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/vendors/animate.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/vendors/chartist.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/vendors/date-picker.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/vendors/jkanban.css"> 
      <!-- Plugins css Ends-->
      <!-- Bootstrap css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/vendors/bootstrap.css">
      <!-- App css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/style.css">
      <link id="color" rel="stylesheet" href="<?php echo base_url(); ?>adminassets/css/color-1.css" media="screen">
      <!-- Responsive css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/css/responsive.css">
   </head>
   <body>
      <!-- tap on top starts-->
      <div class="tap-top"><i data-feather="chevrons-up"></i></div>
      <!-- tap on tap ends-->
      <!-- page-wrapper Start-->
      <div class="page-wrapper compact-wrapper" id="pageWrapper">
         <!-- Page Header Start-->
         <div class="page-header">
            <div class="header-wrapper row m-0">
               <div class="header-logo-wrapper">
                  <div class="logo-wrapper">
					  <a href="dashboard.html">
						  <img class="img-fluid" src="<?php echo base_url(); ?>adminassets/images/logo/5thdt_logo.jpeg" alt="">
					  </a>
				  </div>
                  <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="sliders"></i></div>
               </div>
               <div class="left-header col horizontal-wrapper pl-0"></div>
               <div class="nav-right col-8 pull-right right-header p-0">
                  <ul class="nav-menus">
                     <li class="onhover-dropdown">
                        <div class="notification-box">
							<i data-feather="bell"></i>
							<span class="badge badge-pill badge-secondary">4</span>
						</div>
                        <ul class="notification-dropdown onhover-show-div">
                           <li>
                              <i data-feather="bell"></i>
                              <h6 class="f-18 mb-0">Notitications</h6>
                           </li>
                           <li>
                              <p><i class="fa fa-circle-o mr-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                           </li>
                           <li>
                              <p><i class="fa fa-circle-o mr-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                           </li>
                           <li>
                              <p><i class="fa fa-circle-o mr-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                           </li>
                           <li>
                              <p><i class="fa fa-circle-o mr-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                           </li>
                           <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                        </ul>
                     </li>
                     <li class="onhover-dropdown">
                        <i data-feather="message-square"></i>
                        <ul class="chat-dropdown onhover-show-div">
                           <li>
                              <i data-feather="message-square"></i>
                              <h6 class="f-18 mb-0">Message Box</h6>
                           </li>
                           <li>
                              <div class="media">
                                 <img class="img-fluid rounded-circle mr-3" src="<?php echo base_url(); ?>adminassets/images/user/1.jpg" alt="">
                                 <div class="status-circle online"></div>
                                 <div class="media-body">
                                    <span>Erica Hughes</span>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                 </div>
                                 <p class="f-12 font-success">58 mins ago</p>
                              </div>
                           </li>
                           <li>
                              <div class="media">
                                 <img class="img-fluid rounded-circle mr-3" src="<?php echo base_url(); ?>adminassets/images/user/2.jpg" alt="">
                                 <div class="status-circle online"></div>
                                 <div class="media-body">
                                    <span>Kori Thomas</span>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                 </div>
                                 <p class="f-12 font-success">1 hr ago</p>
                              </div>
                           </li>
                           <li>
                              <div class="media">
                                 <img class="img-fluid rounded-circle mr-3" src="<?php echo base_url(); ?>adminassets/images/user/4.jpg" alt="">
                                 <div class="status-circle offline"></div>
                                 <div class="media-body">
                                    <span>Ain Chavez</span>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                 </div>
                                 <p class="f-12 font-danger">32 mins ago</p>
                              </div>
                           </li>
                           <li class="text-center"> <a class="btn btn-primary" href="#">View All     </a></li>
                        </ul>
                     </li>
                     <li class="profile-nav onhover-dropdown p-0 mr-0">
                        <div class="media profile-media">
                           <img class="b-r-10" src="<?php echo base_url(); ?>adminassets/images/dashboard/profile.jpg" alt="">
                           <div class="media-body">
                              <span>5THDT Admin</span>
                              <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                           </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                           <li>
							   <a href="<?php echo base_url(); ?>account_five">
								   <i data-feather="user"></i>
								   <span>Account </span>
							   </a>
						   </li>
                           <li>
							   <a href="<?php echo base_url(); ?>settings_five">
								   <i data-feather="settings"></i>
								   <span>Settings</span>
							   </a>
						   </li>
                           <li>
							   <a href="<?php echo base_url(); ?>selection">
								   <i data-feather="log-out"></i>
								   <span>Exit</span>
							   </a>
						   </li>
						   <li>
							   <a href="<?php echo base_url(); ?>admin/Admindashboard/logout">
								   <i data-feather="log-out"></i>
								   <span>Log Out</span>
							   </a>
						   </li>	
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- Page Header Ends -->
         <!-- Page Body Start-->
         <div class="page-body-wrapper sidebar-icon">
            <?php
			 	include ("nav_view.php");
			 ?>