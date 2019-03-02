<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Manage Catagory</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><span class="break"></span>All Catagories</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Catagory ID</th>
								  <th>Catagory Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                              <?php 
                              foreach ($allcatagory as $vcatagory) {
                                  
                              
                              ?>
							<tr>
								<td><?php echo $vcatagory->id ?></td>
								<td class="center"><?php echo $vcatagory->name ?></td>
								<td class="center">
									<span class="label label-success">
                                        <?php if($vcatagory->publish){ echo "Active"; } 
                                        
                                              else { echo "Inactive" ;}
                                        
                                        
                                        ?>
                                
                                </span>
								</td>
								<td class="center">
									
                                        <?php
                                        if($vcatagory->publish){  
                                            ?>
                                         <a class="btn btn-danger" href="<?php echo base_url()?>/Unpublish-Catagory/<?php echo  $vcatagory->id ?>">
                                        <i class="halflings-icon white thumbs-down"></i>  </a>
                                        <?php   } else { ?>
                                            <a class="btn btn-success" href="<?php echo base_url()?>/Publish-Catagory/<?php echo  $vcatagory->id ?>">
                                            <i class="halflings-icon white thumbs-up"></i>  </a> 
                                <?php     }  ?>
									
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="<?php echo base_url()?>/Delete-Catagory/<?php echo  $vcatagory->id ?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
                            </tr>
                            
                            <?php 
                              }
                            ?>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
