      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
					<!-- <form id="request" class="main_form"> -->
					<form class="main_form" action="<?php echo base_url();?>index.php/ikmamccntrl/saveform" method="POST" >
                        <!-- div class="row" -->
								<div class="col-md-12 ">
								   <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
								</div>
                        <div class="col-md-12 ">
									<input class="contactus" placeholder="Name" type="type" name="Name" value="<?php echo $customer_name; ?>"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email" value="<?php echo $email; ?>"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="PhoneNumber" value="<?php echo $mobile_no; ?>">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" name="remarks"><?php echo $remarks ?></textarea>
                        </div>
                        <div class="col-md-12">
								<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
	
	                     <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                           <!-- <button class="send_btn">Send</button> -->
                        </div>
                     </div>
                  </form>
						<!-- <?php
              //  if(!empty($name1))
              //   { echo 'Name  :'.$name1;}

                echo 'Name  : ' .$customer_name;
                echo"<br>";
                echo 'Email  : ' .$email;
                echo"<br>";
                echo 'Phone Number  : ' .$mobile_no;
                echo"<br>";
                echo 'Message  : ' .$message;
                echo"<br>";
                ?> -->
               </div>
               <!-- <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="345" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
      <!-- end contact -->
     