<?php
    session_start();
//connecting to the database

include '../../db/db_connection.php';

//registering vehicle

if (isset($_POST['submitbtn'])) {
    $vehicle_id = uniqid("veh_");
    $owner_name = mysqli_real_escape_string($con,$_POST['owner_name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $contact1 = mysqli_real_escape_string($con,$_POST['contact1']);
    $contact2 = mysqli_real_escape_string($con,$_POST['contact2']);
    $password = mysqli_real_escape_string($con,$_POST['password1']);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $vehicle_no = mysqli_real_escape_string($con,$_POST['vehicle_no']);
    $type = mysqli_real_escape_string($con,$_POST['type']);
    $no_of_passengers = mysqli_real_escape_string($con,$_POST['no_of_passengers']);
    $price_for_1km =  mysqli_real_escape_string($con,$_POST['price_for_1km']);
    $price_for_day = mysqli_real_escape_string($con,$_POST['price_for_day']);
    $driver_type = $_POST['driver_type'];
    $driver_charge =  mysqli_real_escape_string($con,$_POST['driver_charge']);
    $ac =  $_POST['ac'];
    $image = $_POST['images'];

   $sqlForExistedEmail = "SELECT email FROM hotels WHERE email = '$email' UNION SELECT email FROM travelers WHERE email = '$email' UNION SELECT email FROM vehicles WHERE email = '$email'";
    $resultForExistedEmail = mysqli_query($con,$sqlForExistedEmail);
    if (mysqli_num_rows($resultForExistedEmail) > 0) {
        $_SESSION['value'] = "username_exist";
        //echo '<script>window.alert("Username is already exist!")</script>';
        echo '<script type="text/javascript">javascript:history.go(-1)</script>';
        exit();
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT); // Password hashing
        $sql = "INSERT INTO vehicles (vehicle_id,vehicle_no, owner_name, email, contact1, contact2, password, city, type, no_of_passengers, price_for_1km, price_for_day, driver_type, driver_charge, ac, vehicle_image) VALUES ('$vehicle_id', '$vehicle_no', '$owner_name', '$email', '$contact1', '$contact2', '$password', '$city', '$type', '$no_of_passengers', '$price_for_1km', '$price_for_day', '$driver_type', '$driver_charge', '$ac', '$image')";

        $result=$con->query($sql);
        if($result){
            header("Location: ../../pages/unregistered/log_in.php");
        }else{
            echo "Error:".$con->error;
            mysqli_close($con);
        }
        session_destroy();
    }
}
