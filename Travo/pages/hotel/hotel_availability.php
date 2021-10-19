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
<html lang="en">
    <head>
        <title>AVAILABILITY</title>
        <link rel="icon" href="../../images/icons/favicon.ico">
        <link rel="stylesheet" href="../../css/hotel/hotel_availability.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../script/hotel/hotel_availability.js"></script>
        <style> <?php include '../../css/hotel/hotel_repeating_css.css'; ?> </style>
        <link rel="icon" href="../../images/icons/favicon.ico">
    </head>
    <body>
    <section class="sign_up-traveler">
      <?php include '../../repeatable_contents/nav_bar_hotel.php';?>
      <style>
      <?php include '../../repeatable_contents/nav_bar_hotel.css';?>
      </style>
      <script type="text/javascript" src="../../repeatable_contents/nav_bar_hotel.js"></script>
      <br>
            <form>
                <table class="b">
                  <tr>
                    <td class="b" colspan="3" >  <div class="calendar"><input type="date" id="start"></div></td>

                    <td class="b" colspan="3" > <div class="calendar"><input type="date" id="end"></div> </td>
                  </tr>
</table>
           </form>
<br>
    <center>

        <form>

            <div class="bg">
                <div class="rooms">
                    <div class="slide">
                        <div class ="text1">Single Room</div>
                        <div class="roomtype r1">1 Person<br/><br/>Breakfast included<br/>Attached bathroom<br/><br/>LKR xxxx.00<br/>without Luxury facilities<br/><br/><b class="nos">Only 1 left !</b></div>
                        <div>
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                            <input type="number" id="number" value="0" />
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class ="text1">Double Room</div>
                        <div class="roomtype r2">1 Person<br/><br/>Breakfast included<br/>Attached bathroom<br/><br/>LKR xxxx.00<br/>without Luxury facilities<br/><br/><b class="nos">Only 1 left !</b></div>
                        <div>
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                            <input type="number" id="number" value="0" />
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class ="text1">Family Room</div>
                        <div class="roomtype r3">1 Person<br/><br/>Breakfast included<br/>Attached bathroom<br/><br/>LKR xxxx.00<br/>without Luxury facilities<br/><br/><b class="nos">Only 1 left !</b></div>
                        <div>
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                            <input type="number" id="number" value="0" />
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class ="text1">Massive Room</div>
                        <div class="roomtype r4">1 Person<br/><br/>Breakfast included<br/>Attached bathroom<br/><br/>LKR xxxx.00<br/>without Luxury facilities<br/><br/><b class="nos">Only 1 left !</b></div>
                        <div>
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                            <input type="number" id="number" value="0" />
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="confirm"><button id="confirmbtn">CONFIRM</button></div>
        </div>

</form></center>
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
