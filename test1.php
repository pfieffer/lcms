<?php
$db = mysql_connect('localhost','xeron','xeron') or die ("Unable to connect to Database Server.");
mysql_select_db ('nce', $db) or die ("Could not select database.");

if(isset($_POST['username']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 $query = mysql_query("select * from student  where user='$username' and pass='$password' ")or die(mysql_error());	
 $query1 = mysql_query("select * from teacher  where username='$username' and password='$password' ")or die(mysql_error());		
		$data = mysql_fetch_row($query);
		$data1=mysql_fetch_row($query1);
		if($data){	
		echo '<div id="sucess"><img src="img/success.png"></div>';}
		elseif($data1) {
			echo '<div id="sucess"><img src="img/success.png"></div>';}
		

		else
		{echo '<div id="error"><img src="img/invalid.png"></div>';}
}?>