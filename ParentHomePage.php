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
</style>
</head>
<body>';
include("nav.php");
   echo'<div class="container-fluid">
   	<div class="row">';
      include("columnp.php");
   		echo'<div class="col-md-3" style="margin-left:12%;height:40%;width:50%;margin-top:11%;margin-top:7%;">
   			<h3 style="color:#0277bd;padding-left:39%;">SPOTLIGHT</h3>
   			<div class="col-md-12" style="height:30%;width:100%;color:#ffffff;">Rules and regulations to be followed.<br><a href="rules.html"><u>Rules</u></a></div>
   		</div>
   	</div>
   </div>';
include("footer.php");
	echo'</body>
</html>';
}
else
{
   header("location:sessiontimedoutp.php");
}
?>