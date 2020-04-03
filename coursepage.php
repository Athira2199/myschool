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
.course
{
  margin-right:99px;
  margin-left: 399px;
  /*background-image:url("pictures/haisc.jpg");*/
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
h1
{
  padding-left:34%;
  font-family:American Typewriter;
}
td
{
  font-family:American Typewriter;
}
</head>
</style>
<body>';
 include("nav.php");
 include("column.php");
 include("connect.php");
 $username=$_SESSION['login_user'];
 $password=$_SESSION['password'];
  echo'<br><br><br>
<div class="course">
  <h1>COURSEPAGE</h1>
<table class="table table-bordered table-responsive">
  <tr class="success">
  <td align="center">S.NO.</td>
   <td align="center">SUBJECT</td>
   <td align="center">FACULTY</td>';
  $result= mysql_query("SELECT * FROM course9");
  while($row = mysql_fetch_assoc($result)) {
echo"<tr><td align=center>".($row["no"])."<td align=center>".($row["subject"])."<br>
 <td align=center>".($row["faculty"])."
</tr>";
}
echo'</table>
</div>
<br>';
include("footer.php");
echo'</body>
</html>';
}
else
{
  header("location:sessiontimedout.php");
}