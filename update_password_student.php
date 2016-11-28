 <?php
 include('connect.php');
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysql_query("update student set pass = '$new_password' where id = '$session_id'")or die(mysql_error());
 ?>