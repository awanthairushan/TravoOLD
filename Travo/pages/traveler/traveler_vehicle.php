<?php
  session_start();
  if(isset($_SESSION['username'])) {
 ?>
<html>
    <head>
        <style> <?php include '../../css/traveler/traveler_vehicle.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section>
            <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
            <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
            <br>
            <div class="content">
                <form>
                <select class="type">
                    <option value="all">All types</option>
                    <option value="Van">Van</option>
                    <option value="Car">Car</option>
                    <option value="Bus">Bus</option>
                </select>
                <select class="seats">
                    <option value="">Any Seats</option>
                    <option value="">No</option>
                    <option value="">No</option>
                    <option value="">No</option>
                </select>
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
                <select class="AC">
                    <option value="Any">A/C Any</option>
                    <option value="A/C">A/C</option>
                    <option value="Non A/C">Non A/C</option>
                </select>
            </form>
            <table class="vehicledetails">
                <!-- vehicle 1 -->
                <tr>
                    <th colspan="5" class="vehicleType trow">Toyota Prius 4th Generation</th>
                </tr>
                <tr class="detail">
                    <th class="trow">Type<br/>A/C<br/>Seating capacity<br/>Driver<br/>Price per day</th>
                    <td class="trow">Car<br/><input type="checkbox"><br/>5<br/>with<input type="checkbox"> without<input type="checkbox"><br/>LKR.</td>
                    <td class="trow"><img class="vimg" src="../../images/Sample_images/toyota-2010-prius-wallpaper-01.jpg"></td>
                    <th class="trow">Name<br/>E-mail<br/>Contact<br/>Location<br/>Driver charges</th>
                    <td class="trow">Mr.Kamal Ranasinghe<br/>kamal@gmail.com<br/>0710000000/0332200000<br/>Gampaha<br/>LKR.1000.00</td>
                </tr>
            </table>
            <br/>
            <table class="vehicledetails">

                <!-- vehicle 2 -->
                <tr>
                    <th colspan="5" class="vehicleType trow">Toyota</th>
                </tr>
                <tr class="detail">
                    <th class="trow">Type<br/>A/C<br/>Seating capacity<br/>Driver<br/>Price per day</th>
                    <td class="trow">Car<br/><input type="checkbox"><br/>5<br/>with<input type="checkbox"> without<input type="checkbox"><br/>LKR.</td>
                    <td class="trow"><img class="vimg"src="../../images/Sample_images/image-0-02-03-98850b797816cec1bd173332084faf1e9281c0e0b85d2e212d0f42b2d10fdc69-V.jpg"></td>
                    <th class="trow">Name<br/>E-mail<br/>Contact<br/>Location<br/>Driver charges</th>
                    <td class="trow">Mr.Kamal Ranasinghe<br/>kamal@gmail.com<br/>0710000000/0332200000<br/>Gampaha<br/>LKR.1000.00</td>
                </tr>
            </table>
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
