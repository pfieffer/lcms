														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin').tooltip('show');
															$('#signin').tooltip('hide');
														});
														</script>		
<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to NCE Learning Management System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'dashboard_teacher.php'  }, delay);  
									}else if (html == 'true_student'){
										$.jGrowl("Welcome to NCE Learning Management System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'dashboard_student.php'  }, delay);  
									}else
									{
									$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
									}
									}
								});
								return false;
							});
						});
						</script>







