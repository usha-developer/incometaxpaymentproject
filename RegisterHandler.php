<?php include('db.php'); ?>
<?php
if(isset($_POST['Bt_Register']))
{
  $fname=$_POST['txtfname'];
  $lname=$_POST['txtlname'];
  $gender=$_POST['Gender'];
  $email=$_POST['txtemail'];
  $pass=$_POST['txtpass'];
  $dob=$_POST['txtdob'];
  $paddr=$_POST['txtpaddr'];
  $comaddr=$_POST['txtcomaddr'];
  $phone=$_POST['txtphone'];
  $reg_type=$_POST['login'];

  $query="insert into register(`F_Name`,`L_Name`,`Gender`,`Email`,`Password`,`Dob`,`Pre_Addr`,`Comm_Addr`,`Phone_Number`,`Reg_Type`) values('$fname','$lname','$gender','$email','$pass','$dob','$paddr','$comaddr','$phone','$reg_type')";

  if(mysqli_query($con,$query))
  {
    echo "<script>alert('Registered Successfully!!!')</script>";
    header('location:Login.php');
  }
  else {
    echo "<script>alert('Try Again!!!')</script>";
  }
}
 ?>
