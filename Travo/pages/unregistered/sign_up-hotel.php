<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style> <?php include '../../css/unregistered/sign_up-hotel.css'; ?> </style>
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
      <label for="adress">Address</label> <input class="text-form-sign_up-traveler" type="text" name="address-line1" id="address-line1" value="Line 1"><br>
      <br>
      <input class="text-form-sign_up-traveler" type="text" name="address-line2" id="address-line2" value="Line 2"><br>
      <br>
      <input class="text-form-sign_up-traveler" type="text" name="city" id="city" value="City"><br>
      <br>
      <label for="description">Description</label><textarea class="description-form-hotel" id="description" name="description" rows="8" cols="80"></textarea><br>
      <br>
      <br>
      <label for="location">Location</label> <input class="text-form-sign_up-traveler" type="url" name="location" id="location" value="input as a link"><br>
      <br>
      <input class="tc-checkbox-form-sign_up-traveler" type="checkbox" name="tc" id="tc" value=""><label id="tc-label-form-sign_up-traveler" for="tc">I agree to all the <a href="../../pages/unregistered/sign_up2-hotel.php">Terms & Conditions</a> of travo.lk</label>
      </form>
    </div>
    <div class="buttons-sign_up-traveler">
      <input type="button" class="refreshbtn" value="REFRESH" onclick="window.location.reload();">
      <input type="submit" class="submitbtn" value="NEXT" onclick="location.href='sign_up2-hotel.php';">
    </div>
    </section>
    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>

  </body>
</html>
