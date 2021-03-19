<div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>Create New Episode</h3>
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
							  <li class="breadcrumb-item">Create New Episode</li> 
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
								  	<form class="theme-form needs-validation" method="post"  enctype="multipart/form-data" action="<?php echo base_url(); ?>journal_5th/episode/update/<?php echo $edit->id; ?>">
								<input type="hidden" value="<?php echo $edit->id ?>" >

									 <div class="card-header">
										<h5>Create Your Episodes Here</h5>
										<span>Using this form can create multiple episodes.</span>
									 </div>
									    <div class="card-body add-post">
										    <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="episode_title">Title 1</label>
											  <div class="col-sm-9">
												 <input class="form-control" id="episode_title" value="<?php echo $edit->title_1 ?>" name="text_1" type="text" placeholder="Episode Title" required>
											  </div>
										   </div>
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="episode_title">Title 2</label>
											  <div class="col-sm-9">
												 <input class="form-control" id="episode_title" value="<?php echo $edit->title_2 ?>"  name="text_2" type="text" placeholder="Episode Title" required>
											  </div>
										   </div>
										      <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="episode_title">Title 3</label>
											  <div class="col-sm-9">
												 <input class="form-control" id="episode_title" value="<?php echo $edit->title_3 ?>"  name="text_3" type="text" placeholder="Episode Title" required>
											  </div>
										   </div>
										      <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="episode_title">Title 4</label>
											  <div class="col-sm-9">
												 <input class="form-control"  id="episode_title" value="<?php echo $edit->title_4 ?>"  name="text_4" type="text" placeholder="Episode Title" required>
											  </div>
										   </div>
										  
										   <!-- <div class="form-group row">
											   <label class="col-sm-3 col-form-label" for="episode_story_board">Upload Episode Story Board</label>
											   <div class="col-sm-9">
												 <input class="form-control" name="video" id="episode_story_board" type="file" placeholder="Episode Story Board">
											   </div>
										   </div> -->
											<div class="form-group row"></div>
									    </div>
									 <div class="card-footer">
										<button class="btn btn-primary">Update</button>
									 </div>
									 </form>
								  </div>
                              </div>
						  </div>
					  </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>