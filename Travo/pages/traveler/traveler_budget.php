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
                        <td>Accomodaions</td>
                        <td>=</td>
                        <td>RS XXXX.XX</td>
                    </tr>
                    <tr>
                        <td>hotel 1</td>
                        <td>=</td>
                        <td>RS XXXX.XX</td>
                    </tr>
                    <tr>
                        <td>hotel 2</td>
                        <td>=</td>
                        <td>RS XXXX.XX</td>
                    </tr>
                    <tr>
                        <td>Service Charges</td>
                        <td>=</td>
                        <td>RS XXXX.XX</td>
                    </tr>
                    <tr>
                        <td>Ticket fees</td>
                        <td>=</td>
                        <td>RS XXXX.XX</td>
                    </tr>
                    <tr>
                        <th class="row">Total</th>
                        <th class="row">=</th>
                        <th class="row">RS XXXX.XX</th>
                    </tr>
                </table>
            </div>
        </div>

        <div class="buttons">
            <button class="button" id="savebtn" onclick="window.location.href='../../pages/traveler/traveler_trip_to_go.php'">SAVE</button>
            <button  class="button" id="paybtn">PAY NOW</button>
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
