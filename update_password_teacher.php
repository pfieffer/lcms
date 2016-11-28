 <?php
 include('connect.php');
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysql_query("update teacher set password = '$new_password' where id = '$session_id'")or die(mysql_error());
 ?>