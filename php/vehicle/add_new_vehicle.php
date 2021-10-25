<?php
session_start();
//connecting to the database

include '../../db/db_connection.php';

$username = $_SESSION['username'];

$sqlForVehicleOwner = "SELECT * FROM vehicle_owners WHERE email = '$username' ";

$result = mysqli_query($con, $sqlForVehicleOwner);

while ($rows = mysqli_fetch_array($result)) {
    $existing_owner_id = $rows['owner_id'];
}

//registering vehicle

if (isset($_POST['submitbtn'])) {
    $vehicle_id = uniqid("veh_");
    $owner_id = $existing_owner_id;
    $city = $_POST['city'];
    $vehicle_no = mysqli_real_escape_string($con, $_POST['vehicle_no']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $no_of_passengers = mysqli_real_escape_string($con, $_POST['no_of_passengers']);
    $price_for_1km =  mysqli_real_escape_string($con, $_POST['price_for_1km']);
    $price_for_day = mysqli_real_escape_string($con, $_POST['price_for_day']);
    $driver_type = $_POST['driver_type'];
    $driver_charge =  mysqli_real_escape_string($con, $_POST['driver_charge']);
    $ac =  $_POST['ac'];
    $image = $_POST['images'];


    $sql = "INSERT INTO vehicles (vehicle_id,vehicle_no, owner_id, city, type, no_of_passengers, price_for_1km, price_for_day, driver_type, driver_charge, ac, vehicle_image) VALUES ('$vehicle_id', '$vehicle_no', '$owner_id', '$city', '$type', '$no_of_passengers', '$price_for_1km', '$price_for_day', '$driver_type', '$driver_charge', '$ac', '$image')";

    $result = $con->query($sql);
    if ($result) {
        header("Location: ../../pages/vehicle/vehicle_view_vehicle.php");
    } else {
        echo "Error:" . $con->error;
        mysqli_close($con);
    }
}
