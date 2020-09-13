<?php
session_start();
 ?>
<?php include('AdminHome.php');
include('../db.php');
 ?>
<?php
if(isset($_GET['tax_id']))
{
  $id=$_GET['tax_id'];
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="Acc_TaxForm_Handler.php" method="post">
      <div class="site-section">
        <div class="container">


              <!--<span class="subtitle-39293">My Works</span>-->
               <h3>Tax Form Acceptance</h3>

               <div><table border="1" class="table table-hover"><tr><th>FORM</th></tr>
             <?php
             $query=mysqli_query($con,"select * from tax_form where `Tax_ID`='$id'");
             echo "";
             if($query)
             {
               while ($row=mysqli_fetch_array($query)) {
                 ?>
                 <tr>

                     <td><b>Tax Payer ID  :</b><?php echo $row['Tax_ID']; ?></td></tr>
                     <tr><td><b>&nbsp&nbspUser ID :</b><?php echo $row['User_ID']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspTax Payer Name:</b><?php echo $row['Payer_Name']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspPAN:</b><?php echo $row['PAN']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspAddress:</b><?php echo $row['Address']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspPayer Name:</b><?php echo $row['Payer_Name']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspCity:</b><?php echo $row['City']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspState:</b><?php echo $row['State']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspPIN:</b><?php echo $row['PIN']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspContact Number:</b><?php echo $row['Contact_Number']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspEmail:</b><?php echo $row['Email']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspFrom Date:</b><?php echo $row['F_Date']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspTo Date:</b><?php echo $row['T_Date']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspFixed Income:</b><?php echo $row['F_Income']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspOther Income:</b><?php echo $row['O_Income']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspNo Resident:</b><?php echo $row['No_Res']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspName:</b><?php echo $row['Name']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspFather Name:</b><?php echo $row['F_Name']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspDesignation:</b><?php echo $row['Work']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspAmout in Numbers:</b><?php echo $row['N_Rupees']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspAmount in Words:</b><?php echo $row['W_Rupees']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspReferral:</b><?php echo $row['Referral']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspDate:</b><?php echo $row['Date']; ?></td><tr>
                    <tr><td><b>&nbsp&nbspPlace:</b><?php echo $row['Place']; ?></td><tr>
                    <tr>
                      <td> <b>&nbsp&nbspStatus:&nbsp&nbsp<?php echo $row['Status']; echo "By Accountant" ?></b> </td>
                    </tr>



                      <tr>
                     <td>
                       <select class="form-control" name="status" id="status">
                         <option value="Accepted">Accept</option>
                         <option value="Rejected">Reject</option>
                       </select>
                    </td></tr>
                    <tr>
                      <td> <input type="submit" name="Move"  class="btn btn-primary"  value="Move File"> </td>
                    </tr>


                 <?php
              $_SESSION['tax_id']=$row['Tax_ID'];
               //  $_SESSION['reg']=$row['Reg_No'];
                 //$_SESSION['email']=$row['Email'];
               //  $_SESSION['event']=$row['Event_Name'];
               }
               echo "</table></div>";
             }
              ?>


            </div>
          </div>

          <div id="posts" class="row no-gutter">

           </div>

    </div>
    </div>
    </form>
  </body>
</html>
