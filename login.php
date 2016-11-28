<?php
$db = mysql_connect('localhost','xeron','xeron') or die ("Unable to connect to Database Server.");
mysql_select_db ('nce', $db) or die ("Could not select database.");

	session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* student */
			$query = "SELECT * FROM student WHERE user='$username' AND pass='$password'";
			$result = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($result);
			$num_row = mysql_num_rows($result);
		/* teacher */
		$query_teacher = mysql_query("SELECT * FROM teacher WHERE username='$username' AND password='$password'")or die(mysql_error());
		$num_row_teacher = mysql_num_rows($query_teacher);
		$row_teacher = mysql_fetch_array($query_teacher);
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['id'];
		echo 'true_student';	
		}else if ($num_row_teacher > 0){
		$_SESSION['id']=$row_teacher['teacher_id'];
		echo 'true';
		
		 }else{ 
				echo 'false';
		}	
				
		?>