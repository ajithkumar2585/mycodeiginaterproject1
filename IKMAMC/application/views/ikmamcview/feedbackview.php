
<html>

<head>FeedBack_List</head>

<Div style="background-color:rgb(255, 191, 0)">

<table style="width:50%">
    <thead>
        <tr>
            <th>SL No</th>
            <th>Name</th>
             <th>MailID</th>
             <th>Mobile</th>
				 <th>Is The Site Visited</th>
				 <th>Is it Useful</th>
				 <th>Needful</th>
				 <th>Infromation</th>
				 <th>Message</th>
		</tr>
    </thead>

    <tbody>
<?php 
$loop=0;
foreach($feed_data->result() as $v )

{ 
	// if(empty($v->marital_status)) {$g=0;}
	// else {$g=$v->marital_status;} 
	// if(empty($v->gender)) {$f=0;}
	// else {$f=$v->gender;}
	    $loop = $loop+1;
?>
        <tr>
            <td><?php echo $loop;?></td>
            <td><?php echo $v->feedname; ?></td>
            <td><?php echo $v->feedemail; ?></td>
            <td><?php echo $v->feedmobile_no; ?></td>
				<td><?php echo $v->visit_status; ?></td>
				<td><?php echo $v->fedneed; ?></td>
				<td><?php echo $v->fq; ?></td>
				<td><?php echo $v->remarks; ?></td>
				<td><?php echo $v->remarks1; ?></td>
				<td><button onclick="showform('<?php echo $v->id; ?>')">Edit</button></td>

        </tr>
<?php
}
?>

    </tbody>
</table>
</html>
    
</Div>
<form action="<?php echo base_url();?>index.php/ikmamccntrl/feedback" method="POST" >
<input type="hidden" value='0' name="id" id="id">

<input hidden type="submit" value="Submit" id='eee'>
</form>

<script>
function showform(id){
     //alert(id);
    $('#id').val(id);
	$('#eee').click();
}
</script>
     
    