<?php

include('../../db/db_connection.php');

$status=TRUE;

if(isset($_POST['submit'])){
    $traveler_id = uniqid("tr_");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact2=$_POST['contact2'];
    $contact1=$_POST['contact1'];
    $password=$_POST['password'];
    $adressLine1=$_POST['address-line1'];
    $adressLine2=$_POST['address-line2'];
    $city=$_POST['city'];

    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql="INSERT INTO travelers VALUES ('$traveler_id', '$name', '$adressLine1', '$adressLine2', '$city', '$email', '$password', '$contact2', '$contact1')";
    $result=$con->query($sql);
    if($result){
        header("Location: ../../pages/unregistered/log_in.php");
    }else{
        echo "Error:".$con->error;
        mysqli_close($con);
    }

}




?>
