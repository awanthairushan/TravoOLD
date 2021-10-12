<?php

//connecting to the database

include '../../db/db_connection.php';

//registering vehicle

if (isset($_POST['submitbtn'])) {
    $vehicle_id = uniqid("veh_");
    $owner_name = $_POST['owner_name'];
    $email = $_POST['email'];
    $contact1 = $_POST['contact1'];
    $contact2 = $_POST['contact2'];
    $password = $_POST['password1'];
    $city = $_POST['city'];
    $vehicle_no = $_POST['vehicle_no'];
    $type = $_POST['type'];
    $no_of_passengers = $_POST['no_of_passengers'];
    $price_for_1km =  $_POST['price_for_1km'];
    $price_for_day = $_POST['price_for_day'];
    $driver_type = $_POST['driver_type'];
    $driver_charge =  $_POST['driver_charge'];
    $ac =  $_POST['ac'];
    $image = $_POST['images'];

    $sqlForExistedEmail = "SELECT email FROM hotels WHERE email = '$email' UNION SELECT email FROM travelers WHERE email = '$email' UNION SELECT email FROM vehicles WHERE email = '$email'";
    $resultForExistedEmail = mysqli_query($con,$sqlForExistedEmail);
    if (mysqli_num_rows($resultForExistedEmail) > 0) {
    echo '<script>window.alert("Username is already exist!")</script>';
    echo '<script type="text/javascript">javascript:history.go(-1)</script>';
      exit();
    }

    $password = password_hash($password, PASSWORD_DEFAULT); // Password hashing
    $sql = "INSERT INTO vehicles (vehicle_id,vehicle_no, owner_name, email, contact1, contact2, password, city, type, no_of_passengers, price_for_1km, price_for_day, driver_type, driver_charge, ac, vehicle_image) VALUES ('$vehicle_id', '$vehicle_no', '$owner_name', '$email', '$contact1', '$contact2', '$password', '$city', '$type', '$no_of_passengers', '$price_for_1km', '$price_for_day', '$driver_type', '$driver_charge', '$ac', '$image')";

    if (mysqli_query($con, $sql)) {
        header('location: ../../pages/unregistered/log_in.php');
    } else {
        echo "Error: " . $con->error;
        mysqli_close($con);
    }
}
