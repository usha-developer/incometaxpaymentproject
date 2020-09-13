<?php
session_start();
include('db.php');
?>

<?php
if(isset($_POST['Bt_Login']))
{
  $uname=$_POST['txtuser'];
  $pass=$_POST['txtpass'];
  $reg_type=$_POST['login'];

  $q=mysqli_query($con,"select Reg_Type from Register where `Email`='$uname'");
    while ($row=mysqli_fetch_array($q)) {
      $type=$row['Reg_Type'];
      //echo "$type";
      if($type=="Admin")
      {
    $query="select * from Register where `Email`='$uname' and `Password`='$pass' and `Reg_Type`='$type' ";
    $var=mysqli_query($con,$query);

    while (mysqli_fetch_array($var)) {
      $_SESSION['user']=$_POST['txtuser'];
      echo "<script>alert('Login Successfully!!!')</script>";
      header('Location:Admin/AdminHome.php');
    }
  }
    else if($type=="Accountant")
    {
      $query="select * from Register where `Email`='$uname' and `Password`='$pass' and `Reg_Type`='$type' ";
      $var=mysqli_query($con,$query);

      while (mysqli_fetch_array($var)) {
      $_SESSION['user']=$_POST['txtuser'];
      echo "<script>alert('Login Successfully!!!')</script>";
      header('Location:Accountant/HomeAcc.php');
      }
    }
  else if($type=="TaxPayer")
    {
      $query="select * from Register where `Email`='$uname' and `Password`='$pass' and `Reg_Type`='$type' ";
      $var=mysqli_query($con,$query);

      while (mysqli_fetch_array($var)) {
      $_SESSION['user']=$_POST['txtuser'];
      echo "<script>alert('Login Successfully!!!')</script>";
      header('Location:TaxPayer/PayerHome.php');
    }
  }
  else {
    header('location:Login.php');
  }

  }
}
 ?>
