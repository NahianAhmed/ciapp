
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
					
				</li>
</ul>


<div class="row-fluid sortable">


         <h4 style="color:green" > <?php
					   if($this->session->userdata('msg')){
						echo $this->session->userdata('msg');
						$this->session->unset_userdata('msg');
					}
					?>  
					</h4>
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="POST" action="<?php echo base_url()?>Save-Catagory">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Catagory Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name="catagory_name" >
								
							  </div>
							</div>
							

						         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Catagory Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="catagory_description" ></textarea>
							  </div>
							</div>
             
							



							<div class="control-group">
							  <label class="control-label" for="typeahead">Publication Status </label>
							  <div class="controls">
								<select name="publication_status">
								
								<option >Select Option</option>
								<option value="1">Published</option>
								<option value="0">Unpublished</option>
								
								</select>
								
							  </div>
							</div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
