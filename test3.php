<!DOCTYPE html>

<?php
include ('header.php');
$con = mysql_connect("localhost","xeron","xeron","nce");
if (!$con) {
    die("Connection failed: " . mysql_error());

  
mysql_select_db ('nce', $con) or die ("Could not select database.");
}
?>
<div class="voffset5"><div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <form class="form-login" id="login_form1" >
            <h4>Welcome back.</h4>
            <input type="text" id="username" name="username" class="form-control input-sm chat-input" placeholder="username" required/>
            </br>
            <input type="password" id="password" name="password" class="form-control input-sm chat-input" placeholder="password" required/>
            </br>
           
                 
            <button data-placement="right" title="Click Here to Sign In"class="btn btn-primary btn-md" id ="signin" type="submit"><i class="fa fa-sign-in">login</i></button>
           
            
            </form>
        
        </div>
    </div>
</div>
</div>
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






<div class="voffset5"> <?php include ('footer.php');?> </div>




