
<?php include('header_dashboard.php'); ?>	
<?php include('session.php'); ?>	



<body>
		<?php include('header_student.php'); ?>
 <div class="container-fluid">
            <div class="row-fluid">
                <?php include('student_sidebar.php'); ?>

<div class="col-md-8">
	<div class="table-responsive" >
	<table class = "table table-hover" >
	<caption >Create new topic</caption>
	<tbody>
	<form id="form1" name="form1" method="POST" action="add_topic.php">
		
		<tr>
		<td>Topic</td>
		<td>:</td>
		<td>
		<input name="topic" type="text" id="topic" size="50" />
		</tr>
		
		<tr>
		<td>Detail</td>
		<td>:</td>
		<td>
		<textarea name="detail" id="detail" cols="48" rows="3" ></textarea>
		</tr>

		
		
		
		
		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>


		<input type="submit" name="submit" value="Submit" />
		<input type="reset" name="reset" value="Reset" />
		</td>
		</tr>
		
	</form>
	</tbody>
</table>
</div>


<?php include('footer.php'); ?>	





