<div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>Create New Topic</h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>home">
									  <i data-feather="home"></i>
								  </a>
							  </li>
							  <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>topic_list">Topics</a>
							  </li>
							  <li class="breadcrumb-item">Create New Topic</li> 
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
										<h5>Create Your Topics Here</h5>
										<span>Using this form can create multiple topics.</span>
									 </div>
									 <div class="card-body add-post">
										<form class="theme-form needs-validation" novalidate="" enctype="multipart/form-data" action="<?php base_url(); ?>topic_list">
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="episode_title">Select Your Episode</label>
											  <div class="col-sm-9">
												 <select class="form-control" id="exampleFormControlSelect9">
													 <option>Please Choose Your Episode Number</option>
													 <option>Episode 1</option>
													 <option>Episode 1</option>
													 <option>Episode 1</option>
													 <option>Episode 1</option>
													 <option>Episode 1</option>
													 <option>Episode 1</option>
												 </select>
											  </div>
										   </div>
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="episode_title">Topic Title</label>
											  <div class="col-sm-9">
												 <input class="form-control" id="topic_title" type="text" placeholder="Topic Title">
											  </div>
										   </div>	
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="inputEmail3">Topic Number</label>
											  <div class="col-sm-9">
												 <h5>01</h5>
											  </div>
										   </div>
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="">Topic Month</label>
											  <div class="col-sm-9">
												 <h5>Jan, 26</h5>
											  </div>
										   </div>	
                                    	</form>
									 </div>
									 <div class="card-footer">
										<button class="btn btn-primary">Create New Topic</button>
										<button class="btn btn-secondary">Create &amp; Save New Topic</button> 
										<button class="btn btn-danger">Cancel</button>
									 </div>
								  </div>
                              </div>
						  </div>
					  </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>