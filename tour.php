<?php
$alart= false;
$alart1= false;
if(isset($_POST['name'])){
     $server="localhost";
    $username="root";
    $password="";
    $db="mannan";

    $con=mysqli_connect($server,$username,$password,$db);

    if(!$con){
        die("connect database faild".mysqli_connect_error());

    }
    //  echo"connect to database";
    $name = $_POST['name'];
    $para= $_POST['para'];
    $price = $_POST['price'];

    $sql ="INSERT INTO `tour` (`place`, `para`, `price`) VALUES ('$name', '$para', '$price');";

    // echo "$sql";
    $response=mysqli_query($con,$sql);
    if($response){
        $alart=true;
    }else{
      $alart1=true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: 1px solid black;
    display: flex;
    height: 22rem;
    /* margin-top: 7rem; */
    width: 36rem;
    margin: 4rem auto;
    border-radius: 12px;
    background-color: palegoldenrod;
    box-shadow: 3px 4px 46px 26px violet;

    }
        input, label, button{
            margin: 0.4rem auto;
    width: 21rem;
    height: 2rem;
    border-radius: 0.5rem;
    }
    button:hover{
        background-color:blue;
        color:white;
    }

    </style>
   
</head>
<body>
<form action="tour.php" method="post">
        <label for="name">

     Place:<input type="text" name="name" id="name" required placeholder="Place:">
    </lable><br>
        <label for="para"><BR>
          Para <input type="text" name="para" id="para" requred placeholder="description:">
    </lable><BR>
    <label for="price">
           Price: <input type=" text" name="price" id="Price" required >
    </lable><br>
   
        <button type="submit" name="submit" id="submit">submit
    </form>    
    </div>   
</body>
</html>
