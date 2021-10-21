<?php
//include the database connection file
include '../../db/db_connection.php';

/*---------------------------------------------------------Send an OTP to the Email-----------------------------------------------------------------------*/

if(isset($_POST['otp_send_btn'])){
    $user_email = mysqli_real_escape_string($con,$_POST['username_fogot_pw']);

    if(empty($user_email)){
        header('location: ../../pages/unregistered/forgot_pw_step1.php?error=Username is required');
    }else{
        //check whether an existing traveler

        $sqlForExistedTraveler = "SELECT * FROM travelers WHERE email = '$user_email' LIMIT 1";
        $resultForExistedTraveler = mysqli_query($con,$sqlForExistedTraveler);

        $sqlForExistedVehicle = "SELECT * FROM vehicle_owners WHERE email = '$user_email' LIMIT 1";
        $resultForExistedVehicle = mysqli_query($con,$sqlForExistedVehicle);
        
        if (mysqli_num_rows($resultForExistedTraveler) > 0) {
            while ($rows = mysqli_fetch_array($resultForExistedTraveler)){
                $existing_traveler_email = $rows['email'];
                $traveler_name = $rows['name'];
                $existing_otp = $rows['otp'];
            }

            //send the email if the entered email is existing in the database
            if($user_email == $existing_traveler_email){
                $traveler_otp = rand(1000, 9999); //Generate a random otp number

                //check whethere the otp is already exist
                if($traveler_otp == $existing_otp){
                    $traveler_otp = rand(1000, 9999); //if exists,generate a new otp
                }else{
                    //update the 'otp' column of travelers database
                    $sqlForUpdateOtp = "UPDATE travelers SET otp = '$traveler_otp' WHERE email = '$user_email' ";

                    //create the body of the email
                    if(mysqli_query($con, $sqlForUpdateOtp)){
                        $mail_subject = "OTP for reset password";
                        $mail_upper_body = "Hello {$traveler_name} ,";
                        $mail_middle_boddy = "Your OTP for reset password is {$traveler_otp}";

                        //send the mail using php mail() function
                        $send_mail_result = mail($existing_traveler_email, $mail_subject, $mail_middle_boddy, $mail_upper_body);

                        if($send_mail_result){
                            header('location: ../../pages/unregistered/forgot_pw_step2.php?user_email='.$existing_traveler_email);//redirect to step 2 if mail sent successfully
                        }else{
                            header('location: ../../pages/unregistered/forgot_pw_step1.php?error=Email not sent');
                        }
                    }else{
                        header('location: ../../pages/unregistered/forgot_pw_step1.php?error=Please try again');
                    }

                }
            }
        }elseif (mysqli_num_rows($resultForExistedVehicle) > 0) {
            while ($rows = mysqli_fetch_array($resultForExistedVehicle)){
                $existing_vehicle_email = $rows['email'];
                $vehicle_name = $rows['owner_name'];
                $existing_otp = $rows['otp'];
            }

            //send the email if the entered email is existing in the database
            if($user_email == $existing_vehicle_email){
                $vehicle_otp = rand(1000, 9999); //Generate a random otp number

                //check whethere the otp is already exist
                if($vehicle_otp == $existing_otp){
                    $vehicle_otp = rand(1000, 9999); //if exists,generate a new otp
                }else{
                    //update the 'otp' column of travelers database
                    $sqlForUpdateOtp = "UPDATE vehicle_owners SET otp = '$vehicle_otp' WHERE email = '$existing_vehicle_email' ";

                    //create the body of the email
                    if(mysqli_query($con, $sqlForUpdateOtp)){
                        $mail_subject = "OTP for reset password";
                        $mail_upper_body = "Hello {$vehicle_name} ,";
                        $mail_middle_boddy = "Your OTP for reset password is {$vehicle_otp}";

                        //send the mail using php mail() function
                        $send_mail_result = mail($existing_vehicle_email, $mail_subject, $mail_middle_boddy, $mail_upper_body);

                        if($send_mail_result){
                            header('location: ../../pages/unregistered/forgot_pw_step2.php?user_email='.$existing_vehicle_email);//redirect to step 2 if mail sent successfully
                        }else{
                            header('location: ../../pages/unregistered/forgot_pw_step1.php?error=Email not sent');
                        }
                    }else{
                        header('location: ../../pages/unregistered/forgot_pw_step1.php?error=Please try again');
                    }

                }
            }
        }else{
            header('location: ../../pages/unregistered/forgot_pw_step1.php?error=Not Found Email');
        }
    }   

}

