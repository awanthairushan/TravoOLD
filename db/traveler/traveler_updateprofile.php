<?php 
  
  if(isset($_SESSION['username'])) {

    $con = require 'db_connection.php';

    $username=$_SESSION['username'];

    $query = "SELECT * FROM travelers WHERE email='$username'";

    $result = mysqli_query($con, $query);

    while ($rows = mysqli_fetch_array($result)){
        $id=$rows['travelerID'];
        $name=$rows['name'];
        $address1=$rows['address_line1'];
        $address2=$rows['address_line2'];
        $city=$rows['city'];
        $email=$rows['email'];
        $contact1=$rows['contact1'];
        $contact2=$rows['contact2'];
        $password=$rows['password'];

    }
    return $result;
    session_destroy();
}
   

?>