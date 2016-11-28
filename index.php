
<?php include('header.php'); ?>



<div class="row-fluid">
<?php include('slider.php'); ?>
</div>

<div class="voffset9"><div class="container">

<div class="row-fluid">
<div class="col-md-4">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <center>  <img src="images/banner2.png" width="500" height="300" alt="NCE">

              <div class="carousel-caption">
                <h3>Message from The principle</h3>
    <p class="text-justify">adasdsadasdasdasdasdasdasdasdasdasdasdasdasd</p>
  </div></center>
    </div>

    <div class="item">
      <center><img src="images/banner1.png" width="500" height="300" alt="NCE"></center>
    </div>

    <div class="item">
      
      <center><img src="images/kharal.png" width="500" height="300" alt="NCE"></center>
    </div>

    <div class="item">
          <center>
          <img src="images/LMS.png" width="500" height="300" alt="Flower">
              
        </center>
        </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>
<div class="col-md-4">
<div class="well">
<center><img src="image/IMG_5643.png" width="50px" height="50px" >
                <h3>Message From Principal</h3>  
                <h5>Er. Tak Bahadur Galami
principal</h5>

  <p class="text-justified">I am delighted to invite you as a student to explore this remarkable college. A faculty and students with shared commitment to the power of education has gathered here for centuries to advance knowledge, to explore fundamental questions and above all to exchange ideas.
  We are also embracing new challenges and realizing new opportunities.
It is a place where the intellectual and personal potential of every member of our students and academics is fostered and encouraged at every turn.

   </p>
</div>
</div>
<div class="col-md-4">
   
     <div class="Container">
       <h3>Academic Calender</h3>
      </div>
      
      
    
  </div>
</div>

</div>
</div>
<div class="voffset3"><div class="container">

<div class="row-fluid">
<div class="col-md-4">
<div class="list-group">
  <h3> Connect with us</h3>
  <button type="button" class="list-group-item"> <img src="images/facebook.png" alt="facebook" width="10" height="10"> Facebook</button>
  <button type="button" class="list-group-item"> <img src="images/twitter.png" alt="facebook" width="15" height="15"> Twitter</button>
  <button type="button" class="list-group-item"> <img src="images/youtube.png" alt="facebook" width="15" height="15"> Youtube</button>
  <button type="button" class="list-group-item"> <img src="images/linkedin.png" alt="facebook" width="10" height="10"> LinkedIn</button>
</div>
</div>
<div class="col-md-4" id="map-canvas">
<h3>Location map</h3>
<iframe
  width="350"
  height="300"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDr9YiGCic0fMi786xWYyHWuZCD4SqlsHg
    &q=National+College+of+Engineering,lalitpur" allowfullscreen>
</iframe>
 

</div>
<div class="col-md-4">
   
     <div class="caption">
        <h3>Join Us</h3>
        <p>Be the part of NCE family..</p>
        <p><a href="admissionnotices.php" class="btn btn-primary" role="button">Admission Notices</a> </p>
      </div>
      
      <div class="caption">
        <h3> Sign up for Newsletter</h3>
        <form class="form" role="form" method="post"   id="newsletter">
        <div class="form-group">
                       <label class="sr-only" for="email">Email</label>
                       <input type="text" id="email" name="email" class="form-control input-sm chat-input" placeholder="Email" required/>
                    </div>
                     <div class="form-group">
                       <button data-placement="right" title="Click Here to Sign In" type="submit" class="btn btn-primary btn-block" id ="signin" >Sign in</button>
                    </div>
                    </form>
                     <script>
            jQuery(document).ready(function(){
            jQuery("#newsletter").submit(function(e){
                    e.preventDefault();
                    var formData = jQuery(this).serialize();
                    $.ajax({
                        type: "POST",
                        url: "newsletter.php",
                        data: formData,
                        success: function(html){
                        if(html=='true')
                        {
                        $.jGrowl("Thankyou for signing up for newsletter", { header: 'Signup Success' });
                          
                        }
                        else
                        {
                        $.jGrowl("Please Check if you have signed up before", { header: 'newsletter signup failed' });
                        }
                        }
                        
                    });
                    return false;
                });
            });
            </script>
      </div>
        
    
  </div>
</div>

</div>
</div>



<br>
<div class ="row-fluid "><div class="footer">
<?php include('footer.php'); ?>
</div>
</div>

</body>
</html>