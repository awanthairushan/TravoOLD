<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style> <?php include '../../css/unregistered/sign_up-traveler.css'; ?> </style>
    <script src="../../script/unregistered/sign_up-traveler.js"></script>
    <!-- defer indicate that script is executed after the document has been parsed -->
    <script defer src="../../script/unregistered/sign_up2-traveler.js"></script>
  </head>
  <body>
    <section class="sign_up-traveler">
      <?php include '../../repeatable_contents/nav_bar.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar.css'; ?>  </style>
      <br>
    <div class="box-sign_up-traveler">
      <br>
      <form class="form-sign_up-traveler" id="form-sign_up-traveler" action="../../php/unregistered/traveler_sign_up.php" method="post"> 
      <br>
        <label for="name">Name</label> 
        <input class="text-form-sign_up-traveler inputs[]" type="text" name="name" id="name" value=""><br>
        <br>
        <label for="email">Email Address</label> 
        <input class="text-form-sign_up-traveler inputs[]" type="email" name="email" id="email" value=""  ><br>
        <br>
        <label for="contact">Contact Number</label> 
        <input class="text-small-form-sign_up-traveler" type="number" name="contact2" id="contact2" value="" placeholder="contact 2">
        <input class="text-small-form-sign_up-traveler inputs[]" type="number" name="contact1" id="contact1" value="" placeholder="contact 1"><br>
        <br>
        <label for="password">Password</label> 
        <input class="text-form-sign_up-traveler inputs[]" type="password" name="password" id="password" value=""  ><br>
        <br>
        <label for="retype-password">Retype-Password</label> 
        <input class="text-form-sign_up-traveler inputs[]" type="password" name="retype-password" id="retype-password" value="" onkeyup="checkpassword();"  ><br>
        <br>
        <span id="pmessage"></span>
        <br>
      <label for="adress">Address</label> 
      <input class="text-form-sign_up-traveler inputs[]" type="text" name="address-line1" id="address-line1" placeholder="Line 1" value=""  ><br>
      <br>
      <input class="text-form-sign_up-traveler inputs[]" type="text" name="address-line2" id="address-line2" placeholder="Line 2" value=""  ><br>
      <br>
      <input class="text-form-sign_up-traveler inputs[]" type="text" name="city" id="city" placeholder="City" value=""  ><br>
      <br>
      <input class="tc-checkbox-form-sign_up-traveler" type="checkbox" name="tc" id="tc" value=""><label id="tc-label-form-sign_up-traveler" for="tc">I agree to all the <a href="#">Terms & Conditions</a> of travo.lk</label>
      <br><br><br>
    <div class="buttons-sign_up-traveler">
      <input type="button" class="refreshbtn" value="REFRESH" onclick="window.location.reload();">
      <input type="submit" class="submitbtn" value="SUBMIT" name="submit" id="submit">
    </div>
    <div id="error"></div> 
    </form>
    </div>
    </section>
    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>

  </body>
</html>
