<?php
session_start();
include('../../db/db_connection.php');



if(isset($_POST['submitbtn'])){
    $traveler_id = uniqid("tr_");
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $contact2=mysqli_real_escape_string($con,$_POST['contact2']);
    $contact1=mysqli_real_escape_string($con,$_POST['contact1']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $adressLine1=mysqli_real_escape_string($con,$_POST['address-line1']);
    $adressLine2=mysqli_real_escape_string($con,$_POST['address-line2']);
    $city=mysqli_real_escape_string($con,$_POST['city']);


  $sqlForExistedEmail = "SELECT email FROM hotels WHERE email = '$email' UNION SELECT email FROM travelers WHERE email = '$email' UNION SELECT email FROM vehicles WHERE email = '$email'";
    $resultForExistedEmail = mysqli_query($con,$sqlForExistedEmail);
    if (mysqli_num_rows($resultForExistedEmail) > 0) {
        $_SESSION['value'] = "username_exist";
        echo '<script type="text/javascript">javascript:history.go(-1)</script>';
        exit();
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql="INSERT INTO travelers VALUES ('$traveler_id', '$name', '$adressLine1', '$adressLine2', '$city', '$email', '$password', '$contact2', '$contact1')";
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
?>
