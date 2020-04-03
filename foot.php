<!DOCTYPE html>
<html lang="en">
<head>
  <title>A sample bootstrap page</title>
<meta charset="utf=8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
.footer
   {
    background-color:#212121;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    color:#00C851;;
    width:100%;
    margin-top:7px;
}
* {
    box-sizing: border-box;
}
</style>
<body>
<footer class="footer overlay section">
      <!-- Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
              <!-- About -->
              <div class="single-widget about">
                <p><h4><u>CONTACT US ANY TIME</u></h4></p>
                <ul>
                  <li><i class="fa fa-phone"></i> Phone:0471-278642</li>
                  <li><i class="fa fa-envelope"></i> Email: jobseekersden@yahoo.co.in</li>
                  <li><i class="fa fa-map-o"></i> Vandalur-Kelambakkam Road,Rajan Nagar Chennai,Tamil nadu 600127</li>
                </ul>
              </div>
              <!--/ End About -->
            </div>
            <div class="col-lg-4 col-md-6 col-12" >
              <!-- Useful Links -->
              <div class="single-widget useful-links">
                <h4><u>USEFUL LINKS</u></h4>
                <ul>
                  <li><a href="home.php">Home</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="event.php">Events</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
              <!--/ End Useful Links -->
            </div>
            <div class="col-lg-4 col-md-6 col-12" style=" border-left: 6px solid green">
              <!-- Newsletter -->
              <div class="single-widget newsletter">
                <h4><u>SUBSCRIBE NEWSLETTER</u></h4>
                <div class="mail">
                  <p>Don't miss to  subscribe to our news feed, Get the latest updates from us!</p>
                    <form action="" method=post >
                    <input type="email" placeholder="Enter your email" name=email>
                    <button class="button" type="submit" name=submit><i class="fa fa-envelope"></i></button></form>
                   <?php
            include("connect.php");
            if (isset($_POST['submit']))
            {    
            $sql="INSERT INTO newsfeed(mailid) 
            VALUES('$_POST[email]')";
            if (!mysql_query($sql,$db))
            {
              die('Error: ' . mysql_error());
            }
            echo "1 record added";
            mysql_close($db);
            }
          
            ?>
          
                </div>
              </div>
              <!--/ End Newsletter -->
            </div>
          </div>
        </div>
      </div>
      <!--/ End Footer Top -->
      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="bottom-head">
                <div class="row">
                  <div class="col-12">
                    <!-- Social -->
                    <ul class="social" style="padding-right:11px;" >
                      <li style="display:inline;float:left;padding-right:11px;"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li style="display:inline;float:left;padding-right:11px;"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li style="display:inline;float:left;padding-right:11px;"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li style="display:inline;float:left;padding-right:11px;"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li style="display:inline;float:left;padding-right:11px;"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul><br>
                    <!-- End Social -->
                    <!-- Copyright -->
                    <div class="copyright">
                      <p style="padding-left:31px;">&copy; Copyright 2018 <a href="home.html">JOB SEEKER'S DEN</a> All Rights Reserved</p>
                    </div>
                    <!--/ End Copyright -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Footer Bottom -->
    </footer>
	</body>
</html>