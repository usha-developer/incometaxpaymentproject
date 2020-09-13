<?php include('AdminHome.php');
include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
      <div class="site-section">
        <div class="container">


                  <div><table border="1" class="table table-hover"><tr><th>Register ID</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Email</th><th>Password</th><th>DOB</th><th>Permanent Address</th><th>Communication Address</th><th>Phone number</th><th>Register Type</th></tr>
                <?php
                $query=mysqli_query($con,"select * from Register");
                echo "";
                if($query)
                {
                  while ($row=mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $row['Reg_ID']; ?></td>
                        <td><?php echo $row['F_Name']; ?></td>
                        <td><?php echo $row['L_Name']; ?></td>
                        <td><?php echo $row['Gender']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Password']; ?></td>
                        <td><?php echo $row['Dob']; ?></td>
                        <td><?php echo $row['Pre_Addr'] ?></td>
                        <td><?php echo $row['Comm_Addr'] ?></td>
                        <td><?php echo $row['Phone_Number'] ?></td>
                        <td><?php echo $row['Reg_Type']; ?></td>


                      <!-- <td> <a style="text-decoration:none" href="Accept.php?select=<?php echo $row['Apply_ID']; ?>">Select</a> </td>
                      <td> <a style="text-decoration:none" href="Delete.php?del=<?php echo $row['P_ID']; ?>">Delete</a> </td>-->
                    </tr>
                    <?php
                //    $_SESSION['sname']=$row['Stud_Name'];
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
