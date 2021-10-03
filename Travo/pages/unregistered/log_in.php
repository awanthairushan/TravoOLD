<?php
session_start();
if(isset($_SESSION['username'])) {
  session_unset();
  session_destroy();
  header("location: ../../pages/unregistered/log_in.php");
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
    <div class="box-log_in">
      <br>
      <div class="border-img-log_in">
          <img class="img-log_in"src="../../images/icons/log_in.png" alt="SIGN UP">
      </div>
      <div class="description-log_in">
        <form class="" id="log_in_form" action="../../php/unregistered/end-log_in.php" method="post">
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
        <h3><button id="forgot_pw_btn">Forgot Password...?</button></h3>
        <h3><a  href="../../pages/unregistered/sign_up.php">New to Travo.lk...?</a></h3>
      </div>
<!-- ...........................forgot password modal box................................. -->
    </div>
    <div class="forgotPw_modal">
      <div class="forgotPw_modal_box">
            <h3>Forgot Password</h3>
            <p>Send OTP to Email</p>
            <form class="" action="index.html" method="post">
              <div class="username_div_fogot_pw">
                <img class="img-username-div-log_in"src="../../images/icons/user.png" alt="">
                <input class="text-log_in" type="text" name="usernamefogotpw" id="usernamefogotpw" placeholder="Username...">
              </div>
            </form>
            <button type="button" name="otp_send_btn" class="otp_send_btn" id="otp_send_btn">SEND OTP</button>
      </div>
      <div class="otp_modal_box">
            <h3>Forgot Password</h3>
            <p>OTP is sent to your Email</p>
            <form class="" action="index.html" method="post">
              <div class="username_div_fogot_pw">
                <input class="text_otp" type="number" name="text_otp" id="text_otp" placeholder="enter your OTP...">
              </div>
            </form>
            <button type="button" name="otp_verify_btn" class="otp_verify_btn" id="otp_verify_btn">VERIFY</button>
      </div>
      </div>

    <script type="text/javascript" src="../../script/unregistered/log_in.js"></script>

    <!-- ...........................end of forgot password modal box................................. --> -->

    </section>
  </body>
</html>
<?php } ?>
