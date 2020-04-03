<?php
session_start();
if(isset($_SESSION['login_user']))
{
echo'<!DOCTYPE html>
<html lang="en">
<head>
  <title>about
  </title>
<meta charset="utf=8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.r
{
  margin-bottom:3px;
  float:left;
  background:#212121;
  padding:13px;
  padding-bottom:50px;
  width:70%;
  height:100%;
  color:#ffffff;
}
</style>
</head>
<body>
 <div class="container-fluid">';
include("nav.php");
       	echo'<div class="r" style="margin-top:7%;padding-bottom:50px;margin-bottom:7%;margin-left:15.9%;">
            Welcome students,<br>
       		HAISC has always encouraged children to showcase their literary,poetry,artistic,story-writting as well as other extra curricular skills.<br>
       		Please fill in the details below and submit your articles in pdf format.<br>
       		Your articles will be reviewed and the best ones will be shortlisted by our jury.<br>
       		<form style="padding-top:30px;padding-left:37%;" action="articles.php" method="post">
       			<table>
       				<tr>
       					<td>NAME</td><td><input type="text" placeholder="name" name="name" style="margin-bottom:11px;color:#000000;"></td>
       				</tr>
       				<tr>
       					<td>REG.NO</td><td><input type="text" placeholder="reg.no" name="regno" style="margin-bottom:11px;color:#000000;"></td>
       				</tr>
       				<tr>
       					<td>FILE</td><td><input type="file" name="file" style="margin-bottom:11px;color:#ffffff;"></td>
       				</tr>
       				<tr>
       				 <td><input type="submit" value="Submit" name="submit" style="margin-top:14%;margin-left:111%;background-color:#007E33;text-shadow:none;border-radius:11px;"></td>
       				</tr>
       			</table>
       		</form>';
            if (isset($_POST['submit']))
            {     
            include("connect.php");
            $sql="INSERT INTO articles(user,regno,file)
            VALUES('$_POST[name]','$_POST[regno]','$_POST[file]')";
            if (!mysql_query($sql,$db))
            {
              die('Error: ' . mysql_error());
            }
            echo "1 record added";
            mysql_close($db);
          }
       echo'</div>
       </div>';
include('footer.php');
echo'</body></html>';
}
else
{
  header("location:sessiontimedout.php");
}
?>

