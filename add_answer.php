<?php include('header_dashboard.php'); ?>	
<?php include('session.php'); ?>	



<body>
		<?php include('header_student.php'); ?>
 <div class="container-fluid">
            <div class="row-fluid">
                <?php include('student_sidebar.php'); ?>

<div class="col-md-8">
<?php

$id=$_POST['id'];

//Find highest answer number
$query="SELECT MAX(a_id) AS MAXa_id FROM replies where question_id='$id'";
$result = mysql_query($query);
$rows = mysql_fetch_array($result);

//increase the value of max answer number
if($rows){
	$maxa_id = $rows['MAXa_id']+1;
}
else{
	$maxa_id = 1;
}

//get values from form

$a_answer = $_POST['a_answer'];


//insert answerr
$query2 = "INSERT INTO replies(question_id, a_id, a_answer,a_datetime) VALUES('$id','$maxa_id','$a_answer',NOW())";
$result2 = mysql_query($query2);
echo 'ok';
if($result2){
			mysql_query("update replies  set a_username = (select user from student where id='$session_id') where a_answer ='$a_answer'") ;

	echo "sucessful </br>";
	echo "<a href = 'view_topic.php?id=".$id."'>View your Reply</a>";

	$query3 = "UPDATE topics SET reply='$maxa_id' where id='$id'";
	$result3 = mysql_query($query3);
}
else{
	echo "Error";
}



mysql_close();
?>

</div>


<?php include('footer.php'); ?>	
