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


                  <div><table border="1" class="table table-hover"><tr><th>Feedback ID</th><th>User ID</th><th>FeedBack</th></tr>
                <?php
                $query=mysqli_query($con,"select * from FeedBack");
                echo "";
                if($query)
                {
                  while ($row=mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $row['F_ID']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Feedback']; ?></td>


                      <!-- <td> <a style="text-decoration:none" href="Accept.php?select=<?php// echo $row['Apply_ID']; ?>">Select</a> </td>
                      <td> <a style="text-decoration:none" href="Delete.php?del=<?php //echo $row['P_ID']; ?>">Delete</a> </td>-->
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
