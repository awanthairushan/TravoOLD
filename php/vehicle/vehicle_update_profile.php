<?php
session_start();
//connecting to the database
include '../../db/db_connection.php';

//connecting to data read file
include '../../db/vehicle/vehicle_update_profile.php';

//assign traveler id which got from data read file to a new variable
   $ownerId=$id;

if (isset($_POST['submitbtn'])) {
    $new_name=mysqli_real_escape_string($con,$_POST['owner_name']);
    $new_email=mysqli_real_escape_string($con,$_POST['email']);
    $new_contact2=mysqli_real_escape_string($con,$_POST['contact2']);
    $new_contact1=mysqli_real_escape_string($con,$_POST['contact1']);
    $new_password=mysqli_real_escape_string($con,$_POST['password']);

//check whether newly entered data is empty
     
    if(empty($new_name)){
        $new_name=$name;
    }
    if(empty($new_email)){
        $new_email=$email;
    }
    if(empty($new_contact2)){
        $new_contact2=$contact2;
    }
    if(empty($new_contact1)){
        $new_contact1=$contact1;
    }
    if(empty($new_password)){
        $new_password=$password;
    }else{
        $new_password = password_hash($new_password, PASSWORD_DEFAULT);
    }

    //update data of the relevant user    
    $sql = "UPDATE vehicle_owners SET owner_name='$new_name', email='$new_email', password='$new_password', contact1='$new_contact1', contact2='$new_contact2' WHERE owner_id='$ownerId' ";

    if (mysqli_query($con, $sql)) {
        //echo "New record updated successfully !";
        header('location: ../../pages/vehicle/vehicle_update.php');
    } else {
        echo "Error: " . $con->error;
        mysqli_close($con);
    }
}
