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
        <title>MY TRIPS</title>
        <link rel="icon" href="../../images/icons/favicon.ico">
        <style> <?php include '../../css/traveler/traveler_trip_details.css'; ?> </style>
        <style> <?php include '../../css/traveler/traveler_repeating_css.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <table class="main">
                    <tr>
                        <td>Hotel 1</td>
                        <td>=</td>
                        <td>RS 3500.00</td>
                    </tr>
                    <tr>
                        <td>Hotel 2</td>
                        <td>=</td>
                        <td>RS 4500.00</td>
                    </tr>
                    <tr>
                        <td>Hotel 2</td>
                        <td>=</td>
                        <td>RS 5000.00</td>
                    </tr>
                    <tr>
                        <th class="row">Accomodaions</th>
                        <th class="row">=</th>
                        <th class="row">RS 13000.00</th>
                    </tr>
                    <tr>
                        <td>Service Charges</td>
                        <td>=</td>
                        <td>RS 1000.00</td>
                    </tr>
                    <tr>
                        <td>Ticket fees</td>
                        <td>=</td>
                        <td>(RS 500.00)</td>
                    </tr>
                    <tr>
                        <th class="row">Total Budget</th>
                        <th class="row">=</th>
                        <th class="row">RS 14000.00</th>
                    </tr>
                </table>
            </div>
        </div>

        <form method="post" id="payForm" name="payForm" class="payForm" action="https://sandbox.payhere.lk/pay/checkout">   
            <input type="text" name="merchant_id" value="1218929">    <!-- Replace your Merchant ID -->
            <input type="text" name="return_url" value="http://localhost/Travo/pages/traveler/traveler_trip_to_go.php">
            <input type="text" name="cancel_url" value="https://localhost/Travo/pages/traveler/traveler_budget.php">
            <input type="text" name="notify_url" value="https://localhost/Travo/php/traveler/traveler_payment.php">  
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
            <button class="button" id="savebtn" onclick="window.location.href='../../pages/traveler/traveler_trip_to_go.php'">SAVE</button>
            <input  type="submit" form="payForm" class="button" id="paybtn" value="PAY NOW">
        </div>

        </div>
        </section>

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