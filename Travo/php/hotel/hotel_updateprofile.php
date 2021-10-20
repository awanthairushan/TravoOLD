<?php
session_start();
//connecting to the database
include '../../db/db_connection.php';

//connecting to data read file
include '../../db/hotel/hotel_updateprofile.php';

//assign traveler id which got from data read file to a new variable
   $hotelID=$id;

if (isset($_POST['submitbtn'])) {
    $new_name=mysqli_real_escape_string($con,$_POST['name']);
    $new_type=mysqli_real_escape_string($con,$_POST['hotel_type-type']);
    $new_license_no=mysqli_real_escape_string($con,$_POST['licenceNo']);
    $new_email=mysqli_real_escape_string($con,$_POST['email']);
    $new_contact2=mysqli_real_escape_string($con,$_POST['contact2']);
    $new_contact1=mysqli_real_escape_string($con,$_POST['contact1']);
    $new_password=mysqli_real_escape_string($con,$_POST['password']);
    $new_adressLine1=mysqli_real_escape_string($con,$_POST['address-line1']);
    $new_adressLine2=mysqli_real_escape_string($con,$_POST['address-line2']);
    $new_city=mysqli_real_escape_string($con,$_POST['city']);
    $new_description=mysqli_real_escape_string($con,$_POST['description']);
    $new_website=mysqli_real_escape_string($con,$_POST['web']);
   // $new_images=mysqli_real_escape_string($con,$_POST['images']);
    $new_rep_name=mysqli_real_escape_string($con,$_POST['rep_name']);
    $new_rep_email=mysqli_real_escape_string($con,$_POST['rep_email']);
    $new_rep_contac1=mysqli_real_escape_string($con,$_POST['rep_contact1']);
    $new_rep_contac2=mysqli_real_escape_string($con,$_POST['rep_contact2']);

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
    if(empty($new_type)){
        $new_type=$hotelType;
    }
    if(empty($new_license_no)){
        $new_license_no=$licenceNo;
    }
    if(empty($new_description)){
        $new_description=$description;
    }
    if(empty($new_website)){
        $new_website=$webUrl;
    }
    if(empty($new_rep_name)){
        $new_rep_name=$repName;
    }
    if(empty($new_rep_email)){
        $new_rep_email=$repEmail;
    }
    if(empty($new_rep_contac1)){
        $new_rep_contac1=$repContact1;
    }
    if(empty($new_rep_contac2)){
        $new_rep_contac2=$repContact2;
    }

    //update data of the relevant user    
    $sql = "UPDATE hotels SET name='$new_name', email='$new_email', address_line1='$new_adressLine1', address_line2='$new_adressLine2', city='$new_city', password='$new_password', contact1='$new_contact1', contact2='$new_contact2', licenceNo = '$new_license_no', description='$new_description', webUrl='$new_website', hotel_type='$new_type', rep_name='$new_rep_name', rep_email='$new_rep_email', rep_contact1='$new_rep_contac1', rep_contact2='$new_rep_contac2' WHERE hotelID='$hotelID' ";

    if (mysqli_query($con, $sql)) {
        //echo "New record updated successfully !";
        header('location: ../../pages/hotel/hotel_update.php');
    } else {
        echo "Error: " . $con->error;
        mysqli_close($con);
    }
}
