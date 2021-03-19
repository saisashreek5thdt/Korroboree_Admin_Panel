<div class="page-body">

               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>Episodes List</h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>dashboard">
									  <i data-feather="home"></i>
								  </a>
							  </li>
							  <li class="breadcrumb-item">Episodes</li> 
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
                <div class="">
                <?php 
   if($this->session->flashdata('true')){
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('true'); ?>
<?php    
} else if($this->session->flashdata('err')){
?>
 <div class = "alert alert-success">
   <?php echo $this->session->flashdata('err'); ?>
 </div>
 <?php } ?>
                </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
					  <div class="col-sm-12">
						<div class="card">
						  <div class="card-header">
							  <h5>List of Episodes Created by Korroboree Team</h5>
							  <div class="card-header-right">
								  <h6>
									  <a href="<?php  base_url();  ?>video_add">Create video</a>
								  </h6>
								  <h6>
									  <a href="#">Episode Tracker</a>
								  </h6>
							  </div> 
						  </div>
						  <div class="card-body">
							<div class="table-responsive">
							  <table class="display" id="basic-10">
								<thead>
								  <tr>
									<th>S.No</th>
									<th>Online video Link</th>
									<th> Video</th>
									
									<th>Actions</th>
								  </tr>
								</thead>
								<tbody>
								<?php if (!empty($video)) {
                                                $no = 1;
                                             foreach ($video as $row) { ?> 
								  <tr>
									<td><?php echo $row->id; ?></td>
									<td><?php echo $row->link; ?></td>
									<td><video width="100" height="100" controls>   
             <source src="<?php echo base_url('uploads/video/'.$row->video); ?>" type="video/mp4">
             <source src="<?php echo base_url('uploads/video/'.$row->video);   ?>" type="video/ogg">
									
									
									
									
									
									</td>
                                   
									
									
					
									<td>
										<ul class="list-unstyled card-option">
											<!-- <li style="float: left !important; padding: 0 10px !important;">
												<a href="#">
													<i data-feather="eye"></i>
												</a>
											</li> -->
											<li style="float: left !important; padding: 0 10px !important;">
												<a href="<?php echo base_url('journal_5th/episode/edit_video/'.$row->id) ?>">
													<i data-feather="edit"></i>
												</a>
											</li>
											<li style="float: left !important; padding: 0 10px !important;">
												<a href="<?php echo base_url('journal_5th/episode/video_delete/'.$row->id) ?>">
													<i data-feather="trash-2"></i>
												</a>
											</li>
										</ul>
									</td>
								  </tr>
								 
								</tbody>
								 <?php
                                        $no++;
                                       }
                                       } else { ?>
                                      <tr id="row">
                                         <td colspan="6" align="center">NO Records</td>

                                         <?php
                                          }  ?>
								
							  </table>
							</div>
						  </div>
						</div>
					  </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>