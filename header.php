<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>NCE LMS</title>
		<meta name="description" content="Learning Management System">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Torilaure">
		<meta charset="UTF-8">
        <!-- Bootstrap -->
			 <link href="css/bootstrap.css" rel="stylesheet">
	   <link href="css/jquery.jgrowl.css" rel="stylesheet" media="screen">
	      <link rel="stylesheet" type="text/css" href="css/mystyles.css">
        <?php include('script.php'); ?>
        <?php include('connect.php'); ?>
    </head>
<body id="login">
<nav class="navbar navbar-default navbar-fixed-top " role='navigation'>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand page-scroll" href="index.php"><img src="images/logo.png" id="logo" class="responsive-image"></a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
      	
        <li id="heder"> <a  role="presentation" href="index.php">HOME <span class="sr-only"></span></a></li>
        <li id="heder"><a href="research.php" role="presentation">RESEARCH</a></li>
        <li id="heder"> <a href="notice.php" role="presentation">NOTICE</a></li>
        <li id="heder"><a href="academics.php" role="presentation">ACADEMICS</a></li>
        <li id="heder"><a href="about.php" role="presentation">ABOUT</a></li>
        <li id="heder"><a href="contact.php" role="presentation">CONTACT</a></li>

     
      </ul>
      
    
      <ul class="nav navbar-nav navbar-right">

      	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">         
                 <form class="form" role="form" method="post"   id="login_form1">
                    <div class="form-group">
                       <label class="sr-only" for="username">Username</label>
                       <input type="text" id="username" name="username" class="form-control input-sm chat-input" placeholder="username" required/>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="password">Password</label>
                       <input type="password" id="password" name="password" class="form-control input-sm chat-input" placeholder="password" required/>
                        <div class="help-block text-right"><a href="#">Forget the password ?</a></div>
                    </div>
                    <div class="form-group">
                       <button data-placement="right" title="Click Here to Sign In" type="submit" class="btn btn-primary btn-block" id ="signin" >Sign in</button>
                    </div>
                    <div class="checkbox">
                       <label>
                       <input type="checkbox"> keep me logged-in
                       </label>
                    </div>
                 </form>
                 

              
           </div>
           </div>

        </li>
     
        </ul>

        <li>
        <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <form method="POST"  class="navbar-search">
          <input type="text" class="form-control" placeholder="Search">
          </form>
          </div>
          </li>
            <li>
                <div class="voffset10">
                  <button type="submit"  class="btn btn-success">Submit</button>
                  </div>
           </li>
          
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<script>
            jQuery(document).ready(function(){
            jQuery("#login_form1").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "login.php",
                  data: formData,
                  success: function(html){
                  if(html=='true')
                  {
                  $.jGrowl("Loading File Please Wait......", { sticky: true });
                  $.jGrowl("Welcome to NCE Learning Management System", { header: 'Access Granted' });
                  var delay = 1000;
                    setTimeout(function(){ window.location = 'dashboard_teacher.php'  }, delay);  
                  }else if (html == 'true_student'){
                    $.jGrowl("Welcome to NCE Learning Management System", { header: 'Access Granted' });
                  var delay = 1000;
                    setTimeout(function(){ window.location = 'dashboard_student.php'  }, delay);  
                  }else
                  {
                  $.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
                  }
                  }
                });
                return false;
              });
            });
            </script>
