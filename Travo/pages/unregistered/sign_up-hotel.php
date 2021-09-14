<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style> <?php include '../../css/unregistered/sign_up-hotel.css'; ?> </style>
    <!-- This code will run after the body tag  -->
  </head>
  <body>
    <section class="sign_up-traveler">
      <?php include '../../repeatable_contents/nav_bar.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar.css'; ?>  </style>
    <div class="box-sign_up-traveler">
      <form class="form-sign_up-traveler" id = "sign_up_form-hotel" name="sign_up_form-hotel" action="../../php/unregistered/signup_submit_hotel.php" method="post">
      <br><br>

      <div class="form-control">
        <label for="name">Name</label>
        <input class="text-form-sign_up-traveler" type="text" name="name" id="name" value=""  ></br><br>
        <span class="error-msg"></span>
      </div>

      <div class="form-control">
      <label for="email">Email Address</label>
        <input class="text-form-sign_up-traveler" type="text" name="email" id="email" value=""  ></br>
        <br>
        <span class="error-msg"></span>
      </div>

      <div class="form-control">
      <label for="contact">Contact Number</label>
        <input class="text-small-form-sign_up-traveler" type="text" name="contact2" id="contact2" value="" >
        <input class="text-small-form-sign_up-traveler" type="text" name="contact1" id="contact1" value=""  ></br>
        <br>
        <span class="error-msg"></span>
      </div>

      <div class="form-control">
      <label for="password">Password</label>
        <input class="text-small-form-sign_up-traveler" type="password" name="retype-password" id="retype-password" value= "" >
        <div class="tooltip">
        <span class="tooltiptext">*Please enter a password between 8 to 15 characters which contains at least one uppercase letter and one special character</span>
        <input class="text-small-form-sign_up-traveler" type="password" name="password" id="password" value="" ><br><br><br>
        </div>
        <br>
        <span class="error-msg"></span>
      </div>

      <div class="form-control">
      <label for="adress">Address</label>
      <input class="text-form-sign_up-traveler" type="text" name="address_line1" id="address_line1" placeholder="Line 1"  ></br>
      <br>
      <input class="text-form-sign_up-traveler" type="text" name="address_line2" id="address_line2" placeholder="Line 2"  ></br>
      <br>
      <input class="text-form-sign_up-traveler" type="text" name="city" id="city" placeholder="City"  ></br>
      <br>
        <span class="error-msg"></span>
      </div>

      <div class="form-control">
      <label for="description">Description</label>
      <textarea class="description-form-hotel" id="description" name="description" rows="8" cols="80" ></textarea ></br>
      <br><br><br>
        <span class="error-msg"></span>
      </div>


      <div class="form-control">
      <label for="location">Location</label>
      <input class="text-form-sign_up-traveler" type="url" name="location" id="location"  placeholder="input as a link" ></br>
      <br>
        <span class="error-msg"></span>
      </div>


      <div class="form-control">
      <label for="rep_name">Name</label>
      <input class="text-form-sign_up-traveler" type="text" name="rep_name" id="rep_name" value="" ></br>
      <br>
        <span class="error-msg"></span>
      </div>


      <div class="form-control">
      <label for="rep_email">Email Address</label>
      <input class="text-form-sign_up-traveler" type="text" name="rep_email" id="rep_email" value="" ></br>
      <br>
        <span class="error-msg"></span>
      </div>

      <div class="form-control">
      <label for="rep_contact">Contact Number</label>
      <input class="text-small-form-sign_up-traveler" type="text" name="rep_contact2" id="rep_contact2" value="">
      <input class="text-small-form-sign_up-traveler" type="text" name="rep_contact1" id="rep_contact1" value="" ></br>
      <br>
        <span class="error-msg"></span>
      </div>


      <div class="form-control">
      <label for="hotel_type">Hotel type</label>
      <select class="drop-down-form-sign_up-traveler" name="hotel_type" id="hotel_type">
      <option value="">Select Hotel Type</option>
      <option value="Standerd">Standerd</option>
      <option value="Luxury">Luxury</option>
      </select ><br>
      <br>
        <span class="error-msg"></span>
      </div>


      <div class="form-control">
      <label for="images">input images</label>
      <input type="file" class="images-small-form-sign_up-traveler" name="images" id="images" multiple="" ></br>
      <br>
        <span class="error-msg"></span>
      </div>

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
                    <td><input type="checkbox" id="single_room_ac" name="single_rooom_ac"></td>
                    <td><input class="price-form-sign_up-traveler"  type="text" id="single_room_price" name="single_room_price" placeholder="0.00" ></td>
                  </tr>
                  <tr>
                    <td id="first_column_room_details-form-sign_up-hotel">Double Room </td>
                    <td>2</td>
                    <td><input class="number-form-sign_up-traveler" type="number" id="double_room_count" name="double_room_count" ></td>
                    <td><input type="checkbox" id="double_room_minibar" name="double_room_minibar"></td>
                    <td><input type="checkbox" id="double_room_food" name="double_room_food"></td>
                    <td><input type="checkbox" id="double_room_ac" name="double_rooom_ac"></td>
                    <td><input class="price-form-sign_up-traveler" type="text" id="double_room_price" name="double_room_price" placeholder="0.00" ></td>
                  </tr>
                  <tr>
                    <td id="first_column_room_details-form-sign_up-hotel">Family Room </td>
                    <td>4</td>
                    <td><input class="number-form-sign_up-traveler" type="number" id="family_room_count" name="family_room_count" ></td>
                    <td><input type="checkbox" id="family_room_minibar" name="family_room_minibar"></td>
                    <td><input type="checkbox" id="family_room_food" name="family_room_food"></td>
                    <td><input type="checkbox" id="family_room_ac" name="family_rooom_ac"></td>
                    <td><input class="price-form-sign_up-traveler"  type="text" id="family_room_price" name="family_room_price" placeholder="0.00" ></td>
                  </tr>
                  <tr>
                    <td id="first_column_room_details-form-sign_up-hotel">Massive Room </td>
                    <td><input class="number-form-sign_up-traveler" type="number" id="massive_room_capacity" name="massive_room_capacity" ></td>
                    <td><input class="number-form-sign_up-traveler" type="number" id="massive_room_count" name="massive_room_count" ></td>
                    <td><input type="checkbox" id="massive_room_minibar" name="massive_room_minibar"></td>
                    <td><input type="checkbox" id="massive_room_food" name="massive_room_food"></td>
                    <td><input type="checkbox" id="massive_room_ac" name="massive_rooom_ac"></td>
                    <td><input class="price-form-sign_up-traveler"  type="text" id="massive_room_price" name="massive_room_price" placeholder="0.00" ></td>
                  </tr>
               </tr>
             </table>
             <br>
  <input class="tc-checkbox-form-sign_up-traveler" type="checkbox" name="tc" id="tc" value="" required>
  <label id="tc-label-form-sign_up-traveler" for="tc">I agree to all the <a href="../../pages/unregistered/tc.php">Terms & Conditions</a> of travo.lk</label>
      </form>
    </div>
    <div class="buttons-sign_up-traveler">
      <input type="button" class="refreshbtn" value="REFRESH" onclick="window.location.reload();">
      <input type="submit" form="sign_up_form-hotel" class="submitbtn" value="SUBMIT" name="submitbtn" id="submitbtn">
  </div>
    </div>
    </section>
    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>
    <script src="../../script/unregistered/sign_up_hotel.js"></script>
  </body>
</html>
