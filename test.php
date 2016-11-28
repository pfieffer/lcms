<!DOCTYPE html>

<?php
include ('header.php');
$con = mysql_connect("localhost","xeron","xeron","nce");
if (!$con) {
    die("Connection failed: " . mysql_error());

  
mysql_select_db ('nce', $con) or die ("Could not select database.");
}
?>

<script type="text/javascript">
$(document).ready(function() {
$("#submit").click(function() {
    var username = $("#username").val();	
	var password = $("#password").val();
	if(username=='' || password=='' ){ 
	alert("Please enter the username and password");
	}
	else {		
    $.ajax({
    type: "POST",
    url: "test1.php",
    data:  "username="+ username + "&password=" + password ,
	
	beforeSend: function() 
		{
			$('#display_query').html('Loading....');
		},  
		success: function(response)
		{
			$("#display_query").fadeIn(2000).html(response);
			
			document.getElementById('username').value='';
	        document.getElementById('password').value='';
			
		} 
});
}		
    return false;
	});
	
});

</script>



<form role="form" method="post" name="form" action="">
					<div class="col-md-4" align="center">
  						<div class="form-group">
   								 <label for="username">Username:</label>
   								 <input type="text" class="form-control" id="username">
  						</div>
  						</div>
  					

 					 <div class="form-group">
 					 <div class="col-md-4" align="center">
  					  <label for="password">Password:</label>
							    <input type="password" class="form-control" id="password">
							  </div>
							  </div>
							  <div class="checkbox">
							    <label><input type="checkbox"> Remember me</label>
							  </div>
							  <button type="submit" class="btn btn-success">Submit</button>

							  	<br/>
							  
							</form>		
							<br/>
							<div align="center" id="display_query"></div>
	

<?php include ('footer.php');?>



