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
      <title>VEHICLES</title>
      <link rel="icon" href="../../images/icons/favicon.ico">
        <style> <?php include '../../css/traveler/traveler_vehicle.css'; ?> </style>
        <style> <?php include '../../css/traveler/traveler_repeating_css.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include '../../repeatable_contents/font.php'; ?>
    </head>
    <body>
        <section class="uppersection">
            <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
            <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
            <script type="text/javascript" src="../../repeatable_contents/nav_bar_traveler.js"></script>
            <div class="pageheading">VEHICLES</div>
            <button id="filterbtn" class="filterbtn">ADD FILTER</button>
            <div class="content">
                <form class="filter_form">
                  <table class="filter_table">
                    <tr>
                      <td>
                        <select class="type">
                            <option value="all">All types</option>
                            <option value="Van">Van</option>
                            <option value="Car">Car</option>
                            <option value="Bus">Bus</option>
                        </select>
                      </td>
                      <td>
                        <select class="seats">
                            <option value="">Any Seats</option>
                            <option value="">No</option>
                            <option value="">No</option>
                            <option value="">No</option>
                        </select>
                      </td>
                      <td>
                        <select class="area">
                            <option value="all">Sri Lanka</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Kilinochchi">Kilinochchi</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Mannar">Mannar</option>
                            <option value="Matale">Matale</option>
                            <option value="Matara">Matara</option>
                            <option value="Monaragala">Monaragala</option>
                            <option value="Mullaitivu">Mullaitivu</option>
                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Puttalam">Puttalam</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Vavuniya">Vavuniya</option>
                        </select>
                      </td>
                      <td>
                        <select class="AC">
                            <option value="Any">A/C Any</option>
                            <option value="A/C">A/C</option>
                            <option value="Non A/C">Non A/C</option>
                        </select>
                      </td>
                    </tr>
                  </table>
                  <button type="submit" name="filtersubmitbtn"  class="filtersubmitbtn">ADD</button>
            </form>
            <div class="vehicledetails_div">
              <!-- <table class="vehicledetails"> -->
                  <!-- vehicle 1 -->
                  <!-- <tr>
                      <th colspan="5" class="vehicleType">Toyota Prius 4th Generation</th>
                  </tr>
                  <tr class="detail">
                      <td class="trow">Car<br/>With A/C<br/>5 seats<br/>with/without Driver<br/>LKR.50 per km</td>
                      <td class="trow"><img class="vimg" src="../../images/Sample_images/for_vehicles/car2.jpg"></td>
                      <td class="trow">Mr.Kamal Ranasinghe<br/>kamal@gmail.com<br/>0710000000/0332200000<br/>Gampaha<br/>LKR.1000.00 for a driver</td>
                  </tr>
              </table> -->
              <div class="vtable">
                <!-- vehicle 1 -->
                <div class="vdetails">Toyota Prius 4th Generation</div>
                <div class="vdetails">
                  <dl>
                    <dt class="vspecs">Car</dt>
                    <dt class="vspecs">With A/C</dt>
                    <dt class="vspecs">5 seats</dt>
                    <dt class="vspecs">with/without Driver</dt>
                    <dt class="vspecs">LKR.50 per km</dt>
                  </dl>
                </div>
                <div class="vdetails"><img class="vimg" src="../../images/Sample_images/for_vehicles/car2.jpg"></div>
                <div class="vdetails">
                  <dl>
                    <dt class="vspecs">Mr.Kamal Ranasinghe</dt>
                    <dt class="vspecs">kamal@gmail.com</dt>
                    <dt class="vspecs">0710000000/0332200000</dt>
                    <dt class="vspecs">Gampaha</dt>
                    <dt class="vspecs">LKR.1000.00 for a driver</dt>
                  </dl>
                </div>
              </div>

              <div class="vtable">
                <!-- vehicle 2 -->
                <div class="vdetails">Toyota Prius 4th Generation</div>
                <div class="vdetails">
                  <dl>
                    <dt class="vspecs">Car</dt>
                    <dt class="vspecs">With A/C</dt>
                    <dt class="vspecs">5 seats</dt>
                    <dt class="vspecs">with/without Driver</dt>
                    <dt class="vspecs">LKR.50 per km</dt>
                  </dl>
                </div>
                <div class="vdetails"><img class="vimg" src="../../images/Sample_images/for_vehicles/car2.jpg"></div>
                <div class="vdetails">
                  <dl>
                    <dt class="vspecs">Mr.Kamal Ranasinghe</dt>
                    <dt class="vspecs">kamal@gmail.com</dt>
                    <dt class="vspecs">0710000000/0332200000</dt>
                    <dt class="vspecs">Gampaha</dt>
                    <dt class="vspecs">LKR.1000.00 for a driver</dt>
                  </dl>
                </div>
              </div>

              <div class="vtable">
                <!-- vehicle 2 -->
                <div class="vdetails">Toyota Prius 4th Generation</div>
                <div class="vdetails">
                  <dl>
                    <dt class="vspecs">Car</dt>
                    <dt class="vspecs">With A/C</dt>
                    <dt class="vspecs">5 seats</dt>
                    <dt class="vspecs">with/without Driver</dt>
                    <dt class="vspecs">LKR.50 per km</dt>
                  </dl>
                </div>
                <div class="vdetails"><img class="vimg" src="../../images/Sample_images/for_vehicles/car2.jpg"></div>
                <div class="vdetails">
                  <dl>
                    <dt class="vspecs">Mr.Kamal Ranasinghe</dt>
                    <dt class="vspecs">kamal@gmail.com</dt>
                    <dt class="vspecs">0710000000/0332200000</dt>
                    <dt class="vspecs">Gampaha</dt>
                    <dt class="vspecs">LKR.1000.00 for a driver</dt>
                  </dl>
                </div>
              </div>
            </div>
        </section>
        <script type="text/javascript" src="../../script/traveler/traveler_vehicle.js"></script>

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
