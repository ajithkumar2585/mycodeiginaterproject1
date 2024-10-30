<html>

<head>Contact_List</head>

<Div style="background-color:rgb(235, 235, 13)">

<table style="width:50%">
    <thead>
        <tr>
            <th>SL No</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
			<th>Message</th>
		</tr>
    </thead>

    <tbody>
<?php 
$loop=0;
foreach($data->result() as $cm )
{ 
	// if(empty($cm->email)) {$z=0;}
	// else {$z=$cm->email;} 
	// if(empty($cm->mobile_no)) {$x=0;}
	// else {$x=$cm->mobile_no;}
    $loop = $loop+1;
?>
        <tr>
            <td><?php echo $loop;?></td>
            <td><?php echo $cm->customer_name; ?></td>
            <!-- <td><?php echo $mm[$z]; ?></td>
            <td><?php echo $gm[$x]; ?></td> -->
				<td><?php echo $cm->email; ?></td>
				<td><?php echo $cm->mobile_no; ?></td>
				<td><?php echo $cm->remarks; ?></td>

				<td><button onclick="showform('<?php echo $cm->id; ?>')">Edit</button></td>				

        </tr>
<?php
}
?>

    </tbody>
</table>
</html>
    
</Div>
<form action="<?php echo base_url();?>index.php/ikmamccntrl/contact" method="POST" >
<input type="hidden" value='0' name="id" id="id">

<input hidden type="submit" value="Submit" id='ddd'>
</form>

<script>
function showform(id){
     //alert(id);
    $('#id').val(id);
	$('#ddd').click();
}
</script>
