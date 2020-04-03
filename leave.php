<html>
<head>
	<meta charset="utf=8">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
function textCounter(field,cntfield,maxlimit)
{
if (field.value.length > maxlimit)	
{
	field.value = field.value.substring(0, maxlimit);
}
else
{
	cntfield.value = maxlimit - field.value.length;
}
}
</script>
<style>
.leave
{
	border-style:solid;
	border-width:3px;
	border-color: #212121;
	width:70%;
	height:70%;
	margin-top:4%;
	margin-left:247px;
	padding-left:77px;
	padding-top: 0px;
}
.submit3
{
	margin-top:47px;
	border-top:2px solid #212121;
	border-left:2px solid #212121;
	border-right:2px solid #212121;
	border-bottom:2px solid #212121;
	padding:10px 20px !important;
	font-size:14px !important;
	background-color:#ffffff;
	font-weight:bold;
	color:#00C851;
}
/*.big
{
	background-image:url('pictures/photos3.jpg');
	background-repeat:no-repeat;
	background-size:100% 100%;
}*/
</style>
</head>
<body>
	<div class="container">
  <nav class="navbar navbar-inverse navbar-fixed-top" style="max-height:100px">
  <p class="navbar-text">HOLY ANGELS' ISC SCHOOL</p>
  <div class="container-fluid">
  <ul class="nav navbar-nav navbar-right">
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
    <div class="big">
    <div class='leave'>
    	<font color="#00C851"><b><h1 style="padding-left:30.9%;">LEAVE REQUEST</h1></b></font><br><br>
<table width="79%" height="350" style="border-collapse:separate;border-spacing:0px;">
 <tr>
	<td valign="top" width="1%" >&nbsp;	
	</td>
	<td valign="top" width="78%">
	<form name="leave_request" action="leave_request_submit.asp" method="post">
	<table width="76%" style='border-collapse:separate;border-spacing:0px;'>
	<tr>
		<td width="37%"  bgcolor=#ffffff><font color="#00C851"><b>Select</b></font></td>
		<td width="58%" bgcolor="#ffffff " style="padding-top: 7px;">
		<select name="apply" class=textbox> 
			<option value="" selected>-- Approving Authority --</option>
				<option value="50206\FA">Faculty Advisor - ARUN KUMAR SARMA (50206)</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="37%" bgcolor=#ffffff><font color="#00C851"><b>Leave Type</b></font></td>
		<td width="58%" bgcolor="#ffffff ">
		<select name="lvtype" class="textbox" tabindex=1 onChange="call_leave_dt()">
		<option value="" selected>-- Select --</option>
		<option value='EY'>EMERGENCY LEAVE</option><option value='AE'>EXAMINATIONS (GATE)</option><option value='HT'>HOME TOWN / LOCAL GUARDIANS PLACE</option><option value='II'>INDUSTRIAL VISIT (THROUGH FACULTY COORDINATORS)</option><option value='LB'>LAB PERMISSION</option><option value='LG'>LOCAL GUARDIAN</option><option value='PJ'>OFF CAMPUS INTERVIEWS (THROUGH PAT OFFICE)</option><option value='EP'>OFFICIAL EVENTS</option><option value='OG'>OUTING</option><option value='SL'>SEMESTER LEAVE</option><option value='SH'>SHOPING</option><option value='SV'>SUMMER VACATION</option><option value='SP'>SUSPEND</option><option value='WV'>WINTER VACATION</option><option value='WP'>WITH PARENT LEAVE</option>
		</select>
	</td>
	</tr>
	<tr bgcolor="#B0BFCC">
		<td colspan=2 align="center">
			<span id="txtHint">
			</span>
		</td>
	</tr>	
	<tr>
		<td width="37%" bgcolor="#ffffff"><font color="#00C851"><b>Place and Address</b></font></td>	
		<td width="58%" bgcolor="#ffffff ">
			<textarea name="place" rows="5" cols="87" class="textbox" tabindex=3 style="overflow:hidden;" onKeyDown="textCounter(document.leave_request.place,document.leave_request.remLen1,100)" onKeyUp="textCounter(document.leave_request.place,document.leave_request.remLen1,100)">
			</textarea>
			&nbsp;<input class="textbox" type="text" name="remLen1" size="4" maxlength="3" value="100" readOnly> Characters left
		</td>
	</tr>
	<tr>
		<td width="37%" bgcolor="#ffffff"><font color="#00C851"><b>Reason</b></font></td>	
		<td width="58%" bgcolor="#ffffff ">
			<input type=text name=reason class=textbox size=50 maxlength=50></input>
		</td>
	</tr>	
	<tr bgcolor=#ffffff align="center">
		<td align="center" colspan="2">
			<input type=submit class="submit3" value="Apply" name="requestcmd" onclick="return check_null()"></input>
			&nbsp;&nbsp;
			<input type=button name=reset class="submit3" value="Reset" style="margin-left:47px;"></input>
		</td>
	</tr>
	</table>
	</form>
	</td>
  </tr>
</table>
</div>
</div>
</body>
</html>
<?php include 'footer.php';?>
