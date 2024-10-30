
<html>

<head>Resume_List</head>

<Div style="background-color:rgb(0, 255, 255)">

<table style="width:50%">
    <thead>
        <tr>
            <th>SL No</th>
            <th>Name</th>
             <th>MailID</th>
             <th>Address</th>
				 <th>City</th>
				 <th>Pincode</th>
				 <th>Mobile</th>
				 <th>DOB</th>
				 <th>Gender</th>
				 <th>MaritalStatus</th>
        </tr>
    </thead>

    <tbody>
<?php 
$loop=0;
foreach($res_data->result() as $v )

{ 
	if(empty($v->marital_status)) {$g=0;}
	else {$g=$v->marital_status;} 
	if(empty($v->gender)) {$f=0;}
	else {$f=$v->gender;}
	    $loop = $loop+1;
?>
        <tr>
            <td><?php echo $loop;?></td>
            <td><?php echo $v->pname; ?></td>
            <td><?php echo $v->pemail; ?></td>
            <td><?php echo $v->address1; ?></td>
				<td><?php echo $v->city_name; ?></td>
				<td><?php echo $v->pincode; ?></td>
				<td><?php echo $v->mobile_no; ?></td>
				<td><?php echo $v->dob; ?></td>
				<td><?php echo $gs[$f] ?></td>
				<td><?php echo $ms[$g]; ?></td>

				<td><button onclick="showform('<?php echo $v->id; ?>')">Edit</button></td>

        </tr>
<?php
}
?>

    </tbody>
</table>
</html>
    
</Div>
<form action="<?php echo base_url();?>index.php/ikmamccntrl/resume" method="POST" >
<input type="hidden" value='0' name="id" id="id">

<input hidden type="submit" value="Submit" id="ccc">
</form>

<script>
function showform(id){
     //alert(id);
    $('#id').val(id);
	$('#ccc').click();
}
</script>
     
    