<?php
include('../db.php');
 ?>
 <?php
if(isset($_POST['bt_taxform']))
{
  $uid=$_POST['txtuid'];
  $uname=$_POST['txtname'];
  $pan=$_POST['txtpan'];
  $addr=$_POST['txtaddr'];
  $city=$_POST['txtcity'];
  $state=$_POST['txtstate'];
  $pin=$_POST['txtpin'];
  $cnum=$_POST['txtcnum'];
  $email=$_POST['txtemail'];
  $fdate=$_POST['txtfdate'];
  $tdate=$_POST['txttdate'];
  $fincome=$_POST['txtfincome'];
  $tincome=$_POST['txtoincome'];
  $nores=$_POST['txtnores'];
//  $name=$_POST['txtname'];
  $fm=$_POST['txtfm'];
  $work=$_POST['txtwork'];
  $rup=$_POST['txtrup'];
  $wrup=$_POST['txtwrupee'];
  $ref=$_POST['txtref'];
  $cdate=$_POST['txtcdate'];
  $place=$_POST['txtplace'];

  $query="insert into Tax_Form(`User_ID`,`Payer_Name`,`PAN`,`Address`,`City`,`State`,`PIN`,`Contact_Number`,`Email`,`F_Date`,`T_Date`,`F_Income`,`O_Income`,`No_Res`,`Name`,`F_Name`,`Work`,`N_Rupees`,`W_Rupees`,`Referral`,`Date`,`Place`,`Status`) values('$uid','$uname','$pan','$addr','$city','$state','$pin','$cnum','$email','$fdate','$tdate','$fincome','$tincome','$nores','$uname','$fm','$work','$rup','$wrup','$ref','$cdate','$place','Pending')";

  if(mysqli_query($con,$query))
  {
    echo "<script>alert('Registered Successfully!!!')</script>";
    header('location:Tax_Form.php');
  }
}
  ?>
