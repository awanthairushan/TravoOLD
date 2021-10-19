<?php
  session_start();
  if(isset($_SESSION['username'])) {
    include '../../db/db_connection.php';
    $temp = $_SESSION['username'];
    $sqlForSession = "SELECT vehicle_id FROM vehicles WHERE email = '$temp'";
    $resultForSession = mysqli_query($con, $sqlForSession);
    if (mysqli_num_rows($resultForSession) === 1) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FAQ</title>
    <link rel="icon" href="../../images/icons/favicon.ico">
    <style> <?php include '../../css/vehicle/vehicle_faq.css'; ?> </style>
  </head>
  <body>
    <section class="faq">
      <?php include '../../repeatable_contents/nav_bar_vehicle.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_vehicle.css'; ?>  </style>
      <script type="text/javascript" src="../../repeatable_contents/nav_bar_vehicle.js"></script>
      <br>
    <div class="question_and_answers-faq">
      <br>
      <table class="faq_table-faq">
        <tr>
          <td class="question-faq">question 1</td>
        </tr>
        <tr>
          <td class="answer-faq">Answer 1</td>
        </tr>
        <tr>
          <td class="question-faq">question 2</td>
        </tr>
        <tr>
          <td class="answer-faq">Answer 2</td>
        </tr>
        <tr>
          <td class="question-faq">question 3</td>
        </tr>
        <tr>
          <td class="answer-faq">Answer 3</td>
        </tr>
        <tr>
          <td class="question-faq">question 4</td>
        </tr>
        <tr>
          <td class="answer-faq">Answer 4</td>
        </tr>
        <tr>
          <td class="question-faq">question 5</td>
        </tr>
        <tr>
          <td class="answer-faq">Answer 5</td>
        </tr>
        <tr>
          <td class="question-faq">question 6</td>
        </tr>
        <tr>
          <td class="answer-faq">Answer 6</td>
        </tr>
        <tr>
          <td class="question-faq">question 7</td>
        </tr>
        <tr>
          <td class="answer-faq">Answer 7</td>
        </tr>
        <tr>
          <td class="question-faq">question 8</td>
        </tr>
        <tr>
          <td class="answer-faq">Answer 8</td>
        </tr>
        <tr>
          <td class="question-faq">question 9</td>
        </tr>
        <tr>
          <td class="answer-faq">Answer 9</td>
        </tr>
        <tr>
          <td class="question-faq">question 10</td>
        </tr>
        <tr>
          <td class="answer-faq">Answer 10</td>
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
  } else{
    echo '<script type="text/javascript">javascript:history.go(-1)</script>';
    exit();
  }
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
