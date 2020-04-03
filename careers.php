  <html lang="en">
<head>
  <title>A sample bootstrap page</title>
<meta charset="utf=8">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.col-md-4
{
  color:#007E33;
}
</style>
</head>
<body>
  <?php
include("nav.php");
?>
<div class="big">
<div class="container-fluid" style="padding-top:3%;">
       <table class="table" style="width:100%;">
          <tbody style="padding-left:0px;">
             <marquee><p><h3 style="color:#212121;">We Are Happy To Have You On Board!!!
              Please fill the details given below to join our journey
              We will contact you once we have reviewed your resumes....</h3></p></marquee>
            <h1 style="color:#007E33;">DETAILS</h1>
             <tr style="padding-left:0px;">
                <td colspan="1" style="padding-left:0px;">
                   <form class="well form-horizontal" style="background-color:rgba(255, 255, 255, 0.3);padding-left:0px;" onSubmit="formValidation();" method="post" name="career">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label" style="color:#007E33;">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="name" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group"> <!-- Date input -->
        <label class="col-md-4 control-label" for="date">Date</label>
       <div class="col-md-8 inputGroupContainer"><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input class="form-control" id="date" name="dob" placeholder="MM/DD/YYY" type="text"/></div></div>
      </div>
      <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#date').datepicker({
                  autoclose:true,
                    format: "dd/mm/yyyy"
                });  
            
            });
function formValidation()
{
var passid = document.career.phonenumber;
var uname = document.career.name;
var uadd = document.career.address;
var ucountry = document.career.country;
var uzip = document.career.postcode;
var uemail = document.career.email;
if(passid_validation(passid,10))
{
if(allLetter(uname))
{
if(alphanumeric(uadd))
{ 
if(countryselect(ucountry))
{
if(allnumeric(uzip))
{
if(ValidateEmail(uemail))
{
}
} 
}
} 
}
}
return false;
}
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}
function alphanumeric(uadd)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}
}
function allnumeric(uzip)
{ 
var numbers = /^[0-9]+$/;
if(uzip.value.match(numbers))
{
return true;
}
else
{
alert('ZIP code must have numeric characters only');
uzip.focus();
return false;
}
}
function ValidateEmail(uemail)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
}
function passid_validation(passid,mx)
{
var passid_len = passid.value.length;
if (passid_len == 0 ||passid_len > mx)
{
alert("Password should not be empty / length should be less than "+mx);
passid.focus();
return false;
}
return true;
}


        </script>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 1</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 2</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine2" name="addressLine2" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">State/Province/Region</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State/Province/Region" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Postal Code/ZIP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode" placeholder="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-home"></i></span>
                                  <input id="country" name="country" placeholder="Country" class="form-control" required="true" value="" type="text">
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="email"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phonenumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                          <label class="col-md-4 control-label">Resume</label>
                         <div class="col-md-8 inputGroupContainer">
                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input type="file" placeholder="Upload Your Resume" name="resume" style="color:blue;" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-success form-control" value="SUBMIT" name="submit">
                    </div>
                      </fieldset>
                   </form>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <?php
            if (isset($_POST['submit']))
            {
            $date=isset($_POST['dob']) ? $_POST['dob'] : '';
            include("connect.php");
            $sql="INSERT INTO careers(name,dob,addressLine1,addressLine2,city,state,postcode,country,email,phonenumber,resume)
            VALUES('$_POST[name]','$date','$_POST[addressLine1]','$_POST[addressLine2]','$_POST[city]','$_POST[state]','$_POST[postcode]','$_POST[country]','$_POST[email]','$_POST[phonenumber]','$_POST[resume]')";
            if (!mysql_query($sql,$db))
            {
              die('Error: ' . mysql_error());
            }
            echo "1 record added";
            mysql_close($db);
          }
            ?>
      <?php include 'footer.php';?>
</body>
      </html>
