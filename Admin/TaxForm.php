<?php include('AdminHome.php') ?>

<?php
include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="TaxPayer.php" method="post">
      <div class="site-section">
        <div class="container">


              <!--<span class="subtitle-39293">My Works</span>-->
               <h3> Verify TaxPayerForm</h3>
               <div><table border="1" class="table table-hover"><tr><th>Tax ID</th><th>Payer UserID</th><th>Status</th></tr>
             <?php
              $s="Forwarded";
             $query=mysqli_query($con,"select * from tax_form where `Status`='$s'");
             echo "";
             if($query)
             {
               while ($row=mysqli_fetch_array($query)) {
                 ?>
                 <tr>
                     <td><?php echo $row['Tax_ID']; ?></td>
                     <td><?php echo $row['User_ID']; ?></td>
                     <?php echo $row['Status']; ?></td>

                    <td> <a style="text-decoration:none" href="Acc_TaxForm.php?tax_id=<?php echo $row['Tax_ID']; ?>"><?php echo $row['Status'] ?></a> </td>
                  <!-- <td> <a style="text-decoration:none" href="Delete.php?del=<?php echo $row['P_ID']; ?>">Delete</a> </td>-->
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
