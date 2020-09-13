<?php session_start(); ?>
<?php
if(isset($_SESSION['user']))
{
  global $user;
  $user=$_SESSION['user'];
  //echo $user;
}
?>
<?php include('Header.html'); ?>
<!doctype html>
<html lang="en">

  <head>
    <title>IncomeTax Process </title>
<style media="screen">
.div {

padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border: none;
border-bottom: 2px solid black;
}
</style>
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<form action="TaxForm_Handler.php" method="post">
        <div class="site-section">
          <div class="container">

            <div class="row mb-5 ">
              <div class="col-md-9 text-center mx-auto">
                <!--<span class="subtitle-39293">My Works</span>-->

                <table style="" class="table table-hover" width="500">
                  <tr>
                    <td>User ID</td>
                    <td> <input type="text" name="txtuid" class="form-control" value="<?PHP if(isset($_SESSION['user'])){echo $_SESSION['user'];}?>"/> </td>
                  </tr>

                  <tr>
                    <td>TaxPayer Name</td>
                    <td> <input type="text" name="txtname" required class="form-control" value=""> </td>
                  </tr>
                  <tr>
                    <td>PAN Card</td>
                    <td> <input type="text" name="txtpan" required pattern="[A-Z0-9A-Z]{10}" title="Example:ADSTG000PH" class="form-control" value=""> </td>
                  </tr>

                  <tr>
                    <td>Address</td>
                    <td> <input type="text" name="txtaddr" class="form-control" value=""> </td>
                  </tr>
                  <tr>
                    <td>City</td>
                    <td> <input type="text" name="txtcity" required class="form-control" value=""> </td>
                  </tr>

                  <tr>
                    <td>State</td>
                    <td> <input type="text" name="txtstate" required class="form-control" value=""> </td>
                  </tr>
                  <tr>
                    <td>PIN Code</td>
                    <td> <input type="text" name="txtpin" required pattern="[0-9]{6}" class="form-control" value=""> </td>
                  </tr>

                  <tr>
                    <td>Contact Number</td>
                    <td> <input type="text" name="txtcnum" required pattern="[0-9]{10}" title="Enter Your Phone Number" class="form-control" value=""> </td>
                  </tr>
                  <tr>
                    <td>Emai -ID</td>
                    <td> <input type="text" name="txtemail" required class="form-control" value="<?PHP if(isset($_SESSION['user'])){echo $_SESSION['user'];}?>"> </td>
                  </tr>
                  <tr>
                    <td>From Date & To Date</td>
                    <td> <input type="date" class="form-control" name="txtfdate" value=""> </td>
                    <td> <input type="date" class="form-control" name="txttdate" value=""> </td>

                  </tr>
                  <tr>
                    <td> Fixed Income </td>
                    <td>  <input type="text" class="form-control" required pattern="[0-9]{5,}" name="txtfincome" value=""> </td>
                  </tr>
                  <tr>
                    <td> Other Income</td>
                    <td>  <input type="text" class="form-control" required pattern="[0-9]{5,}" name="txtoincome" value=""> </td>
                  </tr>
                  <tr>
                    <td>No of Residents </td>
                    <td> <input type="text" class="form-control" required  name="txtnores" value=""> </td>
                  </tr>

                </table>

                  <div>I,&nbsp&nbsp<input type="text" class="div" id="" required  name="txtname">son/daughter of <input type="text" required class="div" id="" name="txtfm">Working in the capacity of<input type="text" class="div" id="" name="txtwork">
              designation do hereby certify that a sum of Rs<input type="text" required pattern="[0-9]{5,}" class="div" id="" name="txtrup">Rs<input type="text" required class="div" id="" name="txtwrupee">(in words) has been deducted and deposited to the credit of the central Goverment.
              I further certify that information given above is true,complete correct and is based on the books of amount,TDS deposited and other available records?.</div>
                <br><br>
                <div class="">
                  <table class="table" width="500">
                    <tr>
                      <td>Name of the person Submiting this Referral</td>
                      <td> <input type="text"  name="txtref" required class="div" value=""> </td>
                    </tr>
                    <tr>
                      <td>Date</td>
                      <td> <input type="date" name="txtcdate" required class="div" value=""> </td>
                    </tr>
                    <tr>
                      <td>Place</td>
                      <td> <input type="text" name="txtplace" required class="div" value=""> </td>
                    </tr>
                  </table>
                </div>
              <div class="">
                <input type="submit" name="bt_taxform" class="btn btn-primary" value="Submit">
              </div>
                 	</div>



            <div id="posts" class="row no-gutter">

             </div>

     </div>
    </div>

</form>


    </body>

    </html>
