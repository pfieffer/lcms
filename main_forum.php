<?php include('header_dashboard.php'); ?>	
<?php include('session.php'); ?>	

<?php

$query = "SELECT* FROM topics ORDER BY id DESC";

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
			<center><caption >FORUM</caption><center>
			<a href="create_topic.php"><button type="button" id="myButton"  class="btn btn-primary" >
  Create Topic
</button></div></a>
			<thead>
				<tr>
					<th>ID</th>
					<th>Topic</th>
					<th>Views</th>
					<th>Replies</th>
					<th>Date/Time</th>
				</tr>
			</thead>

		<tbody>
			<?php while($rows=mysql_fetch_array($result)){ ?>
			<tr>
				<td ><?php echo $rows['id']; ?></td>
				<td><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['question']; ?></a></td>
				<td><?php echo $rows['view']; ?></td>
				<td><?php echo $rows['reply']; ?></td>
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