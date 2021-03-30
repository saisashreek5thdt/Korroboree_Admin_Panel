<div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3></h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>home">
									  <i data-feather="home"></i>
								  </a>
							  </li>
							  <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>episode_list">Episodes</a>
							  </li>
							  <li class="breadcrumb-item">Edit Episode</li> 
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
					  <div class="col-sm-12 col-xl-12">
						  <div class="row">
							  <div class="col-sm-12">
								  <div class="card">
									 <div class="card-header">
										<h5>Edit Your Episodes Here</h5>
									 </div>
									 <div class="card-body add-post">
										<form class="theme-form needs-validation" novalidate="" enctype="multipart/form-data" action="<?php base_url(); ?>episode_list_v">
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="inputEmail3">Episode Number</label>
											  <div class="col-sm-9">
												 <h5>01</h5>
											  </div>
										   </div>
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="inputPassword3">Episode Title</label>
											  <div class="col-sm-3">
												  <h6>Title Name Here</h6>
											  </div> 
											  <div class="col-sm-6">
												 <input class="form-control" id="inputPassword3" type="text" placeholder="Episode Title">
											  </div>
										   </div>
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="inputPassword3">Episode Month</label>
											  <div class="col-sm-9">
												 <h5>Jan, 26</h5>
											  </div>
										   </div>
                                    	</form>
									 </div>
									 <div class="card-footer">
										<button class="btn btn-primary">Update Episode</button>
										<button class="btn btn-secondary">Cancel</button>
									 </div>
								  </div>
                              </div>
						  </div>
					  </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>