<?php
session_start();
if(isset($_SESSION['login_user']))
{
  echo'<html>
<head><title>Time Table</title>
	<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css>
	<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js></script>
	<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js></script>
	<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
	<style>
  h1
{
  padding-left:34%;
  font-family:American Typewriter;
}
td
{
  font-family:American Typewriter;
}
.marks1,.marks2,.marks3
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
.timetable
{
margin-right:99px;
  margin-left: 399px;
}
</style>
</head>  
<body>';
include("nav.php");
include("column.php");
include("connect.php");
echo'<br><br><br>
<div class="timetable">
<h1 style="padding-left:44%";><font color="DARKCYAN">TIME TABLE</font></h1>
<table class="table table-responsive table-bordered">
<tr>
 <td align=center>DAY<br>AND<br>TIME
 <td>9:00am<br>&nbsp&nbsp&nbsp&nbsp to<br>9:50am
 <td>9:50am<br>&nbsp&nbsp&nbsp&nbsp to<br>10:30am
 <td>10:30am<br>&nbsp&nbsp&nbsp&nbsp to<br>10:45am
 <td>10:45am<br>&nbsp&nbsp&nbsp&nbsp to<br>11:25am
 <td>11:25am<br>&nbsp&nbsp&nbsp&nbsp to<br>12:05pm
 <td>12:05pm<br>&nbsp&nbsp&nbsp&nbsp to<br>12:45pm
 <td>12:45pm<br>&nbsp&nbsp&nbsp&nbsp to<br>1:30pm
 <td>1:30pm<br>&nbsp&nbsp&nbsp&nbsp to<br>2:10pm
 <td>2:10pm<br>&nbsp&nbsp&nbsp&nbsp to<br>2:50pm
 <td>2:50pm<br>&nbsp&nbsp&nbsp&nbsp to<br>3:30pm
</tr>
  <tr class="success">
<td align=center>MONDAY';
$result= mysql_query("SELECT * FROM class9 WHERE day='Monday' ");
while($row = mysql_fetch_assoc($result)) {
echo" <td align=center>".($row["period1"])."<td align=center>".($row["period2"])."<br>
 <td rowspan=6 align=center>R<br><br>E<br><br>C<br><br>E<br><br>S<br><br>S".
 "<td align=center>".($row["period3"])."<br>".
 "<td align=center>".($row["period4"])."<br>".
 "<td align=center>".($row["period5"])."<br>".
 "<td rowspan=6 align=center>R<br><br>E<br><br>C<br><br>E<br><br>S<br><br>S".
 "<td align=center>".($row["period6"])."<br>".
 "<td align=center>".($row["period7"])."<br>".
 "<td align=center>".($row["period8"])."<br>
</tr>";
}
echo'<tr class="danger">
 <td align=center>TUESDAY';
  $result= mysql_query("SELECT * FROM class9 WHERE day='Tuesday' ");
   while($row = mysql_fetch_assoc($result)) {
echo" <td align=center>".($row["period1"])."<td align=center>".($row["period2"])."<br>
 <td align=center>".($row["period3"])."<br>".
 "<td align=center>".($row["period4"])."<br>".
 "<td align=center>".($row["period5"])."<br>".
 "<td align=center>".($row["period6"])."<br>".
 "<td align=center>".($row["period7"])."<br>".
 "<td align=center>".($row["period8"])."<br>
</tr>";
}
echo'<tr class="info">
 <td align=center>WEDNESDAY';
  $result= mysql_query("SELECT * FROM class9 WHERE day='Wednesday' ");
  while($row = mysql_fetch_assoc($result)) {
echo" <td align=center>".($row["period1"])."<td align=center>".($row["period2"])."<br>
 <td align=center>".($row["period3"])."<br>".
 "<td align=center>".($row["period4"])."<br>".
 "<td align=center>".($row["period5"])."<br>".
 "<td align=center>".($row["period6"])."<br>".
 "<td align=center>".($row["period7"])."<br>".
 "<td align=center>".($row["period8"])."<br>
</tr>";
}
echo'<tr class="warning">
 <td align=center>THURSDAY';
  $result= mysql_query("SELECT * FROM class9 WHERE day='Thursday' ");
   while($row = mysql_fetch_assoc($result)) {
echo" <td align=center>".($row["period1"])."<td align=center>".($row["period2"])."<br>
 <td align=center>".($row["period3"])."<br>".
 "<td align=center>".($row["period4"])."<br>".
 "<td align=center>".($row["period5"])."<br>".
 "<td align=center>".($row["period6"])."<br>".
 "<td align=center>".($row["period7"])."<br>".
 "<td align=center>".($row["period8"])."<br>
</tr>";
}
echo'<tr class="active">
 <td align=center>FRIDAY';
  $result= mysql_query("SELECT * FROM class9 WHERE day='Friday' ");
  while($row = mysql_fetch_assoc($result)) {
echo" <td align=center>".($row["period1"])."<td align=center>".($row["period2"])."<br>
 <td align=center>".($row["period3"])."<br>".
 "<td align=center>".($row["period4"])."<br>".
 "<td align=center>".($row["period5"])."<br>".
 "<td align=center>".($row["period6"])."<br>".
 "<td align=center>".($row["period7"])."<br>".
 "<td align=center>".($row["period8"])."<br>
</tr>";
}
echo'</table>
</div>';
include("footer.php");
echo'</body>
</html>';
}
else
{
  header("location:sessiontimedout.php");
}
?>