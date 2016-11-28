<?php
$db = mysql_connect('localhost','xeron','xeron') or die ("Unable to connect to Database Server.");
mysql_select_db ('nce', $db) or die ("Could not select database.");




		$email = $_POST['email'];

		mysql_query("insert into newsletter (email) values ('$email')");

		
			echo 'true';
		

?>