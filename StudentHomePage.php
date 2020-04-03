<?php
session_start();
if(isset($_SESSION['login_user']))
{
echo'<html>
<head>
	<title>
		Welcome
	</title>
	<meta charset="utf=8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.col-md-3 > ul > li
{
	padding-top:9%;
}
.col-md-3
{
	background-color:#2E2E2E;
	margin-top:4%;
	margin-bottom:1%;
}
.col-md-12
{
	animation-name:moving;
	animation-duration:14s;
	animation-iteration-count: infinite;
}
@keyframes moving
{
	from{transform:translateY(100%);}
	to{transform:translateY(-11%);}
}
</head>
</style>
<body>';
 include("nav.php");
   echo'<div class="container-fluid">
   	<div class="row">';
include("column.php");
   		echo'<div class="col-md-3" style="margin-left:12%;height:40%;width:50%;margin-top:11%;margin-top:7%;">
   			<h3 style="color:#0277bd;padding-left:39%;">SPOTLIGHT</h3>
   			<div class="col-md-12" style="height:30%;width:100%;color:#ffffff;">Join The Various Clubs ! Click on the link below for furher details.<br>
    <a href="clubs.pdf" download="clubs"><u>Clubs</u></a><br>Click on the link below to submit your articles.<br>
    <a href="articles.php"><u>Articles</u></a><br>Rules and regulations to be followed.<br><a href="rules.pdf" download="rules"><u>Rules</u></a></div>
   		</div>
   	</div>
   </div>';
   include("footer.php");
echo'	</body>
</html>';
}
else
{
  header("location:sessiontimedout.php");
}
?>