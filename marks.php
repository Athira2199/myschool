<html>
<?php
session_start();
?>
<head>
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
<body>
<div>
<nav class="navbar navbar-inverse navbar-fixed-top" style="max-height:100px;">
  <p class="navbar-text">HOLY ANGELS' ISC SCHOOL</p>
  <div class="container-fluid">
  <<ul class="nav navbar-nav navbar-right">
      <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="careers.php">Careers</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Log In<span class="caret"></span></a>
      <ul class="dropdown-menu">
          <li><a href="student.php">Student</a></li>
          <li><a href="faculty.php">Teacher</a></li>
          <li><a href="parent.php">Parent</a></li>
        </ul></li>
    </ul>
  </div>
       </nav>
</div>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-3" style="height:70%;">
        <a href="log.php"> Logout </a>
        <ul>
          <li style="color:#ffffff;"><b>Tri Semester One</b>
              <ul>
                  <li><a href="marks.php"><b>Marks</b></a></li>
                  <li><a href="timetable.php"><b>Time Table</b></a></li>
                  <li><a href="coursepage.php"><b>Course Page</b></a></li>
                  <li><a href="uploadfiles.php"><b>Upload Files</b></a></li>    
              </ul>
            </li>
            <li style="color:#ffffff;"><b>Tri Semester Two</b>
              <ul>
                  <li><a href="markstwo.php"><b>Marks</b></a></li>
                  <li><a href="timetable.php"><b>Time Table</b></a></li>
                  <li><a href="coursepage.php"><b>Course Page</b></a></li>
                  <li><a href="uploadfiles.php"><b>Upload Files</b></a></li>    
              </ul>
            </li>
            <li style="color:#ffffff;"><b>Tri Semester Three</b>
              <ul>
                  <li><a href="marksthree.php"><b>Marks</b></a></li>
                  <li><a href="timetable.php"><b>Time Table</b></a></li>
                  <li><a href="coursepage.php"><b>Course Page</b></a></li>
                  <li><a href="uploadfiles.php"><b>Upload Files</b></a></li>  
              </ul>
            </li>
            <li style="color:#ffffff;padding-top:0px;"><a href="leave.php"><b style="color:#ffffff;">Leave Request</b></a></li>
        </ul>
      </div>

  <?php
  include("connect.php");
  $username=$_SESSION['login_user'];
 $password=$_SESSION['password'];
  ?>
  <div class="marks">
<div class="marks1">
  <h1>TRI-SEMESTER ONE</h1>
<table class="table table-bordered table-responsive">
  <tr class="success">
  <td>S.NO.</td>
   <td>SUBJECT</td>
   <td>UNIT TEST 1</td>
   <td>UNIT TEST 2</td>
   <td>FINAL EXAM</td> 
  </tr>
<tr>
  <td>1.</td>
    <td>SCIENCE</td>
<?php
  $result= mysql_query("SELECT * FROM marks1 WHERE user='$username' and password='$password' ");
  while($row = mysql_fetch_assoc($result)) {
echo"<td align=center>".($row["science1"])."<td align=center>".($row["science2"])."<br>
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
?>
<div class="marks2">
  <h1>TRI-SEMESTER TWO</h1>
<table class="table table-bordered table-responsive">
  <tr class="success">
  <td>S.NO.</td>
   <td>SUBJECT</td>
   <td>UNIT TEST 1</td>
   <td>UNIT TEST 2</td>
   <td>FINAL EXAM</td> 
  </tr>
  <tr>
     <td>1.</td>
    <td>SCIENCE</td>
    <?php
    $result= mysql_query("SELECT * FROM marks2 WHERE user='$username' and password='$password' ");
  while($row = mysql_fetch_assoc($result)) {
echo" <td align=center>".($row["science1"])."<td align=center>".($row["science2"])."<br>
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
?>
<div class="marks3">
  <h1>TRI-SEMESTER THREE</h1>
<table class="table table-bordered table-responsive">
  <tr class="success">
  <td>S.NO.</td>
   <td>SUBJECT</td>
   <td>UNIT TEST 1</td>
   <td>UNIT TEST 2</td>
   <td>FINAL EXAM</td> 
  </tr>
  <tr>
    <td>1.</td>
    <td>SCIENCE</td>
    <?php
    $result= mysql_query("SELECT * FROM marks3 WHERE user='$username' and password='$password' ");
  while($row = mysql_fetch_assoc($result)) {
echo" <td align=center>".($row["science1"])."<td align=center>".($row["science2"])."<br>
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
?>
<?php
include("footer.php");
?>
</body>
</html>