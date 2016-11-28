<?php
include ('connect.php');
include('session.php');
mysql_query("update admin_log set logout_Date = NOW() where admin_id = '$session_id' ")or die(mysql_error());

session_destroy();

header('location:../index.php');
?>