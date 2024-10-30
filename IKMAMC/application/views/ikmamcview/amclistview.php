<html>

<head>AMC_List</head>

<Div style="background-color:Lightgreen">

<table style="width:50%">
    <thead>
        <tr>
            <th>SL No</th>
            <th>machine_name</th>
            <th>machinetype</th>
            <th>model</th>
			<th>warranty_date</th>
			<th>amc_date</th>
			<th>machine_slno</th>
			<th>officesection</th>
			<th>remarks</th>
		</tr>
    </thead>

    <tbody>
<?php 
$loop=0;
foreach($amc_data->result() as $m )
{ 
	if(empty($m->machinetype)) {$z=0;}
	else {$z=$m->machinetype;} 
	if(empty($m->model)) {$x=0;}
	else {$x=$m->model;}
    $loop = $loop+1;
?>
        <tr>
            <td><?php echo $loop;?></td>
            <td><?php echo $m->machine_name; ?></td>
            <td><?php echo $ms[$z]; ?></td>
            <td><?php echo $gs[$x]; ?></td>
				<td><?php echo $m->warranty_date; ?></td>
				<td><?php echo $m->amc_date; ?></td>
				<td><?php echo $m->machine_slno; ?></td>
				<td><?php echo $m->officesection; ?></td>
				<td><?php echo $m->remarks; ?></td>

				<td><button onclick="showform('<?php echo $m->id; ?>')">Edit</button></td>				

        </tr>
<?php
}
?>

    </tbody>
</table>
</html>
    
</Div>
<form action="<?php echo base_url();?>index.php/ikmamccntrl/amcdetails" method="POST" >
<input type="hidden" value='0' name="id" id="id">

<input hidden type="submit" value="Submit" id="bbb">
</form>

<script>
function showform(id){
     //alert(id);
    $('#id').val(id);
	$('#bbb').click();
}
</script>
