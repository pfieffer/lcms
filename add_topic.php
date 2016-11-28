
<?php include('header_dashboard.php'); ?>	
<?php include('session.php'); ?>	



<body>
		<?php include('header_student.php'); ?>
 <div class="container-fluid">
            <div class="row-fluid">
                <?php include('student_sidebar.php'); ?>

<div class="col-md-8">

<?php
$top=$_POST['topic'];
$detail=$_POST['detail'];

$datetime = date('Y-m-d G:i:s');

$query = "INSERT INTO topics(question, detail,datetime)
VALUES ('$top','$detail','$datetime')";

if (mysql_query($query) === TRUE) {
    echo "New record created successfully";
    echo "<a href=main_forum.php>View your topic</a>";

		mysql_query("update topics   set username = (select user from student where id='$session_id') where question ='$top'") ;
		mysql_query("update topics   set categories = (select faculty from student where id='$session_id') where question ='$top'") ;

} else {
    echo "Error: " . $sql . "<br>" . mysql_error();
}

mysql_close();

?>
</div>

<?php include('footer.php'); ?>	
</body?