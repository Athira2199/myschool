<!DOCTYPE html>
<html lang="en">
<head>
	<title>A sample bootstrap page
	</title>
<meta charset="utf=8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.footer {
    background-color:#212121;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 0;
    color:#007E33;
}

</style>
</head>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBzELoILCSOZChBufR-wcM7G6dnzKSp3hQ'></script><div style='overflow:hidden;height:499px;width:1372px;'><div id='gmap_canvas' style='height:499px;width:1372px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://thesiswritingservice.net/'>ThesisWritingservice.net</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=bcfe01e68ce53a7836028ced639e0aedfc5d381c'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(8.5159336,76.9512886),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(8.5159336,76.9512886)});infowindow = new google.maps.InfoWindow({content:'<strong>Holy Angels\' ISC School</strong><br>Watts Lane<br>695003 Trivandrum<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
<body>
 <?php
include("nav.php");
?>
      <div class="container-fluid">
        <h2 class="text-left" style="color:#1b5e20">CONTACT</h2><br>
  <div class="row" style="color:black;">
    <div class="col-sm-5">
      <p><b><u>Contact us and we'll get back to you within 24 hours.</u></b></p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Near Nanthancode Watt Lane, Nanthancode, Thiruvananthapuram, Kerala 695003</p>
      <p><span class="glyphicon glyphicon-phone"></span> 0471 231 2662</p>
      <p><span class="glyphicon glyphicon-envelope"></span> holyangelsisc@yahoo.co.in</p>
      </div>
   <div class="col-sm-7 slideanim">
      <div class="row">
        <form action="contact.php" method="post">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-success pull-right" type="submit" name="submit">Send</button>
        </div>
      </div>
    </form>
    </div>
    <?php
            if (isset($_POST['submit']))
            {     
            include("connect.php");
            $sql="INSERT INTO contact(name,email,comments)
            VALUES('$_POST[name]','$_POST[email]','$_POST[comments]')";
            if (!mysql_query($sql,$db))
            {
              die('Error: ' . mysql_error());
            }
            else
            {
            echo "<script type='text/javascript'>alert('Your Record Is Added')</script>";;
          }
            mysql_close($db);
          }
            ?>
</div></div>
<?php
include("footer.php");
?>
	</body>
</html>
