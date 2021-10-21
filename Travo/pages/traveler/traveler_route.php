<?php
  session_start();
  if(isset($_SESSION['username'])) {
    include '../../db/db_connection.php';
    $temp = $_SESSION['username'];
    $sqlForSession = "SELECT travelerID FROM travelers WHERE email = '$temp'";
    $resultForSession = mysqli_query($con, $sqlForSession);
    if (mysqli_num_rows($resultForSession) === 1) {
 ?>
<html>
    <head>
      <title>ROUTE</title>
        <style> <?php include '../../css/traveler/traveler_trip_details.css'; ?> </style>
        <style> <?php include '../../css/traveler/traveler_repeating_css.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../images/icons/favicon.ico">
    </head>
    <body>
        <section class="uppersection">
        <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
        <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
        <script type="text/javascript" src="../../repeatable_contents/nav_bar_traveler.js"></script>
        <br>

        <div class="trip">
                <div class="tripmenu"><a class="link" href="traveler_trip_details.php">TRIP</a></div>
                <div class="tripmenu"><a class="link" href="traveler_budget.php">BUDGET</div>
                <div class="tripmenu"><a class="link" href="traveler_route.php">ROUTE</a></div>
        </div>
        <br>
        <div class="content">
        <div class="container">
            <div class="details">
              <br>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7936.595061707961!2d80.5334359!3d5.953681200000001!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1629276519410!5m2!1sen!2slk" width="1000" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <form method="post" id="payForm" name="payForm" class="payForm" action="https://sandbox.payhere.lk/pay/checkout">   
            <input type="text" name="merchant_id" value="1218929">    <!-- Replace your Merchant ID -->
            <input type="text" name="return_url" value="http://localhost//Travo.lk/Travo/pages/traveler/traveler_trip_to_go.php">
            <input type="text" name="cancel_url" value="https://localhost//Travo.lk/Travo.lk/Travo/pages/traveler/traveler_budget.php">
            <input type="text" name="notify_url" value="https://localhost//Travo.lk/Travo.lk/Travo/php/traveler/traveler_payment.php">  
            <input type="text" name="order_id" value="1">
            <input type="text" name="items" value="Trip"><br>
            <input type="text" name="currency" value="LKR">
            <input type="text" name="amount" value="1000">  
            <input type="text" name="first_name" value="Saman">
            <input type="text" name="last_name" value="Perera"><br>
            <input type="text" name="email" value="samanp@gmail.com">
            <input type="text" name="phone" value="0771234567"><br>
            <input type="text" name="address" value="No.1, Galle Road">
            <input type="text" name="city" value="Colombo">
            <input type="text" name="country" value="Sri Lanka"><br><br>  
        </form> 

        <div class="buttons">
            <button class="button"  id="savebtn" onclick="window.location.href='../../pages/traveler/traveler_trip_to_go.php'">SAVE</button>
            <button class="button" form="payForm" id="paybtn">PAY NOW</button>
        </div>
        </div>
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
