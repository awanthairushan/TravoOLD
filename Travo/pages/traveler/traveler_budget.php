<?php
  session_start();
  if(isset($_SESSION['username'])) {
 ?>
<html>
    <head>
        <style> <?php include '../../css/traveler/traveler_trip_details.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section class="uppersection">
        <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
        <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
        <br>
        <div class="content">
        <div class="trip">
            <div class="tripmenu"><a class="link" href="traveler_trip_details.php">TRIP</a></div>
            <div class="tripmenu"><a class="link" href="traveler_budget.php">BUDGET</div>
            <div class="tripmenu"><a class="link" href="traveler_route.php">ROUTE</a></div>
        </div>

        <div class="container">
            <div class="details">
                <table class="main">
                    <tr>
                        <td>Accomodaions</td>
                        <td>=</td>
                        <td>RS XXXX.XX</td>
                    </tr>
                    <tr>
                        <td>Meals</td>
                        <td>=</td>
                        <td>RS XXXX.XX</td>
                    </tr>
                    <tr>
                        <td>Transportation</td>
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
            <button id="savebtn">SAVE</button>
            <button  id="paybtn">PAY NOW</button>
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
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
