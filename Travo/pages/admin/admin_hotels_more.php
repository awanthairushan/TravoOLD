<?php
session_start();
if(isset($_SESSION['username'])) {
  include '../../db/db_connection.php';
  $temp = $_SESSION['username'];
  $sqlForSession = "SELECT username FROM admin WHERE username = '$temp'";
  $resultForSession = mysqli_query($con, $sqlForSession);
  if (mysqli_num_rows($resultForSession) === 1) {
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style> <?php include '../../css/admin/admin_hotels_more.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../script/traveler/traveler_hotel_booking.js"></script>
    </head>
    <body>
        <section class="uppersection">
            <?php include '../../repeatable_contents/nav_bar_admin.php';?>
            <style> <?php include '../../repeatable_contents/nav_bar_admin.css'; ?>  </style>
            <script type="text/javascript" src="../../repeatable_contents/nav_bar_admin.js"></script>
            
        <!-- .................image gallery.................. -->
            <div class="image_gallery_hotel">
                <table>
                  <tr>
                    <td> <img src="../../images/sample_images/for_hotels/1.jpg" class="images_image_gallery_hotel" alt="HOTEL SAMPLE IMAGES"> </td>
                    <td> <img src="../../images/sample_images/for_hotels/2.jpg" class="images_image_gallery_hotel" alt="HOTEL SAMPLE IMAGES"></td>
                    <td><img src="../../images/sample_images/for_hotels/3.jpg" class="images_image_gallery_hotel" alt="HOTEL SAMPLE IMAGES"></td>
                    <td><img src="../../images/sample_images/for_hotels/4.jpg" class="images_image_gallery_hotel" alt="HOTEL SAMPLE IMAGES"></td>
                    <td><img src="../../images/sample_images/for_hotels/5.jpg" class="images_image_gallery_hotel" alt="HOTEL SAMPLE IMAGES"></td>
                  </tr>
                </table>
            </div>
        <!-- .................end of image gallery.................. -->

        <!-- ..................hotel details and representattive details........................ -->
        <div class="hotel_account">
          <table>
            <tr>
              <td>Hotel name</td>
              <td>Sample hotel name</td>
              <td rowspan = "7"><div class = "hotel_account_payment">LKR 55000</div></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>Sample hotel email</td>
            </tr>
            <tr>
              <td>Contact</td>
              <td>Sample hotel contacts</td>
            </tr>
            <tr>
              <td>type</td>
              <td>Sample hotel type</td>
            </tr>
            <tr>
              <td>Registration id</td>
              <td>Sample hotel reg_no</td>
            </tr>
            <tr>
              <td>License id</td>
              <td>Sample hotel licence_id</td>
            </tr>
            <tr>
              <td>Address</td>
              <td>Sample hotel address</td>
            </tr>
            <tr>
              <td>Representative name</td>
              <td>Sample Representative name</td>
              <td rowspan = "3"><div class="paybtn"><button id="paybtn">PAY NOW</button></div></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>Sample Representative email</td>
            </tr>
            <tr>
              <td>Contact</td>
              <td>Sample Representative contacts</td>
            </tr>

          </table>



        </div>
        <!-- ..................end of hotel details and representattive details........................ -->

        <!-- ........................room details table....................... -->
            <table class="room_details-form-sign_up-hotel">
               <tr>
                   <th id="first_column_room_details-form-sign_up-hotel">Room type</th>
                   <th>Persons</th>
                   <th>Rooms</th>
                   <th>Minibar</th>
                   <th>Food include</th>
                   <th>A/C</th>
                   <th>Price</th>
                 </tr>
                <tr>
                    <td id="first_column_room_details-form-sign_up-hotel">Single Room </td>
                    <td>1</td>
                    <td><input class="number-form-sign_up-traveler" type="number" id="single_room_count" name="single_room_count" ></td>
                    <td><input type="checkbox" id="single_room_minibar" name="single_room_minibar"></td>
                    <td><input type="checkbox" id="single_room_food" name="single_room_food"></td>
                    <td><input type="checkbox" id="single_room_food" name="single_room_food"></td>
                    <td><input class="price-form-sign_up-traveler"  type="text" id="single_room_price" name="single_room_price" placeholder="0.00" ></td>
                  </tr>
                  <tr>
                    <td id="first_column_room_details-form-sign_up-hotel">Double Room </td>
                    <td>2</td>
                    <td><input class="number-form-sign_up-traveler" type="number" id="double_room_count" name="double_room_count" ></td>
                    <td><input type="checkbox" id="double_room_minibar" name="double_room_minibar"></td>
                    <td><input type="checkbox" id="double_room_food" name="double_room_food"></td>
                    <td><input type="checkbox" id="double_room_ac" name="double_room_ac"></td>
                    <td><input class="price-form-sign_up-traveler" type="text" id="double_room_price" name="double_room_price" placeholder="0.00" ></td>
                  </tr>
                  <tr>
                    <td id="first_column_room_details-form-sign_up-hotel">Family Room </td>
                    <td>4</td>
                    <td><input class="number-form-sign_up-traveler" type="number" id="family_room_count" name="family_room_count" ></td>
                    <td><input type="checkbox" id="family_room_minibar" name="family_room_minibar"></td>
                    <td><input type="checkbox" id="family_room_food" name="family_room_food"></td>
                    <td><input type="checkbox" id="family_room_ac" name="family_room_ac"></td>
                    <td><input class="price-form-sign_up-traveler"  type="text" id="family_room_price" name="family_room_price" placeholder="0.00" ></td>
                  </tr>
                  <tr>
                    <td id="first_column_room_details-form-sign_up-hotel">Massive Room </td>
                    <td><input class="number-form-sign_up-traveler" type="number" id="massive_room_capacity" name="massive_room_capacity" ></td>
                    <td><input class="number-form-sign_up-traveler" type="number" id="massive_room_count" name="massive_room_count" ></td>
                    <td><input type="checkbox" id="massive_room_minibar" name="massive_room_minibar"></td>
                    <td><input type="checkbox" id="massive_room_food" name="massive_room_food"></td>
                    <td><input type="checkbox" id="massive_room_ac" name="massive_room_ac"></td>
                    <td><input class="price-form-sign_up-traveler"  type="text" id="massive_room_price" name="massive_room_price" placeholder="0.00" ></td>
                  </tr>
               </tr>
             </table>
        <!-- ........................end of room details table....................... -->

        <!-- ..................hotel description and location........................ -->
            <table class="hoteldetails">
                <tr>
                    <th>Location</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.539473306047!2d79.84874!3d6.918109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb0658168859e3c0e!2sCinnamon%20Grand%20Colombo!5e0!3m2!1sen!2slk!4v1629560069244!5m2!1sen!2slk" width="95%" height="92%"  allowfullscreen="" loading="lazy"></iframe>
                    </td>
                    <td>
                      <p>
                        Set 1 km from both the Slave Island Railway Station and Galle Face Green, a seaside urban park, this grand resort hotel is also 2 km from Gangaramaya Buddhist Temple.
                        Featuring picture windows, the polished rooms come with minibars, free Wi-Fi and flat-screen TVs. Suites add living rooms and dining areas, and some offer kitchenettes, wet bars or butler service.
                        </p>
                    </td>
                </tr>
            </table>
        <!-- ..................end of hotel description and location........................ -->

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