/*----------------------------------------------------------------------Enter OTP -------------------------------------------------------- */

if(isset($_POST['enter_otp_btn'])){
    $sent_otp = mysqli_real_escape_string($con,$_POST['otp_fogot_pw']);
    $sent_email = mysqli_real_escape_string($con,$_POST['sentEmail']);

   // echo $sent_otp;
   // echo $sent_email;

    $sqlForExistingOtp = "SELECT otp FROM travelers WHERE email = '$sent_email' ";
    $resultForExistingOtp = mysqli_query($con, $sqlForExistingOtp);

    $sqlForExistingVehicleOtp = "SELECT otp FROM vehicle_owners WHERE email = '$sent_email' ";
    $resultForExistingVehicleOtp = mysqli_query($con, $sqlForExistingVehicleOtp);


    //echo $resultForExistingOtp;


    if (mysqli_num_rows($resultForExistingOtp)>0){
        while($rows = mysqli_fetch_array($resultForExistingOtp)){
            $existingOtpAfterUpdate = $rows['otp'];
        }
        if($sent_otp == $existingOtpAfterUpdate){
            //header('location: ../../pages/unregistered/forgot_pw_step3.php');
            header('location: ../../pages/unregistered/forgot_pw_step3.php?user_email='.$sent_email);
        }else{
            header('location: ../../pages/unregistered/forgot_pw_step2.php?error=Invalid OTP. Try Again');
        }
    }if (mysqli_num_rows($resultForExistingVehicleOtp)>0){
        while($rows = mysqli_fetch_array($resultForExistingVehicleOtp)){
            $existingOtpAfterUpdate = $rows['otp'];
        }
        if($sent_otp == $existingOtpAfterUpdate){
            //header('location: ../../pages/unregistered/forgot_pw_step3.php');
            header('location: ../../pages/unregistered/forgot_pw_step3.php?user_email='.$sent_email);
        }else{
            header('location: ../../pages/unregistered/forgot_pw_step2.php?error=Invalid OTP. Try Again');
        }
    }
}

/*--------------------------------------------------------------------Update Password----------------------------------------------------------------*/

if(isset($_POST['update_pw_btn'])){
    $new_password = mysqli_real_escape_string($con,$_POST['new_fogot_pw']);
    $confirm_password = mysqli_real_escape_string($con,$_POST['confirm_fogot_pw']);
    $sent_email = mysqli_real_escape_string($con,$_POST['sentEmail']);

    if($new_password == $confirm_password){
        $new_password = password_hash($new_password, PASSWORD_DEFAULT); // Password hashing

        $sqlForExistingTraveler = "SELECT * FROM travelers WHERE email = '$sent_email' ";
        $resultForExistingTraveler = mysqli_query($con, $sqlForExistingTraveler);
    
        $sqlForExistingVehicle = "SELECT * FROM vehicle_owners WHERE email = '$sent_email' ";
        $resultForExistingVehicle = mysqli_query($con, $sqlForExistingVehicle);

        if(mysqli_num_rows($resultForExistingTraveler)>0){
            while($rows = mysqli_fetch_array($resultForExistingTraveler)){
                $existingTravelerEmail = $rows['email'];
            }
            if($sent_email == $existingTravelerEmail){
                $sqlForUpdatePw = "UPDATE travelers SET password = '$new_password' WHERE email = '$sent_email' ";
                //$updatePwResults = mysqli_query($con, $sqlForUpdatePw);        
                if(mysqli_query($con, $sqlForUpdatePw)){
                    header('location: ../../pages/unregistered/log_in.php');
                }else{
                    echo "Error:".$con->error;
                }
            }
        }if(mysqli_num_rows($resultForExistingVehicle)>0){
            while($rows = mysqli_fetch_array($resultForExistingVehicle)){
                $existingVehiclerEmail = $rows['email'];
            }
            if($sent_email == $existingVehiclerEmail){
                $sqlForUpdatePw = "UPDATE vehicle_owners SET password = '$new_password' WHERE email = '$sent_email' ";
                //$updatePwResults = mysqli_query($con, $sqlForUpdatePw);        
                if(mysqli_query($con, $sqlForUpdatePw)){
                    header('location: ../../pages/unregistered/log_in.php');
                }else{
                    echo "Error:".$con->error;
                }
            }
        }
    }else{
        header('location: ../../pages/unregistered/forgot_pw_step3.php?error=Passwords does not match');
    }

}

?>
