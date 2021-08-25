<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-FEEDBACK</title>
    <link rel="stylesheet" href="../../css/admin/admin_feedback.css">

</head>
<body>
<section class="admin-travelers">
    <!--Start Navigation bar-->
    <?php include '../../repeatable_contents/nav_bar_admin.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_admin.css'; ?>  </style>
    <!--End Navigation bar-->
<div class="main">
    
    <h1 class="heading-one">FEEDBACKS</h1>
    <!--Start search option-->
        <label for="filter" class="filter-labels">SEARCH BY DATE :</label>
        <input type="text" name="search" id="search" class="search-input" placeholder="YYYY-MM-DD">
        <td><input type="button" id="morebtn" value="SEARCH"></td>
    <!--End search option-->

<!--Start "Registered vehicle" table-->
<div class="table">
    <table class="content-table" id="conn_table" >
        <thead>
            <tr>
                <th>DATE</th>
                <th>FEEDBACK</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2021-08-22</td>
                <td>What is lorem ipsum lorem ipsum is simply dummy text of 
                    the printing and typesetting industry lorem ipsum has been 
                    the industry's standard dummy text ever since the 1500s 
                    when an unknown printer took a galley of type and scrambled 
                    it to make a type specimen book it has?</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>2021-08-22</td>
                <td>What is lorem ipsum lorem ipsum is simply dummy text of 
                    the printing and typesetting industry lorem ipsum has been 
                    the industry's standard dummy text ever since the 1500s 
                    when an unknown printer took a galley of type and scrambled 
                    it to make a type specimen book it has?</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>2021-08-22</td>
                <td>What is lorem ipsum lorem ipsum is simply dummy text of 
                    the printing and typesetting industry lorem ipsum has been 
                    the industry's standard dummy text ever since the 1500s 
                    when an unknown printer took a galley of type and scrambled 
                    it to make a type specimen book it has?</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>2021-08-22</td>
                <td>What is lorem ipsum lorem ipsum is simply dummy text of 
                    the printing and typesetting industry lorem ipsum has been 
                    the industry's standard dummy text ever since the 1500s 
                    when an unknown printer took a galley of type and scrambled 
                    it to make a type specimen book it has?</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>2021-08-22</td>
                <td>What is lorem ipsum lorem ipsum is simply dummy text of 
                    the printing and typesetting industry lorem ipsum has been 
                    the industry's standard dummy text ever since the 1500s 
                    when an unknown printer took a galley of type and scrambled 
                    it to make a type specimen book it has?</td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>2021-08-22</td>
                <td>What is lorem ipsum lorem ipsum is simply dummy text of 
                    the printing and typesetting industry lorem ipsum has been 
                    the industry's standard dummy text ever since the 1500s 
                    when an unknown printer took a galley of type and scrambled 
                    it to make a type specimen book it has?</td>
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