<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.big
{
	background-image:url("pictures/help.jpg");
	height:100%;
	width:100%;
	background-size: 100%;
	background-repeat:no-repeat;

}
.container-log
{
    height:30%;
    width:70%;
    display: table;
    padding-top:100px;
    padding-bottom:100px;
	padding-left: 270px;
	background-color: rgba(0, 0, 0, 0.7);
 
	margin:70px 370px 300px 240px;
}
.text-centre
{
	padding-left: 139px;
}
.form-group
{
	width:400px;
}
.sb
{
	padding-left: 150px;
}
.footer {
    background-color:#212121;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 0;
    color:#007E33;
}
.footer:hover
{
  background-image:url("pictures/logo.jpg");
}
</style>
<body>
<div class="big"> 
<?php
include("nav.php");
?>
<div class="container-log">
	<h2 class="text-centre" style="color:#007E33;">LOGIN
	</h2>
		<form class="form-horizontal" method="post">
		<div class="form-group">
			 <div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type=text class="form-control" name=user id=user placeholder="USERNAME/EMAIL-ID" required="required">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type=password class="form-control" name=password id=password placeholder="PASSWORD" required="required" type="password">
			</div>
		</div>
		<div class="form-group">
			<div class="sb">
			<button type="submit" name="submit" class="btn btn-success" style="text-align:center;padding-left:27px;padding-right:24px">SIGN-IN</button><br>
			 </div>
			</form><br>
			<p><span  style="padding-left:99px;color:#007E33"><b>NOT A REGISTERED USER?</b></span>
        <br>
			<span><a href="home.html" style="padding-left:180px;"><b>SIGN IN</b></a></span></p>
      <?php
    if (isset($_POST['submit']))
        {     
    include("connect.php");
    $username=$_POST['user'];
    $password=$_POST['password'];
  $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username=mysql_real_escape_string($username);
    $password=mysql_real_escape_string($password);
    $query = mysql_query("SELECT * FROM login WHERE id='$username' and password='$password'");
     if (mysql_num_rows($query)!=0)
    {
      session_start();
       $_SESSION['login_user']=$username; 
       $_SESSION['password']=$password;
     echo "<script language='javascript' type='text/javascript'> location.href='Welcome.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
    ?>
			
</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>