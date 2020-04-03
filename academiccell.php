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
li
{
  list-style-type: square;
}
.admission
{
  margin-top: 77px;
  margin-left: 14px;
}
.fees,.scholarship
{
  margin-top: 14px;
  margin-left: 14px;
}
</style>
</head>
<body>
  <?php
  include("nav.php");
  ?>
  <div class="admission">
      <h4><u>CONTACT FOR ADMISSION DETAILS</u></h4>
          <i class="fa fa-phone"></i> Phone:9192394567
          <br><i class="fa fa-envelope"></i> Email:admissioncellhaisc@gmail.com
          <br><i class="fa fa-map-o"></i> Near Nanthancode Watt Lane, Nanthancode, Thiruvananthapuram, Kerala 695003
  </div>
    <div class="scholarship">
      <h4><u>CLICK ON THE BELOW LINK TO KNOW THE SCHOLARSHIP REQUIREMENTS</u></h4>
      <button class="btn btn-success but"><a href="scholarship.pdf" download="scholarship"><u>SCHOLARSHIP</u></a></button>
    </div>
    <div class="fees">
<table class="table table-bordered table-responsive">
  <tr class="success">
    <td>S.No</td>
    <td>Particulars</td>
    <td>Accommodation &amp Mess Fees</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Non AC With  Wash Room(3 Sharing)</td>
    <td>111,500 </td>
  </tr>
  <tr class="success">
    <td>2</td>
    <td>AC With wash Room(2,3 Sharing)</td>
    <td>210,000</td>
  </tr>
  <tr>
    <td>3</td>
    <td>AC With wash Room (2 Sharing) M Block</td>
    <td>215,000</td>
  </tr>
  <tr class="success">
    <td>4</td>
    <td>Non AC With Wash Room (2 Sharing) M Block</td>
    <td>130,000</td>
  </tr>
</table>
<p>
<b><u>NOTE</u></b>
<li>Mess fees at Rs.55000 for veg and non veg mess included.</li>
<li>Laundry fees(Optional) is Rs. 7000.</li>
<li>No refund is permitted during the middle of the course unless the candidate withdraws.</li>
<li>Refund is not permitted if the student is expelled from the hostel.</li>
<li>Cancellation charges for hostels will be as per rules. (Rs 5000/- If cancellation is done before joining the hostel). Refund will be made within 30 days.</li>
<li>Hostel and Mess fees are subject to revision every year.</li>
 
  </p>
    </div>
     <?php include 'footer.php';?>
   </body>
   </html>