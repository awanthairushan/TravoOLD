<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style> <?php include '../../css/unregistered/sign_up-vehicle.css'; ?> </style>
  </head>
  <body>
    <section class="sign_up-traveler">
      <?php include '../../repeatable_contents/nav_bar.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar.css'; ?>  </style>
    <div class="box-sign_up-traveler">
      <form class="form-sign_up-traveler" action="index.html" method="post">
        <label for="name">Name</label> <input class="text-form-sign_up-traveler" type="text" name="name" id="name" value=""><br>
        <br>
        <label for="email">Email Address</label> <input class="text-form-sign_up-traveler" type="text" name="email" id="email" value=""><br>
        <br>
        <label for="contact">Contact Number</label> <input class="text-small-form-sign_up-traveler" type="text" name="contact2" id="contact2" value=""><input class="text-small-form-sign_up-traveler" type="text" name="contact1" id="contact1" value=""><br>
        <br>
        <label for="password">Password</label> <input class="text-small-form-sign_up-traveler" type="password" name="retype-password" id="retype-password" value="retype-password"><input class="text-small-form-sign_up-traveler" type="password" name="password" id="password" value=""><br>
        <br>
        <label for="city">Location</label> <input class="text-form-sign_up-traveler" type="text" name="city" id="city" value="city"><br>
        <br>
        <label for="vehicle-no">Vehicle Number</label> <input class="text-form-sign_up-traveler" type="text" name="vehicle-no" id="vehicle-no" value=""><br>
        <br>
        <label for="vehicle">Vehicle</label> <input class="text-small-form-sign_up-traveler" type="text" name="vehcle-seat" id="vehicle-seat" value="no of passengers"><input class="text-small-form-sign_up-traveler" type="text" name="vehicle-type" id="vehicle-type" value="type"><br>
        <br>
        <label for="price">Price</label> <input class="text-small-form-sign_up-traveler" type="text" name="price-day" id="price-day" value="price for day"><input class="text-small-form-sign_up-traveler" type="text" name="price-km" id="price-km" value="price for 1km"><br>
        <br>
        <label for="driver">Driver</label> <input class="text-small-form-sign_up-traveler" type="text" name="driver-charge" id="driver-charge" value="driver charges for a day"><select class="drop-down-form-sign_up-traveler" type="driver-type" name="driver-type" id="driver-type">
        <option value="with-driver">With Driver</option>
        <option value="without-driver">Without Driver</option>
        <option value="with-without-driver">With or Without Driver</option>
        </select><br>
        <br>
        <label for="ac">A/C</label><input class="ac-checkbox-form-sign_up-traveler" type="checkbox" name="ac" id="ac" value=""> <span></span> <br>
      <input class="tc-checkbox-form-sign_up-traveler" type="checkbox" name="tc" id="tc" value=""><label id="tc-label-form-sign_up-traveler" for="tc">I agree to all the <a href="#">Terms & Conditions</a> of travo.lk</label>
      </form>
    </div>
    <div class="buttons-sign_up-traveler">
      <input type="button" class="refreshbtn" value="REFRESH" onclick="window.location.reload();">
      <input type="submit" class="submitbtn" value="SUBMIT">
    </div>
    </section>
    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>

  </body>
</html>
