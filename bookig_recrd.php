
<?php
$server="localhost";
$username="root";
$password="";
$db="mannan";
$con = mysqli_connect($server,$username,$password,$db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
    <script src="../admin/search.js"></script>
    <link rel="stylesheet" href="../admin/style.css">

</head>
<body>
    <div class="container">
    <form>
            <i class="fa fa-search">
                <input type="text" id="search-items" placeholder="Searching record..." onkeyup="search()">
                <!-- <button type="submit">Search</button> -->
        </form>
        <table id="td">
        <thead>
            <caption>BOOKING INFORMATION</caption>
            <tr>
                <th id="th">Sno</th>
                <th id="th">Username</th>
                <th id="th">Phone</th>
                <th id="th">Email</th>
                <th id="th">Adult</th>
                <th id="th">Children</th>
                <th id="th">Destination</th>
                <th id="th">date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query ="SELECT * FROM `booking`";
            $query_run = mysqli_query($con,$query);
            if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                    // echo $row['name'];
                ?>
                    <tr>
                         <td id="th"><?php  echo $row['sno'];?></td>
                         <td id="th"><?php  echo $row['name'];?></td>
                         <td id="th"><?php  echo $row['phone'];?></td>
                         <td id="th"><?php  echo $row['email'];?></td>
                         <td id="th"><?php  echo $row['adult'];?></td>
                         <td id="th"><?php  echo $row['children'];?></td>
                         <td id="th"><?php  echo $row['destination'];?></td>
                         <td id="th"><?php  echo $row['date'];?></td>
                     </tr>

                 <?php
                }
            }
?>
        <tboyd>   
        </table>
    </div>    
</body>
</html>