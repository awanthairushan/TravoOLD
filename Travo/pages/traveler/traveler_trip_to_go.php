<?php
  session_start();
  if(isset($_SESSION['username'])) {
 ?>
<html>
    <head>
        <style> <?php include '../../css/traveler/traveler_trip_to_go.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../script/traveler/traveler_hotels_names_popup.js"></script>
    </head>
    <body>
        <section class="uppersection">
            <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
            <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
            <br>
            <div class="content">
                <div class="trips">
                <div class="slide trip1">
                    <div class="row1">
                        <div class="prev" onclick="plusSlides(-1)"></div>
                        <div class="topic">TRIP TO GO</div>
                        <div class="next" onclick="plusSlides(1)"></div>
                    </div>
                    <div class="cols2">
                        <div class="tripdetail t1"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip1';" id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t2"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip2';" id="selecttrip">READ MORE</button></div>

                        <div class="tripdetail t3"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip3';" id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t4"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip4';" id="selecttrip">READ MORE</button></div>
                    </div>
                </div>

                <div class="slide trip2">
                    <div class="row1">
                        <div class="prev" onclick="plusSlides(-1)"></div>
                        <div class="topic">SAVED</div>
                        <div class="next" onclick="plusSlides(1)"></div>
                    </div>
                    <div class="cols2">
                        <div class="tripdetail t1"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip1';" id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t2"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip2';" id="selecttrip">READ MORE</button></div>

                        <div class="tripdetail t3"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip3';" id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t4"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip4';" id="selecttrip">READ MORE</button></div>
                    </div>
                </div>

                <div class="slide trip3">
                    <div class="row1">
                        <div class="prev" onclick="plusSlides(-1)"></div>
                        <div class="topic">COMPLETED</div>
                        <div class="next" onclick="plusSlides(1)"></div>
                    </div>
                    <div class="cols2">
                        <div class="tripdetail t1"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip1';" id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t2"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip2';" id="selecttrip">READ MORE</button></div>

                        <div class="tripdetail t3"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip3';" id="selecttrip">READ MORE</button></div>
                        <div class="tripdetail t4"><img src="../../images/icons/delete.png" onclick="removetrip" class="delete">Destination 1<br/>Destination 2<br/>Destination 3<br/> Date<br/><button onclick="window.location.href='#trip4';" id="selecttrip">READ MORE</button></div>
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
