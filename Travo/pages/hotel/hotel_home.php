<?php
  session_start();
  if(isset($_SESSION['username'])) {
    include '../../db/db_connection.php';
    $temp = $_SESSION['username'];
    $sqlForSession = "SELECT hotelID FROM hotels WHERE email = '$temp'";
    $resultForSession = mysqli_query($con, $sqlForSession);
    if (mysqli_num_rows($resultForSession) === 1) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style> <?php include '../../css/hotel/hotel_home.css'; ?> </style>
    </script>
  </head>
  <body>

    <section class = "home-watermark_and_started-section">
      <?php include '../../repeatable_contents/nav_bar_hotel.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_hotel.css'; ?>  </style>
      <script type="text/javascript" src="../../repeatable_contents/nav_bar_hotel.js"></script>
      <br>
      <p class = "watermark">TRAVO.lk</p><br>
      </div>
    </section>

<!--__________________about_us________________-->
    <section id="about_us-section">
      <?php include '../../repeatable_contents/about_us.php';?>
      <style> <?php include '../../repeatable_contents/about_us.css'; ?>  </style>
      <br>
    </section>
<!--__________________END about_us________________-->

    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>


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
