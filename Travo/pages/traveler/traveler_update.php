<?php
  session_start();
  if(isset($_SESSION['username'])) {
    include '../../db/db_connection.php';
    $temp = $_SESSION['username'];
    $sqlForSession = "SELECT travelerID FROM travelers WHERE email = '$temp'";
    $resultForSession = mysqli_query($con, $sqlForSession);
    if (mysqli_num_rows($resultForSession) === 1) {
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style> <?php include '../../css/traveler/traveler_update.css'; ?> </style>
    <!-- defer indicate that script is executed after the document has been parsed -->
  </head>
  <body>
    <section class="sign_up-traveler">
      <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
      <script type="text/javascript" src="../../repeatable_contents/nav_bar_traveler.js"></script>
      <br>
    <div class="box-sign_up-traveler">
      <br>
      <form class="form-sign_up-traveler" id="form-sign_up-traveler" action="../../php/unregistered/traveler_sign_up.php" method="post">
      <br>
        <label for="name">Name</label>
        <input class="text-form-sign_up-traveler" type="text" name="name" id="name" value=""><br>
        <br>
        <label for="email">Email Address</label>
        <input class="text-form-sign_up-traveler" type="email" name="email" id="email" value=""  ><br>
        <br>
        <label for="contact">Contact Number</label>
        <input class="text-small-form-sign_up-traveler" type="number" name="contact2" id="contact2" value="" placeholder="contact 2">
        <input class="text-small-form-sign_up-traveler" type="number" name="contact1" id="contact1" value="" placeholder="contact 1"><br>
        <br>
        <label for="password">Password</label>
        <input class="text-small-form-sign_up-traveler" type="password" name="retype-password" id="retype-password" value="" placeholder=" Confirm password" >
        <input class="text-small-form-sign_up-traveler" type="password" name="password" id="password" value=""><br>
        <br>
      <label for="adress">Address</label>
      <input class="text-form-sign_up-traveler" type="text" name="address-line1" id="address-line1" placeholder="Line 1" value=""  ><br>
      <br>
      <input class="text-form-sign_up-traveler" type="text" name="address-line2" id="address-line2" placeholder="Line 2" value=""  ><br>
      <br>
      <input class="text-form-sign_up-traveler" type="text" name="city" id="city" placeholder="City" value=""  ><br>
      <br>

    </form>
    </div>
    <div class="buttons-sign_up-traveler">
      <input type="button" class="refreshbtn" value="REFRESH" onclick="window.location.reload();">
      <input type="submit" form="form-sign_up-traveler" class="submitbtn" value="UPDATE" name="submit" id="submitbtn">
    </div>
    </section>
    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>
    <script src="../../script/unregistered/sign_up-traveler.js"></script>
  </body>
</html>
<?php
  } else{
    echo '<script type="text/javascript">javascript:history.go(-1)</script>';
    exit();
  }
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
