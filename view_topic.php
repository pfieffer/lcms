<?php include('header_dashboard.php'); ?>	
<?php include('session.php'); ?>	

<?php

$query = "SELECT* FROM topics ORDER BY id DESC";

$result = mysql_query($query);

$id = $_GET['id'];
$query ="SELECT* FROM topics where id = '$id'";
$result = mysql_query($query);
$rows=mysql_fetch_array($result);
?>

<body>
<?php include('header_student.php'); ?>
 <div class="container-fluid">
            <div class="row-fluid">
                <?php include('student_sidebar.php'); ?>

<div class="col-md-8">

	<div class="table-responsive">
		<div class="well"><table class="table table-hover">
		<thead>
			<tr><td><strong><?php echo $rows['question'];?></strong></td></tr>
			<tr><td><?php echo $rows['detail'];?></td></tr>
			<tr><td><?php echo $rows['username'];?></td></tr>
			<tr><td><?php echo $rows['datetime'];?></td></tr>
		</thead></div>

<?php
//answer forum
$query2 = "SELECT* FROM replies where question_id='$id'";
$result2 = mysql_query($query2);
while($rows = mysql_fetch_array($result2)){ ?>
	<tbody >
		<tr> <td><?php echo $rows['a_id'];?></td> </tr>
		<tr> <td><?php echo $rows['a_username'];?></td> </tr>
		<tr> <td><?php echo $rows['a_answer'];?></td> </tr>
		<tr> <td><?php echo $rows['a_datetime'];?></td> </tr>
	</tbody>
	
	<?php } ?>
	</table>
	</div>
<?php
$query3 = "SELECT* FROM topics where id = '$id'";
$result3 = mysql_query($query3);
$rows = mysql_fetch_array($result3);
$view = $rows['view'];

//change views value
if(empty($view)){
	$view = 1;	
}
else{
$view = $view+1;
}
$query5 = "UPDATE topics set view='$view' where id='$id'";
$result5 = mysql_query($query5);
mysql_close();
?>
	<div class="table-responsive">	
	<table class="table">
		<form name="reply_from" method="POST" action="add_answer.php">
		
		
		<tr>
		<td>Reply</td>
		<td>:</td>
		<td>
		<input name="a_answer" id="a_answer"  />
		</tr>

		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>
		<input type="submit" name="submit" value="Submit" />
		<input type="reset" name="reset" value="Reset" />
		</td>
		</tr>
			<input name="id" type="hidden" id="id" value="<?php echo $id; ?>"/>
			
		</tbody>
		
		</form>
	</table>
	</div>
	

	<?php include('footer.php');?>
</body>


