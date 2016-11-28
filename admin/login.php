<?php
		include('connect.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'")or die(mysql_error());
		$count = mysql_num_rows($query);
		$row = mysql_fetch_array($query);


		if ($count > 0){
		
		$_SESSION['id']=$row['user_id'];
		
		echo 'true';
		
		mysql_query("insert into admin_log (username,login_date,admin_id)values('$username',NOW(),".$row['user_id'].")")or die(mysql_error());
		 }else{ 
		echo 'false';
		}	
				
		?>