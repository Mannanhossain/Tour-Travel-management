<?php
include '../partials/nav.php';
    $alert = false;
    $match = false;
    $exists = false; 
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
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // $wrong=false;

    //password exist
    $existSql = "SELECT * FROM `user-info` WHERE`password`= '$password'";
    $response=mysqli_query($con,$existSql);
    // $numExistRows = mysqli_num_rows($response);
    $numExistRows= $response->num_rows;
    
    if($numExistRows > 0){
        $exists = true;
        // $match= "Password Already Exists";
    }
    else{
        
        if(($password == $cpassword)){
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user-info` (`sno`, `username`, `email`, `password`, `cpassword`, `dt`) VALUES (NULL, '$username', '$email', '$hash', '$hash', current_timestamp());";
        
            $response=mysqli_query($con,$sql);
            if($response){
                $alert = true;
                // echo"Successfull Your account created  and you can login";
            }else{
                echo " Inserting Error ";
            }
        }
        else{
            $match = true;
        }
     }
}  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafri Travel & Tourism-Signup</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <h1></h1>
    <div class="container">
        <h1  style=color:white;>Sign up</h1>

        <?php
    if($alert){
        echo "<strong>Successfull,</strong> Your account created  and you can login";
    }
    ?>
        <?php
    if($match){
        echo "<strong>Password,</strong> not match";
    }
    ?>
        <?php
    if($exists){
        echo "<strong>Try</strong> different password";
    }
    ?>
        <form action="signup.php" method="post">
        <label for="username" style="color:antiquewhite;">

            NAME:<input type="text" name="username" id="username" required placeholder="Username:">
</lable>
        <label for="email"><BR>
          EMAIL:  <input type="email" name="email" id="email" requred placeholder="Email:">
</lable><BR>
<label for="password">
           PAWD: <input type="password" name="password" id="password" required placeholder="Password:">
    </lable><br>
    <label for="cpassword">
           CPWD: <input type="password" name="cpassword" id="cpassword" required placeholder="Confirm password:">
    </lable>
            <button type="submit" name="submit" id="submit">Signup
        </form>
        </p><a href="../login_system/login.php" style="color:red";> Or Login here</a>
    </div>

<?php
include '../partials/footer.php';
?>
</body>
</html>