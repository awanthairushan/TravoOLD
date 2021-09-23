<?php
  session_start();
  if(isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style> <?php include '../../css/traveler/traveler_home.css'; ?> </style>
    </script>
  </head>
  <body>

    <section class = "home-watermark_and_started-section">
      <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
      <script type="text/javascript" src="../../repeatable_contents/nav_bar_traveler.js"></script>
      <br>
      <p class = "watermark">TRAVO.lk</p>
      </div>


    <div class="container" id="containerstart">
            <div class="details">

              <form class="" action="index.html" method="post">
                <table class="main">
                      <tr>
                          <th class="trow heading">PEOPLE COUNT</th>
                          <th class="trow heading">DATE</th>
                          <th class="trow heading">CATEGORY</th>
                      </tr>
                      <tr>
                          <td class="trow"><input type="number" id="peoplecount" name="peoplecount"></td>
                          <td class="trow to"><input type="date" id="startdate" name="startdate">to<input type="date" id="enddate" name="enddate"></td>
                          <td class="trow"><select name="category" id="category">
                              <option selected>Select Category</option>
                              <option value="pilgrimage">Pilgrimage</option>
                              <option value="cultural">Cultural</option>
                              <option value="leisure">Leisure</option>
                              </select>
                          </td>
                  </table>
                  <button id="nextbtn" onclick="window.location.href='pages/traveler/traveler_plantrip.php'">NEXT</button>
                </form>
            </div>
        </div>
    </section>

<!--__________________about_us________________-->
    <section id="about_us-section">
      <?php include '../../repeatable_contents/about_us.php';?>
      <style> <?php include '../../repeatable_contents/about_us.css'; ?>  </style>
      <br>
    </section>
<!--__________________END about_us________________-->

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
