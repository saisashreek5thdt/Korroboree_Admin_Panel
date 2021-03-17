<!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-5">
			<img class="bg-img-cover bg-center" src="<?php echo base_url(); ?>adminassets/images/backgrounds/login_bg.png" alt="looginpage">
		</div>
        <div class="col-xl-7 p-0">
          <div class="login-card">
            <div>
              <!--<div>
				  <a class="logo" href="index.html">
					  <img class="img-fluid for-light" src="assets/images/logo/login.png" alt="looginpage">
					  <img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage">
				  </a>
			  </div>-->
              <div class="login-main"> 
                <form class="theme-form needs-validation" novalidate="" action="<?php echo base_url(); ?>admin/admindashboard/selection" enctype="multipart/form-data">
                  <h4>Sign in to account</h4>
                  <p>Enter your email &amp; password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" placeholder="Test@gmail.com">
                    <div class="invalid-tooltip">Please enter proper email.</div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
<<<<<<< HEAD
                    <input class="form-control" type="password" name="login[password]" placeholder="*********">
                    <div class="invalid-tooltip">Please enter password.</div>
=======
                    <input class="form-control" type="password" name="password" required placeholder="*********">
                    <div class="invalid-tooltip">Please enter password.
                    </div>
>>>>>>> 89849da0572386a707981162dd1ca3bbba6262e7
                    <div class="show-hide">
						           <span class="show"></span>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <!--<div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div>-->
                    <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                  </div>
                  <script>
                    (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                    }, false);
                    });
                    }, false);
                    })();
                    
                  </script>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>