
<?php include('header_admin.php'); ?>


<body bgcolor="#3399cc">
<center><h1>Notice</h1></center>
<?php

$query = "SELECT* FROM notice ORDER BY id DESC";

$result = mysql_query($query);
?>
<div class="container">
<div class="row-fluid"> 

<div class="col-md-2"></div>
<div class="col-md-8">
<div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Notice</div>
                            </div>
                            <div class="block-content collapse in">
                            	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">


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
	</div></div>
	


<div class="col-md-2"></div>



<script>$(document).ready( function() {
    $('#example').dataTable( {
        "iDisplayLength": 1
    } );
} )</script>
</body>