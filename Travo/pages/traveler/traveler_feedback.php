<?php
  session_start();
  if(isset($_SESSION['username'])) {
 ?>
<html>
    <head>
        <style> <?php include '../../css/traveler/traveler_feedback.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section class="uppersection">
            <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
            <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
            <br>
            <div class="content">
                <div class="container">
                <div class="details">
                    <div class="heading">LEAVE YOUR LOVING RESPONSE !</div>
                    <div class="feedback">
                        <form>
                            <textarea class="response"></textarea>
                            <input type="image" src="../../images/icons/send.png" alt="Submit" class="Submit">
                        </form>
                    </div>
                </div>
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
