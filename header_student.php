
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-inner">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="ncelms" class="navbar-brand" href="http://localhost/nce/dashboard_student.php">National College of Engineering :Learning Management System</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <?php $query= mysql_query("select * from student where id = '$session_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);?>
      					<li>
      						<img id="avatar" class="img-polaroid" src="admin/<?php echo $row['image'];  ?> " width= "50px" 
  								height="50px" >
    						  </li>

      
							
        <li class="dropdown">
								<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['fname']." ".$row['lname'];  ?> <i class="caret"></i></a>
									<ul class="dropdown-menu">
										<li><a tabindex="-1" href="change_pass_std.php"><i class="icon-circle"></i> Change Password</a></li>
										<li><a tabindex="-1" href="#myModal_student" data-toggle="modal"><i class="icon-picture"></i> Change Avatar</a></li>
										<li class="divider"></li>
										<li>
											<a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
										</li>
									</ul>
							</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>
<?php include('avatar_modal_student.php'); ?>