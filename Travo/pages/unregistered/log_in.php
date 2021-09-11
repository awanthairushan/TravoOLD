<?php
session_start();
if(isset($_SESSION['username'])) {
  session_unset();
  session_destroy();
  header("location: ../../index.html");
  exit();
} else {
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style> <?php include '../../css/unregistered/log_in.css'; ?> </style>
  </head>
  <body>
    <section class="log_in">
      <?php include '../../repeatable_contents/nav_bar.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar.css'; ?>  </style>
      <br>
    <div class="box-log_in">
      <br>
      <div class="border-img-log_in">
          <img class="img-log_in"src="../../images/icons/log_in.png" alt="SIGN UP">
      </div>
      <div class="description-log_in">
        <form class="" action="../../php/unregistered/end-log_in.php" method="post">
        <div class="username-div-log_in">
          <img class="img-username-div-log_in"src="../../images/icons/user.png" alt="">
          <input class="text-log_in" type="text" name="username" id="username" placeholder="Username...">
        </div>
        <div class="username-div-log_in">
          <img class="img-username-div-log_in"src="../../images/icons/password.png" alt="">
          <input class="text-log_in" type="password" name="password" id="password" placeholder="Password">
        </div>
        <?php
          if(isset($_GET['error'])) { ?>
            <p class = "error-log_in"><?php echo $_GET['error'];?></p>
          <?php }   ?>
        <input type="submit" value="LOG IN"><br>
        </form>
        <h3><a href="">Forgot Password...?</a></h3>
        <h3><a  href="../../pages/unregistered/sign_up.php">New to Travo.lk...?</a></h3>
      </div>

    </div>
    </section>
  </body>
</html>
<?php } ?>
