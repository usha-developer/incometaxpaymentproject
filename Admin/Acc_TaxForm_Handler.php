<?php
include('../db.php');
session_start();
 if(isset($_SESSION['tax_id']))
 {
   global $id;
   $id=$_SESSION['tax_id'];
 }

if(isset($_POST['Move']))
{
  global $id;
    $status=$_POST['status'];
    $query="update tax_form set `Status`='$status' where `Tax_ID`='$id'";

    if(mysqli_query($con,$query))
    {
      echo "<script>alert('Status Updated Successfully!!!')</script>";

    }
}
  ?>
