 <head>
        <title>NCE LMS</title>
    <meta name="description" content="Learning Management System">
    <meta name="keywords" content="CHMSC LMS,CHMSCLMS,CHMSC,LMS,CHMSCLMS.COMXA">
    <meta name="author" content="grouplms">
    <meta charset="UTF-8">
        <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fullcalendar.css" rel="stylesheet">
     <link href="css/jquery.jgrowl.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="css/mystyles.css">
        <link rel="stylesheet" type="text/css" href="css/forum.css">
    <!-- index css -->
        <!-- <link href="admin/bootstrap/css/index.css" rel="stylesheet" media="screen"> -->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <?php include ('script.php'); ?>    
    </head>
<?php include('connect.php'); ?>
<?php include('session.php'); ?>


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
      <a class="navbar-brand" href="http://localhost/nce/admin/">NCE LMS Admin Panel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <?php $query= mysql_query("select * from admin where user_id = '$session_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);?>
      					

      
							
        <li class="dropdown">
								<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $row['fname']." ".$row['lname'];  ?> </a>
									<ul class="dropdown-menu">
										<li><a  href="change_pass_ad.php"><i class="icon-circle"></i> Change Password</a></li>
										
										<li class="divider"></li>
										<li>
											<a  href="logout.php"></i>&nbsp;Logout</a>
										</li>
									</ul>
							</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>
