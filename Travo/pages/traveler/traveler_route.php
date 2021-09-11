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
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7936.595061707961!2d80.5334359!3d5.953681200000001!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1629276519410!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div class="buttons">
            <button id="savebtn">SAVE</button>
            <button  id="paybtn">PAY NOW</button>
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
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
