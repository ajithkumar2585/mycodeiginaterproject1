<title>FeedBack</title>
  <body>
	    <div class="form-control">
			<form class="form-control" action="<?php echo base_url();?>index.php/ikmamccntrl/feedform" method="POST" >
			  <h1 style="background-color:powderblue;">Website Feedback Form</h1>
				<p style="background-color:powderblue;">Personal-Information</p>
				<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
        <div class="item">
          <label style="color:red;" for="name">Name<span>*</span></label>
          <input id="feedname" type="text" name="feedname" value="<?php echo $feedname; ?>">
        </div>
        <div class="item">
          <label style="color:red;" for="email">Email Address<span>*</span></label>
          <input id="feedemail" type="email" name="feedemail" value="<?php echo $feedemail; ?>">
        </div>
				<div class="item">
          <label style="color:red;" for="phone">Phone<span>*</span></label>
          <input id="feedmobile_no" type="number" name="feedmobile_no" value="<?php echo $feedmobile_no; ?>" >
        </div>
        <p style="background-color:tomato;" class="form-control">Is this the first time you have visited the website?</p>
        <div class="form-control">
          <label style="color:blue;"><input  <?php if($visit_status==1){ echo 'checked';} ?>  type="radio" value="1" name="visit_status" id="radio1"> yes</label>
          <label style="color:blue;"><input <?php if($visit_status==2){ echo 'checked';} ?> type="radio" value="2" name="visit_status" id="radio2"> no</label>
        </div>
        <p style="background-color:tomato;" class="form-control">Did you find what you needed?</p>
        <div class="form-control">
          <label style="color:blue;"><input <?php if($fedneed==1){ echo 'checked';} ?> type="radio" value="1" name="fedneed" id="radio3" /> Yes, all of it</label>
          <label style="color:blue;"><input <?php if($fedneed==2){ echo 'checked';} ?> type="radio" value="2" name="fedneed" id="radio4" /> Yes, some of it</label>
          <label style="color:blue;"><input <?php if($fedneed==3){ echo 'checked';} ?> type="radio" value="3" name="fedneed" id="radio5" /> No, none of it</label>
        </div>
        <p style="background-color:tomato;" class="form-control">Please tell us how easy it is to find information on the site.</p>
        <div class="form-control" >
          <p style="background-color:tomato;">Information</p>
          <select name="fq" class="form-control" id="fq">
            <optgroup label="Select-Model">
            <option <?php if($fq==0){ echo 'selected';} ?>  value="....">selected</option>
            <option <?php if($fq==1){ echo 'selected';} ?> value="1">AMC</option>
            <option <?php if($fq==2){ echo 'selected';} ?> value="2">Resume</option>
            <option <?php if($fq==3){ echo 'selected';} ?> value="3">Contact</option>
            <option <?php if($fq==4){ echo 'selected';} ?> value="4">Feedback</option>
		        </optgroup>
          </select>
        </div>
        <p style="background-color:tomato;" class="form-control">What is your overall impression of the site?</p>
				<div class="col-md-20">
							<label style="color:red;" for="input__text">Valuable FeedBack</label>
              <textarea class="textarea" placeholder="Feedback" type="type" name="remarks" ><?php echo $remarks ?></textarea>
        </div>
        <p style="background-color:tomato;" class="form-control">Please add any comments you have for improving the website.</p>
        <label style="color:red;" for="input__text">Any-Other Suggestions</label>
				<textarea class="textarea1" placeholder="Suggestion" type="type" name="remarks1" ><?php echo $remarks1 ?></textarea>
				<div class="btn-block">
          <button style="background-color:blue;" type="submit" href="/">SUBMIT</button>
        </div>
			  </form>
    </div>
		<div>
				<?php
		         	if(!empty($notice))
					     echo  '<span style="color:red;"> Warning     : ' .$notice.'</span>';
			   ?>
		</div>
    </body>
</html>
