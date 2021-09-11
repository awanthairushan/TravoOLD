<?php
  session_start();
  if(isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php


?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-DESTINATIONS</title>
    <link rel="stylesheet" href="../../css/admin/admin_faq.css">

</head>
<body>
<section class="admin-destinations">
    <!--Start Navigation bar-->
    <?php include '../../repeatable_contents/nav_bar_admin.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_admin.css'; ?>  </style>
    <!--End Navigation bar-->

    <div class="main">

    <h1 class="heading-one">ADD NEW FAQ</h1>


<!--Start form of adding new destination-->
<div class="form-container">
    <form>
        <label for="fquestion" class="fques">QUESTION</label>
            <input type="text" id="fquestion" name="fquestion"><br />
        <label for="fanswer" class="fans">ANSWER</label>
            <input type="text" id="fanswer" name="fanswer"><br />
        <input type="submit" id="addbtn" value="SUBMIT">


    </form>


</div>
<!--End form of adding new destination-->

</div>

  <!--<script src="../../JS/filter.js"></script>-->
</section>
</body>
</html>
<?php
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
