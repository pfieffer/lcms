<?php include('header_dashboard.php'); ?>	
<?php include('session.php'); ?>	

<?php

$query = "SELECT* FROM notice ORDER BY id DESC";

$result = mysql_query($query);
?>
<body>
		<?php include('header_student.php'); ?>
 <div class="container-fluid">
            <div class="row-fluid">
                <?php include('student_sidebar.php'); ?>

<div class="col-md-8">



	<div class="table-responsive" >
		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>ID</th>
					<th>Subject</th>
					<th>Detail</th>
					<th>Date/Time</th>
				</tr>
			</thead>

		<tbody>
			<?php while($rows=mysql_fetch_array($result)){ ?>
			<tr>
				<td ><?php echo $rows['id']; ?></td>
				<td><?php echo $rows['subject']; ?></td>
				<td><?php echo $rows['detail']; ?></td>
				<td><?php echo $rows['datetime']; ?></td>

			</tr>
			<?php 
			}
			mysql_close(); ?>
		</tbody>
	</table>
	</div>


	</div>
</div>
</div>

<?php include('footer.php'); ?>	

</body>