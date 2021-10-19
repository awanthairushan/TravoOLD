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
        <style> <?php include '../../css/traveler/traveler_trip_to_go.css'; ?> </style>
        <style> <?php include '../../css/traveler/traveler_repeating_css.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section class="uppersection">
            <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
            <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
            <script type="text/javascript" src="../../repeatable_contents/nav_bar_traveler.js"></script>

            <div class="delete_trip_modal">
              <div class="deleteTrip_confirm_box">
                    <h3>Delete Trip</h3>
                    <hr>
                    <p>There is no recovery option. Are you sure you want to delete this trip ?</p>
                    <hr>
                    <button type="button" name="deleteTrip_confirm_btn" class="deletetrip_confirm_btn" id="deleteTrip_confirm_btn">DELETE TRIP</button>
                    <button type="button" name="deleteTrip_cancel_btn" class="deleteTrip_cancel_btn" id="deleteTrip_cancel_btn">CANCEL</button>
              </div>
              </div>

            <div class="content">
                <div class="trips">
                <div class="slide trip1">
                    <div class="row1">
                        <div class="prev" onclick="plusSlides(-1)"></div>
                        <div class="topic">TRIP TO GO</div>
                        <div class="next" onclick="plusSlides(1)"></div>
                    </div>
                    <div class="cols2">
                        <div class="tripdetail t1"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'" id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t2"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'" id="selecttrip">READ MORE</button></div>

                        <div class="tripdetail t3"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'" id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t4"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'" id="selecttrip">READ MORE</button></div>
                    </div>
                </div>

                <div class="slide trip2">
                    <div class="row1">
                        <div class="prev" onclick="plusSlides(-1)"></div>
                        <div class="topic">SAVED</div>
                        <div class="next" onclick="plusSlides(1)"></div>
                    </div>
                    <div class="cols2">
                        <div class="tripdetail t1"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'" id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t2"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'" id="selecttrip">READ MORE</button></div>

                        <div class="tripdetail t3"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'"id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t4"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'"id="selecttrip">READ MORE</button></div>
                    </div>
                </div>

                <div class="slide trip3">
                    <div class="row1">
                        <div class="prev" onclick="plusSlides(-1)"></div>
                        <div class="topic">COMPLETED</div>
                        <div class="next" onclick="plusSlides(1)"></div>
                    </div>
                    <div class="cols2">
                        <div class="tripdetail t1"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'" id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t2"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'" id="selecttrip">READ MORE</button></div>

                        <div class="tripdetail t3"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'" id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t4"><img src="../../images/icons/delete.png" class="delete_img"><dl class=""> <dt>Destination 1</dt> <dt>Destination 2</dt> <dt>Destination 3</dt> <dt>Date</dt></dl><button onclick="window.location.href='../../pages/traveler/traveler_budget.php'" id="selecttrip">READ MORE</button></div>
                    </div>
                </div>

            </div>
          </div>
              <script type="text/javascript" src="../../script/traveler/traveler_trip_to_go.js"></script>
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
