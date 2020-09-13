<?php
session_start();
include('../db.php');
 include('Header.html'); ?>
<?php if($_SESSION['user'])
{
  $user=$_SESSION['user'];
} ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="FeedBack.php" method="post">
  <div class="site-section">
    <div class="container">

      <div class="row mb-5 ">
        <div class="col-md-5 text-center mx-auto">
        <div><p>User Name</p></div>
        <div> <input type="text" class="form-control" name="txtuser" value="<?php if(isset($_SESSION['user'])){echo $user; } ?>"> </div>
        <div><p>FeedBack</p></div>
        <div> <input type="text" height="100"  name="txtfeed" class="form-control" value=""> </div>
        <div><p></p></div>
        <div> <input type="submit" name="FeedBack" value="Send FeedBack" class="btn btn-primary"> </div>
      </div>
    </div>
  </div>
</form>
  </body>
</html>
<?php include('Footer.html') ?>
<?php
if(isset($_POST['FeedBack']))
{
  $email=$_POST['txtuser'];
  $feedback=$_POST['txtfeed'];

  $query="insert into FeedBack(`Email`,`Feedback`) values('$email','$feedback')";

  if(mysqli_query($con,$query))
  {
    echo "<script>alert('FeedBack Sended!!!')</script>";
  }
}
 ?>
