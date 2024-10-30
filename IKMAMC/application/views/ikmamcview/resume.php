      <!-- Resume -->
      <!DOCTYPE html>
<html>
  <head>
    <!-- <title>5K & 10K Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: Lightred;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: Lightgreen;
      z-index: 2;
      line-height: 33px;
      }
      .testbox {
      
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: Lightred;
      box-shadow: 0 0 8px  #cc7a00; 
      }
      .banner {
      position: relative;
      height: 10px;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: Lightred; 
      position: absolute;
      width: 50%;
      height: 50%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: Lightred;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #cc7a00;
      color: Lightred;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: Lightgreen;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: Lightred;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #cc7a00;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #cc7a00;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: Lightred;
      font-size: 16px;
      color: red;
      cursor: pointer;
      }
      button:hover {
      background: Lightyellow;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
		<form class="main_form" action="<?php echo base_url();?>index.php/ikmamccntrl/personalform" method="POST" >
        <!-- <div class="banner">
          <h1>Personal-Information</h1>
        </div> -->
        <p>Personal-Information</p>
				<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
        <div class="item">
          <label for="name">Name<span>*</span></label>
          <input id="name" type="text" name="name" value="<?php echo $pname; ?>" >
        </div>
        <div class="item">
          <label for="email">Email Address<span>*</span></label>
          <input id="email" type="email" name="email" value="<?php echo $pemail; ?>">
        </div>
        <div class="item">
          <label for="address">Address<span>*</span></label>
          <input id="address" type="address" name="address" value="<?php echo $address1; ?>">
        </div>
        <div class="item">
          <label for="city">City<span>*</span></label>
          <input id="city" type="text" name="city" value="<?php echo $city_name; ?>">
        </div>
        <div class="item">
          <label for="state">State<span>*</span></label>
          <input id="state" type="text" name="state" value="<?php echo $state; ?>" >
        </div>
        <div class="item">
          <label for="zip">Zip<span>*</span></label>
          <input id="zip" type="text" name="pin" value="<?php echo $pincode; ?>" >
        </div>
        <div class="item">
          <label for="phone">Phone<span>*</span></label>
          <input id="phone" type="number" name="mobile" value="<?php echo $mobile_no; ?>" >
        </div>
				<div class="item">
          <label for="bdate">Date of Birth<span>*</span></label>
          <input id="bdate" type="date" name="bdate" value="<?php echo $dob; ?>">
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="question">
          <label>Gender</label>
          <div class="question-answer">
            <div>
              <input  <?php if($gender==1){ echo 'checked';} ?> type="radio" value="1" id="radio_1" name="gender"/>
              <label for="radio_1" class="radio"><span>Male</span></label>
            </div>
            <div>
              <input <?php if($gender==2){ echo 'checked';} ?> type="radio" value="2" id="radio_2" name="gender"/>
              <label for="radio_2" class="radio"><span>Female</span></label>
            </div>
          </div>
        </div>
        <div class="form-control" >
          <p>Education-Qualification</p>
          <select name="eq" class="form-control" id="eq">
            <optgroup label="Select-Model">
            <option <?php if($eq==0){ echo 'selected';} ?>  value="....">selected</option>
            <option <?php if($eq==1){ echo 'selected';} ?> value="1">SSLC</option>
            <option <?php if($eq==2){ echo 'selected';} ?> value="2">Plus-TWO</option>
            <option <?php if($eq==3){ echo 'selected';} ?> value="3">Degree</option>
            <option <?php if($eq==4){ echo 'selected';} ?> value="4">Master-Degree</option>
		        </optgroup>
          </select>
        </div>
        <div class="question">
          <label>Marital-Status</label>
          <div class="question-answer">
            <div>
              <input <?php if($marital_status==1){ echo 'checked';} ?> type="radio" value="1" id="radio_3" name="status"/>
              <label for="radio_3" class="radio"><span>Single</span></label>
            </div>
            <div>
              <input <?php if($marital_status==2){ echo 'checked';} ?> type="radio" value="2" id="radio_4" name="status"/>
              <label for="radio_4" class="radio"><span>Married</span></label>
            </div>
          </div>
        </div>
				<div class="btn-block">
          <button type="submit" href="/">SUBMIT</button>
        </div>
      </form>
			<div> 
			<?php
			if(!empty($message))
					echo  '<span style="color:red;"> Warning     : ' .$message;
			?>
			</div>
    </div>
  </body>
</html>
      <!-- end Resume -->
     