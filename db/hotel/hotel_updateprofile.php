<?php 
  
  if(isset($_SESSION['username'])) {

    $con = require '../../db/db_connection.php';

    $username=$_SESSION['username'];

    $query_for_hotel_details = "SELECT * FROM hotels WHERE email='$username'";

    $result_for_hotel_details = mysqli_query($con, $query_for_hotel_details);

    while ($rows = mysqli_fetch_array($result_for_hotel_details)){
        $id=$rows['hotelID'];
        $name=$rows['name'];
        $regNo=$rows['regNo'];
        $licenceNo=$rows['licenceNo'];
        $address1=$rows['address_line1'];
        $address2=$rows['address_line2'];
        $city=$rows['city'];
        $location=$rows['location'];
        $email=$rows['email'];
        $contact1=$rows['contact1'];
        $contact2=$rows['contact2'];
        $description=$rows['description'];
        $webUrl=$rows['webUrl'];
        $password=$rows['password'];
        $hotelType=$rows['hotel_type'];
        $repName=$rows['rep_name'];
        $repEmail=$rows['rep_email'];
        $repContact1=$rows['rep_contact1'];
        $repContact2=$rows['rep_contact2'];

    }
    return $result_for_hotel_details;

    $query_for_room_details = "SELECT * FROM hotel_rooms WHERE id='$id' ";

    $result_for_room_details = mysqli_query($con, $query_for_room_details);

    while ($rows = mysqli_fetch_array($result_for_room_details)){
          $single_count = $rows['single_room_count'];
          $single_price = $rows['single_room_price'];
          $double_count = $rows['double_room_count'];
          $double_price = $rows['double_room_price'];
          $family_count = $rows['family_room_count'];
          $family_price = $rows['family_room_price'];
          $massive_capacity = $rows['massive_room_capacity'];
          $massive_count = $rows['massive_room_count'];
          $massive_price = $rows['massive_room_price'];
          $single_mini_bar = $rows['minibar'];

         /* if($single_mini_bar == 'no'){
            $checked = 'checked="checked"';
          }*/
    }
    return $result_for_room_details;



    session_destroy();
}
   

?>