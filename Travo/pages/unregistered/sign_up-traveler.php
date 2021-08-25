<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style> <?php include '../../css/unregistered/sign_up-traveler.css'; ?> </style>
  </head>
  <body>
    <section class="sign_up-traveler">
      <?php include '../../repeatable_contents/nav_bar.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar.css'; ?>  </style>
      <br>
    <div class="box-sign_up-traveler">
      <br>
      <form class="form-sign_up-traveler" action="index.html" method="post">
        <label for="name">Name</label> <input class="text-form-sign_up-traveler" type="text" name="name" id="name" value=""><br>
        <br>
        <label for="email">Email Address</label> <input class="text-form-sign_up-traveler" type="text" name="email" id="email" value=""><br>
        <br>
        <label for="contact">Contact Number</label> <input class="text-small-form-sign_up-traveler" type="text" name="contact2" id="contact2" value=""><input class="text-small-form-sign_up-traveler" type="text" name="contact1" id="contact1" value=""><br>
        <br>
        <label for="password">Password</label> <input class="text-form-sign_up-traveler" type="password" name="password" id="password" value=""><br>
        <br>
        <label for="retype-password">Retype-Password</label> <input class="text-form-sign_up-traveler" type="password" name="retype-password" id="retype-password" value=""><br>
        <br>
      <label for="adress">Address</label> <input class="text-form-sign_up-traveler" type="text" name="address-line1" id="address-line1" value="Line 1"><br>
      <br>
      <input class="text-form-sign_up-traveler" type="text" name="address-line2" id="address-line2" value="Line 2"><br>
      <br>
      <input class="text-form-sign_up-traveler" type="text" name="city" id="city" value="City"><br>
      <br>
      <input class="tc-checkbox-form-sign_up-traveler" type="checkbox" name="tc" id="tc" value=""><label id="tc-label-form-sign_up-traveler" for="tc">I agree to all the <a href="#">Terms & Conditions</a> of travo.lk</label>
      </form>
    </div>
    <br>
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
