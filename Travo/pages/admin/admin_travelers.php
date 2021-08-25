<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    

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
<div class="main">
    
    <h1 class="heading-one">REGISTERED TRAVELERS</h1>
    <!--Start search option-->
        <label for="filter" class="filter-labels">SEARCH BY :</label>
        <select name="filter" id="filter" class="filter-input">
            <option value="vnumber">VEHICLE NUMBER</option>
            <option value="vnumber">ADDRESS</option>
        </select>
        <input type="text" name="search" id="search" class="search-input" placeholder="Enter Value"><br>
    <!--End search option-->

<!--Start "Registered vehicle" table-->
<div class="table">
    <table class="content-table" id="conn_table" >
        <thead>
            <tr>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>EMAIL</th>
                <th>CONTACT NO</th>
                <th>LOCATION</th>
                <th>COMPLETED TRIPS</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="scroll">
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

        </tbody>
    </table>
</div>
<!--End "Registered vehicle" table-->

  <!--<script src="../../JS/filter.js"></script>-->
</section>
</body>
</html>