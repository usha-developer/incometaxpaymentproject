<?php include('Header.html'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form action="RegisterHandler.php" method="POST">
    <div class="site-section">
      <div class="container">

        <div class="row mb-5 ">
          <div class="col-md-5 text-center mx-auto">
            <!--<span class="subtitle-39293">My Works</span>-->
             <h1> REGISTRATION</h1>
             <div><p>First Name</p></div>
             <div> <input type="text" name="txtfname" required class="form-control" value=""> </div>
             <div><p>Last Name</p></div>
             <div> <input type="text" class="form-control" required name="txtlname" value=""> </div>
             <div><p>Gender</p></div>
             <div>
               <select class="form-control" name="Gender">
                 <option value="Female">Female</option>
                 <option value="Male">Male</option>

               </select>
              </div>
             <div><p>Email ID</p></div>
             <div> <input type="email" class="form-control" required name="txtemail" value=""> </div>
             <div><p>Password</p></div>
             <div> <input type="password" class="form-control" required name="txtpass" value=""> </div>
             <div><p>Date of Birth</p></div>
             <div> <input type="date" name="txtdob" class="form-control" value=""> </div>
             <div><p>Permanent Address</p></div>
             <div> <input type="text" name="txtpaddr" required class="form-control" value=""> </div>
             <div><p>Communication Address</p></div>
             <div> <input type="text" name="txtcomaddr" required class="form-control" value=""> </div>
             <div><p>Phone Number</p></div>
             <div> <input type="text" name="txtphone" required pattern="[0-9]{10}" class="form-control" value=""> </div>
             <div><p>Register Type</p></div>
             <div>
               <div> <select class="form-control" name="login">
                 <option value="Admin">ADMIN</option>
                 <option value="Accountant">ACCOUNTANT</option>
                 <option value="TaxPayer">TAX PAYER</option>
               </select> </div>
               <br>
               <div > <input type="submit"  class="form-control" name="Bt_Register" value="REGISTER"> </div><br>
              </div>
          </div>
        </div>

        <div id="posts" class="row no-gutter">

         </div>

 </div>
</div>

</form>
  </body>
</html>
<?php include('Footer.html'); ?>
