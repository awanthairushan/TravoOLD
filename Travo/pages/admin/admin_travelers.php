<?php
  session_start();
  if(isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $result = require '../../db/db_admin_traveler.php';
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-TRAVELERS</title>
    <link rel="stylesheet" href="../../css/admin/admin_travelers.css">

</head>
<body>
<section class="admin-travelers">
    <!--Start Navigation bar-->
    <?php include '../../repeatable_contents/nav_bar_admin.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_admin.css'; ?>  </style>
    <!--End Navigation bar-->

<!-- .....................modal box for traveler remove...................... -->
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
<!-- .....................ebd of modal box for traveler remove...................... -->



<div class="main">

    <h1 class="heading-one">REGISTERED TRAVELERS</h1>

    <!--Start search option-->
        <label for="filter" class="filter-labels">SEARCH BY :</label>
        <select name="filter" id="filter" class="filter-input">
            <option value="fname" selected>NAME</option>
            <option value="faddress">ADDRESS</option>
            <option value="fcity">CITY</option>
            <option value="femail">EMAIL ADDRESS</option>
            <option value="fcontact">CONTACT NUMBER</option>
        </select>
        <input type="text" name="search" id="search" class="search-input" placeholder="Enter Value"><br>
    <!--End search option-->

<!--Start "Registered traveler" table-->
<div class="table">
    <table class="content-table" id="traveler_table" >
        <thead>
            <tr>
                <th>NO</th>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>CITY</th>
                <th>EMAIL</th>
                <th>CONTACT NO 1</th>
                <th>CONTACT NO 2</th>
                <th>COMPLETED TRIPS</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="scroll">

        <?php
            while ($rows = mysqli_fetch_array($result)){

            echo "<tr>
                <td>".$rows['row_no']."</td>
                <td>".$rows['name']."</td>
                <td>".$rows['address_line1'].$rows['address_line2']."</td>
                <td>".$rows['city']."</td>
                <td>".$rows['email']."</td>
                <td>".$rows['contact1']."</td>
                <td>".$rows['contact2']."</td>
                <td></td>
                <td>
                <form method='post' action=' '>
                    <input type='hidden' value='$rows[0]' name=con_id>
                    <input type='button' id='removebtn' value='REMOVE'>
                </form>
                </td>
            </tr>";
        }
            ?>
            <!--  <tr>
                <td>Amarabandu Rupasinghe</td>
                <td>Address</td>
                <td>amare@yahoo.com</td>
                <td>011234567</td>
                <td>Link</td>
                <td>02</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>Amarabandu Rupasinghe</td>
                <td>Address</td>
                <td>amare@yahoo.com</td>
                <td>011234567</td>
                <td>Link</td>
                <td>02</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>Amarabandu Rupasinghe</td>
                <td>Address</td>
                <td>amare@yahoo.com</td>
                <td>011234567</td>
                <td>Link</td>
                <td>02</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>Amarabandu Rupasinghe</td>
                <td>Address</td>
                <td>amare@yahoo.com</td>
                <td>011234567</td>
                <td>Link</td>
                <td>02</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>Awantha Irushan</td>
                <td>Address</td>
                <td>amare@yahoo.com</td>
                <td>011234567</td>
                <td>Link</td>
                <td>02</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>Viranga Gunarathna</td>
                <td>Address</td>
                <td>amare@yahoo.com</td>
                <td>011234567</td>
                <td>Link</td>
                <td>02</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>Amarabandu Rupasinghe</td>
                <td>Address</td>
                <td>amare@yahoo.com</td>
                <td>011234567</td>
                <td>Link</td>
                <td>02</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>Amarabandu Rupasinghe</td>
                <td>Address</td>
                <td>amare@yahoo.com</td>
                <td>011234567</td>
                <td>Link</td>
                <td>02</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>Amarabandu Rupasinghe</td>
                <td>Address</td>
                <td>amare@yahoo.com</td>
                <td>011234567</td>
                <td>Link</td>
                <td>02</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>Amarabandu Rupasinghe</td>
                <td>Address</td>
                <td>amare@yahoo.com</td>
                <td>011234567</td>
                <td>Link</td>
                <td>02</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>Amarabandu Rupasinghe</td>
                <td>Address</td>
                <td>amare@yahoo.com</td>
                <td>011234567</td>
                <td>Link</td>
                <td>02</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr> -->

        </tbody>
    </table>
</div>
<!--End "Registered vehicle" table-->


</section>
<!--JS file for search & filter-->
    <script src="../../script/admin/admin_filter_travelers.js"></script>
<!-- JS file for delete_modal -->
<script type="text/javascript" src="../../script/admin/admin_traveler_remove.js"></script>
</body>
</html>

<?php
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
