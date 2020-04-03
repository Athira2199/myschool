<?php
session_start();
if(isset($_SESSION['login_user']))
{
echo'<html><head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
</style>
</head>
<body>';
include("nav.php");
include("columnp.php");
include("connect.php");
$username=$_SESSION['login_user'];
$password=$_SESSION['password'];
echo'<br><br><br>
<div class="marks3">';
    $result= mysql_query("SELECT * FROM marks3 WHERE user='$username' and password='$password' ");
  while($row = mysql_fetch_assoc($result)) {
echo"<h1>TRI-SEMESTER THREE</h1>
<table class='table table-bordered table-responsive'>
  <tr class='success'>
  <td>S.NO.</td>
   <td>SUBJECT</td>
   <td>UNIT TEST 1</td>
   <td>UNIT TEST 2</td>
   <td>FINAL EXAM</td> 
  </tr>
  <tr>
    <td>1.</td>
    <td>SCIENCE</td><td align=center>".($row["science1"])."<td align=center>".($row["science2"])."<br>
 <td align=center>".($row["science3"])."
</tr>
  <tr class='success'>
   <td>2.</td>
    <td>SOCIAL SCIENCE</td>
    <td align=center>".($row["socialscience1"])."<td align=center>".($row["socialscience2"])."<br>
 <td align=center>".($row["socialscience3"])."
  </tr>
  <tr>
   <td>3.</td>
    <td>MATHEMATICS</td>
    <td align=center>".($row["mathematics1"])."<td align=center>".($row["mathematics2"])."<br>
 <td align=center>".($row["mathematics3"])."
  </tr>
  <tr class='success'>
   <td>4.</td>
    <td>ENGLISH</td>
 <td align=center>".($row["english1"])."<td align=center>".($row["english2"])."<br>
 <td align=center>".($row["english3"])."
  </tr>
   <tr>
    <td>5.</td>
    <td>HINDI</td>
    <td align=center>".($row["hindi1"])."<td align=center>".($row["hindi2"])."<br>
 <td align=center>".($row["hindi3"])."
  </tr>
   <tr class='success'>
    <td>6.</td>
    <td>COMPUTER</td>
<td align=center>".($row["computer1"])."<td align=center>".($row["computer2"])."<br>
 <td align=center>".($row["computer3"])."
  </tr>
  <tr>
   <td>7.</td>
    <td>GAMES</td>
    <td align=center>".($row["games1"])."<td align=center>".($row["games2"])."<br>
 <td align=center>".($row["games3"])."
  </tr>
</table>
</div>";
}
echo'<br><br><br><br>';
include("footer.php");
echo'</body>
</html>';
}
else
{
  header("location:sessiontimedoutp.php");
}