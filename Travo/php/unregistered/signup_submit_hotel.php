<?php
session_start();
include("../../db/db_connection.php");


if (isset($_POST['submitbtn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact1 = $_POST['contact1'];
    $contact2 = $_POST['contact2'];
    $password1 = $_POST['password'];
    $line1 = $_POST['address-line1'];
    $line2 = $_POST['address-line2'];
    $city = $_POST['city'];
    $decription = $_POST['description'];
    $location = $_POST['location'];
    $rep_name = $_POST['rep_name'];
    $rep_email = $_POST['rep_email'];
    $rep_contact1 = $_POST['rep_contact1'];
    $rep_contact2 = $_POST['rep_contact2'];
    $hotel_type = $_POST['hotel_type-type'];
    $images = $_POST['images'];


    $sqlForExistedEmail = "SELECT email FROM hotels WHERE email = '$email' UNION SELECT email FROM travelers WHERE email = '$email' UNION SELECT email FROM vehicles WHERE email = '$email'";
    $resultForExistedEmail = mysqli_query($con,$sqlForExistedEmail);
    if (mysqli_num_rows($resultForExistedEmail) > 0) {
        $_SESSION['value'] = "username_exist";
        echo '<script type="text/javascript">javascript:history.go(-1)</script>';
        exit();
    } else {
        $password1 = password_hash($password1, PASSWORD_DEFAULT); // Password hashing
        $sql = "INSERT INTO hotels VALUES (NULL, '$name', '$line1', '$line2', '$city', '$location', '$contact1','$contact2','$decription','$email','$password1','$hotel_type','$rep_name', '$rep_email', '$rep_contact1', '$rep_contact2','NEW')";
        $result= mysqli_query($con,$sql);
            if($result){
                $status=FALSE;
                echo "yes";
            }else{
                echo  "Error: " . $con->error;
                mysqli_close($con);
            }  
                $single_count = $_POST['single_room_count'];
                $single_price = $_POST['single_room_price'];
                $double_count = $_POST['double_room_count'];
                $double_price = $_POST['double_room_price'];
                $family_count = $_POST['family_room_count'];
                $family_price = $_POST['family_room_price'];
                $massive_capacity = $_POST['massive_room_capacity'];
                $massive_count = $_POST['massive_room_count'];
                $massive_price = $_POST['massive_room_price'];
            
            
                if (isset ($_POST['single_room_minibar'])) 
                {
                    $single_mini_bar = 'yes';
                }
                else 
                {
                    $single_mini_bar = 'no';
                }
            
                if (isset ($_POST['single_room_food'])) 
                {
                    $single_food = 'yes';
                }
                else 
                {
                    $single_food = 'no';
                }

                if (isset ($_POST['single_room_ac'])) 
                {
                    $single_ac = 'yes';
                }
                else 
                {
                    $single_ac = 'no';
                }
                
                if (isset ($_POST['double_room_minibar'])) 
                {
                    $double_mini_bar = 'yes';
                }
                else 
                {
                    $double_mini_bar = 'no';
                }

                if (isset ($_POST['double_room_food'])) 
                {
                    $double_food = 'yes';
                }
                else 
                {
                    $double_food = 'no';
                }

                if (isset ($_POST['double_room_ac'])) 
                {
                    $double_ac = 'yes';
                }
                else 
                {
                    $double_ac = 'no';
                }

                if (isset ($_POST['family_room_minibar'])) 
                {
                    $family_mini_bar = 'yes';
                }
                else 
                {
                    $family_mini_bar = 'no';
                }

                if (isset ($_POST['family_room_food'])) 
                {
                    $family_food = 'yes';
                }
                else 
                {
                    $family_food = 'no';
                }
            
                if (isset ($_POST['family_room_ac'])) 
                {
                    $family_ac = 'yes';
                }
                else 
                {
                    $family_ac = 'no';
                    echo "noAC";
                }

                if (isset ($_POST['massive_room_minibar'])) 
                {
                    $massive_mini_bar = 'yes';
                }
                else 
                {
                    $massive_mini_bar = 'no';
                }

                if (isset ($_POST['massive_room_food'])) 
                {
                    $massive_food = 'yes';
                }
                else 
                {
                    $massive_food = 'no';
                }

                if (isset ($_POST['massive_room_ac'])) 
                {
                    $massive_ac = 'yes';
                }
                else 
                {
                    $massive_ac = 'no';
                }
                
                $sql1 = "INSERT INTO hotel_rooms VALUES (LAST_INSERT_ID(), 'single', '$single_count',1, '$single_food', '$single_mini_bar', '$single_ac', '$single_price')";
                $result1=$con->query($sql1);
                if($result1){
                    $status=FALSE;
                    // echo "yes1";
                }else{
                    echo  "Error: " . $db->error;
                    mysqli_close($db);
                }
                
            
                $sql2 = "INSERT INTO hotel_rooms VALUES (LAST_INSERT_ID(), 'double', '$double_count',2, '$double_food', '$double_mini_bar', '$double_ac', '$double_price')";
                $result2=$con->query($sql2);
                if($result2){
                    $status=FALSE;
                    //echo "yes2";
                }else{
                    echo  "Error: " . $con->error;
                    mysqli_close($db);
                }
                
                $sql3 = "INSERT INTO hotel_rooms VALUES (LAST_INSERT_ID(), 'family', '$family_count',4, '$family_food', '$family_mini_bar', '$family_ac', '$family_price')";
                $result3=$con->query($sql3);
                if($result3){
                    $status=FALSE;
                    // echo "yes3";
                }else{
                    echo  "Error: " . $db->error;
                    mysqli_close($con);
                }
                
                $sql4 = "INSERT INTO hotel_rooms VALUES (LAST_INSERT_ID(), 'massive', '$massive_count','$massive_capacity', '$massive_food', '$massive_mini_bar', '$massive_ac', '$massive_price')";
                $result4=$con->query($sql4);
                if($result4){
                    $status=FALSE;
                    // echo "yes4";
                }else{
                    echo  "Error: " . $con->error;
                    mysqli_close($con);
                    
                }
                $sql5 = "INSERT INTO hotel_images VALUES (LAST_INSERT_ID(), NULL, '$images')";
                $result5=$con->query($sql5);
                    if($result5){
                    $status=FALSE;
                    //echo 'yes';
                }else{
                    echo  "Error: " . $con->error;
                    mysqli_close($con);
                
            }
            session_destroy();
        }
}
    header('location: ../../pages/unregistered/log_in.php');
?>