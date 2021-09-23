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
            <script type="text/javascript" src="../../repeatable_contents/nav_bar_traveler.js"></script>
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
                                <td>Date : </td>
                                <td>YYYY-MM-DD To YYYY-MM-DD</td>
                            </tr>
                            <tr>
                                <td>Number of Travelers : </td>
                                <td>Count.</td>
                            </tr>
                            <tr>
                                <td>Category : </td>
                                <td>Category</td>
                            </tr>
                            <tr>
                                <td>Mileage : </td>
                                <td></td>
                            </tr>
                        </table>

                        <table class="days" rules=none>
                            <tr>
                                <th class="trow"></th>
                                <th class="trow">Day 1</th>
                                <th class="trow">Day 2</th>
                                <th class="trow">Day 3</th>
                            </tr>
                            <tr>
                                <th class="row">Destination</th>
                                <td class="trow">Destination1</td>
                                <td class="trow">Destination2</td>
                                <td class="trow">Destination3</td>
                            </tr>
                            <tr>
                                <th class="row">Hotel</th>
                                <td class="trow">Hotel 1</td>
                                <td class="trow">Hotel 2</td>
                                <td class="trow">Hotel 3</td>
                            </tr>
                            <tr>
                                <th class="row">Sights</th>
                                <td class="trow">sight 1<br/>sight 2<br/>sight 3</td>
                                <td class="trow">sight 1<br/>sight 2<br/>sight 3</td>
                                <td class="trow">sight 1<br/>sight 2<br/>sight 3</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="buttons">
                    <button class="button" id="savebtn">SAVE</button>
                    <button class="button" id="paybtn">PAY NOW</button>
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
