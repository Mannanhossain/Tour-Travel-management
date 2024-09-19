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
    
    // $sql = "Select * from `user-info` where username='$username' AND password='$password'";
    $sql = "Select * from `user-info` where username='$username'";
    $response = mysqli_query($con,$sql);
    $num = mysqli_num_rows($response);
        if ($num >= 1){
            while($row = mysqli_fetch_assoc($response)){
                if(password_verify($password,$row["password"])){
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header('location:../index1.php/');
                }else{
                        $match = true;
                    }
            }
        }
        else{
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
    <link rel="stylesheet" href="../style1.css">

</head>
<body>
<div class="container">
    <h1  style=color:white;>Login</h1>

    <?php
    if($login){
        echo "<strong>Welcome</strong>";
    }
    ?>
    <?php
    if($match){
        echo "<strongs>Wrong,</strong>password";
    }
    ?>
   <form action="login.php" method="post">

            <label for="username" style="color:antiquewhite;">

          NAME:  <input type="text" name="username" id="username" required placeholder="Username:">
        </lable><br>
        <label for="password">
            PAWD:<input type="password" name="password" id="password" required placeholder="Password:">
        </lable><br>
        <input type="checkbox" style="width:15px; position:absolute; margin:-8px -19px;" onclick="myFunction()">Show Password
           
            <button type="submit" name="submit" id="submit" id="button">Login
    </form>
            <p>Create your account</p><a href="../login_system/signup.php" id="button" style="color:red";>Or Sign up</a>         
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
<?php
include '../partials/footer.php';
?>