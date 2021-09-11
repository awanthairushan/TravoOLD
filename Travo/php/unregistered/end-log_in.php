<?php
  session_start();
  include '../../db/db_connection.php';
  if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
      $data = trim($data); //Remove characters(spaces) from both sides of a string
      $data = stripslashes($data); //Remove the backslash
      $data = htmlspecialchars($data); //Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities
      return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $sqladmin = "SELECT * FROM admin WHERE username = '$username'";
    $resultadmin = mysqli_query($con,$sqladmin); //mysqli_query() function performs a query against a database.
    $sqltraveler = "SELECT * FROM travelers WHERE email = '$username'";
    $resulttraveler = mysqli_query($con,$sqltraveler);
    $sqlhotel = "SELECT * FROM hotels WHERE email = '$username'";
    $resulthotel = mysqli_query($con,$sqlhotel);
    $sqlvehicle = "SELECT * FROM vehicles WHERE email = '$username' ";
    $resultvehicle = mysqli_query($con,$sqlvehicle);

    if(empty($username)) {
      header('location: ../../pages/unregistered/log_in.php?error=Username is required');
      exit();
    }else if (empty($password)) {
      header('location: ../../pages/unregistered/log_in.php?error=Password is required');
      exit();
    }else {
      if (mysqli_num_rows($resultadmin) === 1) { //The mysqli_num_rows() function returns the number of rows in a result set.
          $row = mysqli_fetch_assoc($resultadmin); //The fetch_assoc() / mysqli_fetch_assoc() function fetches a result row as an associative array.
          if($row['username'] == $username  && password_verify($password, $row['password'])){
            $_SESSION['username'] = $row['username'];
            header("location: ../../pages/admin/admin_hotels.php");
            exit();
          } else {
            header('location: ../../pages/unregistered/log_in.php?error=Incorrect Username or Password');
            exit();
          }
      }else if (mysqli_num_rows($resulttraveler) === 1) {
          $row = mysqli_fetch_assoc($resulttraveler); //The fetch_assoc() / mysqli_fetch_assoc() function fetches a result row as an associative array.
          if($row['email'] == $username && password_verify($password, $row['password'])){
            $_SESSION['username'] = $row['email'];
            $_SESSION['travelerID'] = $row['travelerID'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['contact1'] = $row['contact1'];
            header("location: ../../pages/traveler/traveler_home.php");
            exit();
          } else {
            header('location: ../../pages/unregistered/log_in.php?error=Incorrect Username or Password');
            exit();
          }
      } elseif (mysqli_num_rows($resulthotel) === 1) {
          $row = mysqli_fetch_assoc($resulthotel); //The fetch_assoc() / mysqli_fetch_assoc() function fetches a result row as an associative array.
          if($row['email'] == $username && password_verify($password, $row['password'])){
            $_SESSION['username'] = $row['email'];
            $_SESSION['hotelID'] = $row['hotelID'];
            $_SESSION['name'] = $row['name'];
            header("location: ../../pages/hotel/hotel_home.php");
            exit();
          } else {
            header('location: ../../pages/unregistered/log_in.php?error=Incorrect Username or Password');
            exit();
          }
      }elseif (mysqli_num_rows($resultvehicle) === 1) {
          $row = mysqli_fetch_assoc($resultvehicle); //The fetch_assoc() / mysqli_fetch_assoc() function fetches a result row as an associative array.
          if($row['email'] == $username && password_verify($password, $row['password'])){
            $_SESSION['username'] = $row['email'];
            $_SESSION['vehicle_no'] = $row['vehicle_no'];
            header("location: ../../pages/vehicle/vehicle_home.php");
            exit();
          } else {
            header('location: ../../pages/unregistered/log_in.php?error=Incorrect Username or Password');
            exit();
          }
      }
      else {
          header('location: ../../pages/unregistered/log_in.php?error=Incorrect Username or Password');
          exit();
      }
    }
  }else {
    header('location: ../../pages/unregistered/log_in.php');
    exit();
  }

 ?>
