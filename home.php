<!DOCTYPE html>
<html lang="en">
<head>
  <title>A sample bootstrap page</title>
<meta charset="utf=8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img 
  {
      width: 70%;
      margin: auto;
  }
  .footer
   {
    background-color:#212121;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    color:#00C851;
    width:100%;
}


* {
    box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 13px;
    height: 300px;  /*Should be removed. Only for demonstration */
   /*background-color:#212121;
    color:#00C851;
    background-image:url("pictures/log.jpg");*/

   /* border-right: 3px dotted green*/

}
.column:hover
{
	background-color:#00c853;
}
/* Clear floats after the columns */
.row:after
 {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the four columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) 
{
    .column 
    {
        width: 100%;
    }
}
</style>
</head>
<body>
  <div class="container-fluid">
 <?php
 include("nav.php");
 ?>
       <div class="container" style="padding-top:100px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img class="img-responsive" src="pictures\photos1.jpg">
      </div>
      <div class="item">
        <img class="img-responsive" src="pictures\photos2.jpg">
      </div>
      <div class="item">
        <img class="img-responsive" src="pictures\photos3.jpg">
      </div>
    
      <div class="item">
        <img class="img-responsive" src="pictures\photos4.jpg"\>
      </div>

      <div class="item">
        <img class="img-responsive" src="pictures\photos5.jpg">
      </div>
      <div class="item">
        <img class="img-responsive" src="pictures\photos6.jpg">
      </div>
      <div class="item">
        <img class="img-responsive" src="pictures\photos7.jpg">
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
  </div></div></div><br>
  <div class="row">
  	<h1 style="text-align:center;color:#007E33;"><u>NEWS FEED<u></h1>
  <div class="column">
    <h2><u>ADMISSIONS</u></h2>
  <p class="text-white-50 bg-dark"> <marquee style="color:#CC0000"><h3><u>ADMISSIONS ARE CLOSED FOR 2018-2019 !</u></h3></marquee>
 		 To Reserve Your Seat and Scholarship Opportunities For Session 2019-2020, Please Contact Our Admission Cell.
 		Hostel and Mess Facility Are Also Available For Students.
 		<br>
 		Click on the following link to contact the academic cell.<br>
 		Hostel And Mess Facilities Are Also Specified <br>
 		<a href="academiccell.php"><u>Academic Cell</u></a>
    </p>
  </div>
  <div class="column">
    <h2><u>RESULTS</u></h2>
   <marquee style="color:#0099CC;"><h3><u>Results Are Out !</u></h3></marquee>
    <p>The results for the first unit tests are out.<br>All the students are requested to login to their student portal for further details.<br>Paper seeing will be done during class hours itself.<br>Please click here to access student portal.<br></p>
    <a href="student.php"><u>Login</u></a>
  </div>
  <div class="column">
    <h2><u>ATTENTION</u></h2>
    <marquee style="color:#FF8800;"><h3><u>Join The Various Clubs !</u></h3></marquee>
    <p>Clubs have always been an important part of each angelites life.It has helped each of them mould their personality both academically and socially.Each year different clubs have given birth to various socially-aware future citizens through social service club and also quiz wizards through quiz club.Click on the link below for furher details.<br><a href="student.php"><u>Clubs</u></a></p>
  </div>
  <div class="column">
    <h2><u>ARTICLES</u></h2>
    <marquee style="color:#6a1b9a;"><h3><u>Articles For School Magazine !</u></h3></marquee>
    <p>The school annual magazine is beautiful way the school incorporates to show all the festivals and achievements celebrated by its students and teaching as well as non-teaching staffs.
    Click on the link below to submit your articles.</p>
    <a href="student.php"><u>Click</u></a>
  </div>
</div>
<br>
<?php 
include("footer.php") ?>
  </body>
  </html>