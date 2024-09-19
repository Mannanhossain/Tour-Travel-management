<?php
 session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   
    header("location:../login_page.php/");
    exit;
}
?>
<?php
  $server="localhost";
  $username="root";
  $password="";
  $db="mannan";
  
  $con=mysqli_connect($server,$username,$password,$db);
  
  if(!$con){
      die("connect database faild".mysqli_connect_error());
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
    <link rel="stylesheet" href="../admin/style.css">

    <script src="../admin/search.js"></script>
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
            <caption>USER INFORMATION</caption>
            <tr>
                <th id="th">Sno</th>
                <th id="th">Username</th>
                <th id="th">Email</th>
                <th id="th">date&time</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM  `user-info`";
        $query_run =mysqli_query($con,$query);
        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row){
                // echo $row['username'];
                ?>
                    <tr>
                        <td id="th"><?php echo $row['sno'];?></td>
                        <td id="th"><?php echo $row['username'];?></td>
                        <td id="th"><?php echo $row['email'];?></td>
                        <td id="th"><?php echo $row['dt'];?></td>
                     </tr>

                <?php
            }
        }
        else
        {
            ?>
            <tr>
                <td>No record found</td>
            </tr>

            <?php
            }
        ?>          
        </tbody>
    </table>
</div>  
</body>
</html>