
    <?php
    echo
    '<div class="nav_bar-div">
    <br>
    <table class="nav_bar-table">
      <tr>
        <td> <img class="nav_bar-logo" src="../../images/Logo/Travo.png" alt="LOGO"> </td>
        <td></td>
        <td></td>
        <td class="navigations_name"><a href="../../pages/traveler/traveler_home.php">HOME</a></td>
        <td class="navigations_name"><a href="../../pages/traveler/traveler_faq.php">FAQ</a></td>
        <td class="navigations_name"><a href="../../pages/traveler/traveler_home.php#about_us-section">ABOUT</a></td>
        <td class="navigations_name"><a href="#contact_us-section">CONTACT</a></td>
        <td class="navigations_name"><a href="../../pages/traveler/traveler_feedback list.php">FEEDBACK</a></td>
        <td class="navigations_name"><a href="../../pages/traveler/traveler_trip_to_go.php">MY TRIPS</a></td>
        <td class="navigations_name"><a href="../../pages/traveler/traveler_vehicle.php">VEHICLES </a></td>
        <td> </td>
        <td>
            <div class="dropdown">
                <img class="nav_bar-logo" src="../../images/icons/user.png">
                <div class="dropdown-content">
                    <div class="drop-title">',$_SESSION['name'],'</div>
                    <div class="drop-box"><a class="drop-nav" href=../../pages/traveler/traveler_update.php>UPDATE</a></div>
                    <div class="drop-box"><button class="deleteAccount_btn" id="deleteAccount_btn">DELETE ACCOUNT</button></div>                    
                    <div class="drop-box"><a class="drop-nav" href="../../pages/traveler/traveler_feedback list.php">GIVE FEEDBACKS</a></div>
                    <div class="drop-box"><a class="drop-nav" href=../../php/unregistered/end-log_out.php>LOG OUT</a></div>
                </div>
            </div>
        </td>
        <td></td>
      </tr>
    </table>
    <div class="delete_modal">
      <div class="deleteAccount_confirm_box">
            <h3>Delete Account</h3>
            <hr>
            <p>There is no recovery option. Are you sure you want to delete this account ?</p>
            <hr>
            <button type="button" name="delete_confirm_btn" class="delete_confirm_btn" id="delete_confirm_btn">DELETE ACCOUNT</button>
            <button type="button" name="delete_cancel_btn" class="delete_cancel_btn" id="delete_cancel_btn">CANCEL</button>
      </div>
      </div>
  </div>
'; ?>
