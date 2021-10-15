<?php
session_start();
//connecting to the database
include '../../db/db_connection.php';

//connecting to data read file
include '../../db/traveler/traveler_updateprofile.php';

//assign traveler id which got from data read file to a new variable
   $travelerID=$id;

if (isset($_POST['submitbtn'])) {
    $new_name=mysqli_real_escape_string($con,$_POST['name']);
    $new_email=mysqli_real_escape_string($con,$_POST['email']);
    $new_contact2=mysqli_real_escape_string($con,$_POST['contact2']);
    $new_contact1=mysqli_real_escape_string($con,$_POST['contact1']);
    $new_password=mysqli_real_escape_string($con,$_POST['password']);
    $new_adressLine1=mysqli_real_escape_string($con,$_POST['address-line1']);
    $new_adressLine2=mysqli_real_escape_string($con,$_POST['address-line2']);
    $new_city=mysqli_real_escape_string($con,$_POST['city']);

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
    if(empty($new_adressLine1)){
        $new_adressLine1=$address1;
    }
    if(empty($new_adressLine2)){
        $new_adressLine2=$address2;
    }
    if(empty($new_city)){
        $new_city=$city;
    }

    //update data of the relevant user    
    $sql = "UPDATE travelers SET name='$new_name', email='$new_email', address_line1='$new_adressLine1', address_line2='$new_adressLine2', city='$new_city', password='$new_password', contact1='$new_contact1', contact2='$new_contact2' WHERE travelerID='$travelerID' ";

    if (mysqli_query($con, $sql)) {
        //echo "New record updated successfully !";
        header('location: ../../pages/traveler/traveler_update.php');
    } else {
        echo "Error: " . $con->error;
        mysqli_close($con);
    }
}
