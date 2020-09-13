<?php session_start(); ?>
<?php
if(isset($_SESSION['user']))
{
  $user=$_SESSION['user'];
  //echo $user;
}
?>
<?php include('Header.html'); ?>


        <div class="site-section">
          <div class="container">

            <div class="row mb-5 ">
              <div class="col-md-7 text-center mx-auto">
                <!--<span class="subtitle-39293">My Works</span>-->
                 <h1> WELCOME <p><?php if(isset($_SESSION['user'])){echo $user; }?></p></h1>


                 	</div>


            <div id="posts" class="row no-gutter">

             </div>

     </div>
    </div>


    <?php include('Footer.html'); ?>


    </body>

    </html>
