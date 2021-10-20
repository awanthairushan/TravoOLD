<?php 
  
  if(isset($_SESSION['username'])) {

    $con = require '../../db/db_connection.php';

    $username=$_SESSION['username'];

    $query = "SELECT * FROM vehicle_owners WHERE email='$username'";

    $result = mysqli_query($con, $query);

    while ($rows = mysqli_fetch_array($result)){
        $id=$rows['owner_id'];
        $name=$rows['owner_name'];
        $email=$rows['email'];
        $contact1=$rows['contact1'];
        $contact2=$rows['contact2'];
        $password=$rows['password'];
    }
    return $result;
    session_destroy();
}
   

?>