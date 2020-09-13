<?php session_start(); ?>
<?php include('Header.html'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="LoginHandler.php" method="POST">

    <div class="site-section">
      <div class="container">

        <div class="row mb-5 ">
          <div class="col-md-5 text-center mx-auto">
            <!--<span class="subtitle-39293">My Works</span>-->
             <h1> LOGIN HERE</h1>
             <div><p>User Name</p></div>
             <div> <input type="text" class="form-control" required name="txtuser" value=""> </div>
             <div><p>Password</p></div>
             <div> <input type="password" required class="form-control" name="txtpass" value=""> </div>
             <div><p>Login Type</p></div>
             <div> <select class="form-control" name="login">
               <option value="Admin">ADMIN</option>
               <option value="Accountant">ACCOUNTANT</option>
               <option value="TaxPayer">TAX PAYER</option>
             </select> </div>
             <div><p></p></div>
             <div> <input type="submit" class="btn btn-outline-primary" name="Bt_Login" value="LOGIN"> </div>
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
