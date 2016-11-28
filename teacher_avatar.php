 <?php
 include('connect.php');
 include('session.php');
 
 
                            if (isset($_POST['change'])) {
                               

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "admin/uploads/" . $_FILES["image"]["name"]);
                                $image = "uploads/" . $_FILES["image"]["name"];
								
								mysql_query("update  teacher set image = '$image' where teacher_id  = '$session_id' ")or die(mysql_error());
								
								?>
 
								<script>
								window.location = "dashboard_teacher.php";  
								</script>

                       <?php     }  ?>