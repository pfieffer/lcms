<?php include('header.php'); ?>
  
    <div class="container">
<div class="row">
<div class="col-lg-4">
</div>
<div class="col-lg-4">
       <form class="form" role="form" method="post"   id="login_form">
          <center><h3>Welcome Back Admin!!!</h3></center>
                    <div class="form-group">
                       <label class="sr-only" for="username">Username</label>
                       <input type="text" id="username" name="username" class="form-control input-sm chat-input" placeholder="username" required/>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="password">Password</label>
                       <input type="password" id="password" name="password" class="form-control input-sm chat-input" placeholder="password" required/>
                    </div>
                    <div class="form-group">
                       <button data-placement="right" title="Click Here to Sign In" type="submit" class="btn btn-primary btn-block" id ="signin" >Sign in</button>
                    </div>
                    
                 </form>
        <script>
      jQuery(document).ready(function(){
      jQuery("#login_form").submit(function(e){
          e.preventDefault();
          var formData = jQuery(this).serialize();
          $.ajax({
            type: "POST",
            url: "login.php",
            data: formData,
            success: function(html){
            if(html=='true')
            {
            $.jGrowl("Welcome to NCE Learning Management System", { header: 'Access Granted' });
            var delay = 2000;
              setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
            }
            else
            {
            $.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
            }
            }
            
          });
          return false;
        });
      });
      </script>
      </div>

    <div class="col-lg-4">
</div>
</div>


    </div> <!-- /container -->

  </body>
</html>