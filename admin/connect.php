<?php
$con = mysql_connect("localhost","root","");
if (!$con) {
    die("Connection failed: " . mysql_error());
}else{

  
mysql_select_db ('nce', $con) or die ("Could not select database.");
}

?>