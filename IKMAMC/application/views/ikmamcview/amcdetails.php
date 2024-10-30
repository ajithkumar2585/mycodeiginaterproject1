      <!-- AMC-Details -->
			<div class="contact">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="titlepage">
						<h2>AMC-DETAILS</h2>
				</div>
			</div>
		      <div class="row">
               <div class="col-md-6">
					
					<form class="main_form" action="<?php echo base_url();?>index.php/ikmamccntrl/amcform" method="POST" >
                       

                        <div class="col-md-12">
						<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
								<label for="input__text">Machine-Name</label>
                        <input  class="form-control" placeholder="IKM/<Type>/<no>" type="type" name="name" value="<?php echo $machine_name; ?>"> 
                        </div>
								<div class="col-md-12">
								<label for="select">Machine-Type</label>
                			<!-- <select name="mtype" class="form-control" id="mtype">
                 				    <optgroup label="Select-Type">
                   				     <option  <?php if($machinetype==0){ echo 'selected';} ?> value="0">...........</option>
									 <option  <?php if($machinetype==1){ echo 'selected';} ?> value="1">Desktop</option>
                    				 <option  <?php if($machinetype==2){ echo 'selected';} ?> value="2">Laptops</option>
                    				 <option  <?php if($machinetype==3){ echo 'selected';} ?> value="3">Prinetrs</option>
									 <option  <?php if($machinetype==4){ echo 'selected';} ?> value="4">Others</option>
                 					</optgroup>

                         	</select> -->
							 <?php
									$js ='id="mtype" class="form-control"';
									echo   form_dropdown('mtype', $cmpoMtype,$machinetype,$js);
								?> 
								<div class="col-md-20">
								<label for="select">Machine-Model</label>
                			<!-- <select name="model" class="form-control" id="model">
                 				  <optgroup label="Select-Model">
										<option <?php if($model==0){ echo 'selected';} ?> value="0">...........</option>
                   				        <option <?php if($model==1){ echo 'selected';} ?> value="1">DELL</option>
                    				    <option <?php if($model==2){ echo 'selected';} ?> value="2">HP</option>
                    				    <option <?php if($model==3){ echo 'selected';} ?> value="3">ACER</option>
										<option <?php if($model==4){ echo 'selected';} ?> value="4">Lenovo</option>
               				 </optgroup>
	                			</select> -->
								<?php
									$js ='id="model" class="form-control"';
									echo   form_dropdown('model', $cmpoModel,$machinetype,$js);
								?> 
									 <div class="col-md-20">
									 <label for="idd">Warranty-End-Date</label>
                            <input type="date" class="form-control" name="date1" id="idd" value="<?php echo $warranty_date; ?>">
	                         </div>
									 <div class="col-md-20">
									 <label for="idd">AMC-Start-Date</label>
                            <input type="date"  class="form-control" name="date2" id="idd" value="<?php echo $amc_date; ?>">
	                         </div>
								<div class="col-md-20">
								<label for="input__text">Machine-Serial-Number</label>
								   <input class="contactus" placeholder="Machine-Serial-Number" type="type" name="serialnumber" value="<?php echo $machine_slno?>"> 
                        </div>
                        <div class="col-md-20">
								<label for="input__text">Section-Name</label>
                           <input class="contactus" placeholder="Section-Name" type="type" name="officesection" value="<?php echo $officesection ?>">                          
                        </div>
                        <div class="col-md-20">
								<label for="input__text">Accessories & Other-Details</label>
                           <textarea class="textarea" placeholder="Details" type="type" name="remarks" ><?php echo $remarks ?></textarea>
                        </div>
                        <div class="col-md-20">
								<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
	                     <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                           
                        </div>
                     </div>
					 <div> 
						<?php
						if(!empty($message))
							 echo  '<span style="color:red;"> Warning     : ' .$message;
						?>
					 </div>
                  </form>
						          
            </div>
         </div>
      <!-- end design -->
     