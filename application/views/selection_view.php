<!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6">
			<img class="bg-img-cover bg-center" src="<?php base_url(); ?>assets/images/backgrounds/bg_2.png" alt="looginpage">
		</div>
        <div class="col-xl-6 p-0">
          <div class="login-card">
            <div>
              <!--<div>
				  <a class="logo" href="index.html">
					  <img class="img-fluid for-light" src="assets/images/logo/login.png" alt="looginpage">
					  <img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage">
				  </a>
			  </div>-->
              <div class="login-main">
				<div class="form-group">
					<h4>Hello Admin</h4>
                  	<p>Please Select Your Journal Type</p>
			    </div>  
<<<<<<< HEAD
				<!--<div class="form-group mb-1 mr-0">
=======

				<?php if($this->session->userdata('admintype')=='5d'){  ?>

				<div class="form-group mb-1 mr-0">
>>>>>>> origin/main
					<a href="<?php base_url(); ?>dashboard_five" class="m-t-15">
						<button class="btn btn-primary btn-block m-r-10" type="button">
							<i class="mr-1" data-feather="layers"></i>&nbsp;&nbsp;&nbsp; Journal
						</button>
					</a>
				</div>  
				<div class="form-group mb-1 mr-0">
					<a href="#" class="m-t-15">
						<button class="btn btn-primary btn-block m-r-10" type="button">
							<i class="mr-1" data-feather="film"></i>&nbsp;&nbsp;&nbsp; Video Journal
						</button>
					</a>
<<<<<<< HEAD
				</div>-->
=======
				</div>

				<?php }  else{   ?>
>>>>>>> origin/main
				<div class="form-group mb-1 mr-0">
					<a href="<?php base_url(); ?>dashboard" class="m-t-15">
						<button class="btn btn-primary btn-block m-r-10" type="button">
							<i class="mr-1" data-feather="layers"></i>&nbsp;&nbsp;&nbsp; Journal
						</button>
					</a>
				</div>
				<div class="form-group mb-1 mr-0">
					<a href="#" class="m-t-15">
						<button class="btn btn-primary btn-block m-r-10" type="button">
							<i class="mr-1" data-feather="film"></i>&nbsp;&nbsp;&nbsp; Video Journal
						</button>
					</a>
				</div>  

				<?php } ?>
				<div class="form-group mb-1 mr-0">
					<a href="<?php base_url(); ?>logout" class="m-t-15">
						<button class="btn btn-primary btn-block m-r-10" type="button">
							<i class="mr-1" data-feather="log-out"></i>&nbsp;&nbsp;&nbsp; Logout
						</button>
					</a>
				</div>  
              </div>
            </div>
          </div>
        </div>
      </div>