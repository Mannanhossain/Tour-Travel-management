<?php
   $login = false;
    $match = false;
    $flag =false;
    
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $server="localhost";
    $username="root";
    $password="";
    $db="mannan";
    
    $con=mysqli_connect($server,$username,$password,$db);
    
    if(!$con){
        die("connect database faild".mysqli_connect_error());
    }
    // echo"connect to database";
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "Select * from `admin` where username='$username' AND password='$password'";
    // $sql = "Select * from `admin` where username='$username'";
    
    $response = mysqli_query($con,$sql);
    $num = mysqli_num_rows($response);
        if ($num >= 1){
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header('location:../login_system/admin/admin_page.php');
                }else{
                        $match = true;
                    }
}
?>
<?php
include '../partials/nav.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafri Travel & Tourism-Login</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./login.css">

</head>
<body>
<h1><marquee width="85%" behavior="alternate" style="color:white";>WELCOME MANNAN</marquee></h1>
<div class="container">
    <h1 style=color:white;>ADMIN LOGIN</h1>

    <?php
    if($login){
        echo "<strong>Welcome</strong>";
    }
    ?>
    <?php
    if($match){
        echo "<strong>Wrong,</strong>password";
    }
    ?>
   <form action="admin.php" method="post">
            <label for="username" style="color:antiquewhite;">

           NAME: <input type="text" name="username" id="username" required placeholder="Username:">
</lable><BR>
    <label for="password">

         PAWD:<input type="password" name="password" id="password" required placeholder="Password:">

</lable> <br>
<input type="checkbox" style="width:15px; position:absolute; margin:-8px -19px;" onclick="myFunction()">Show Password

            <button type="submit" name="submit" id="submit">Login
    </form>         
</div>
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
