<!DOCTYPE html>

<?php
include ('header.php');
$con = mysql_connect("localhost","xeron","xeron","nce");
if (!$con) {
    die("Connection failed: " . mysql_error());

  
mysql_select_db ('nce', $con) or die ("Could not select database.");
}
?>
<center><form id="login_form1" class="form-horizontal" method="post">
						<h3 class="form-signin-heading"><i class="icon-lock"></i> Sign in</h3>
						<input type="text" class="input-block-level" id="username" name="username" placeholder="Username" required>
						<input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
						<button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Sign in</button>
						</form></center>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin').tooltip('show');
															$('#signin').tooltip('hide');
														});
														</script>		
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







<?php include ('footer.php');?>



