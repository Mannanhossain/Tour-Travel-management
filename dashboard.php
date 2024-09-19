<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
    <style>
        .container a{
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            color: blue;
            color:red;
            
        }
        .container a:hover{
            color:orange;
            background-color: #2b6856;
            transition: 800ms ease-in-out 0s;
        }
        .container h2{
            text-align:center;
            font-style:italic;
            text-decoration:underline;
            font-weight:bold;
           
        }
        #out{
            color: blue;
             /* background-color: #254cb7; */
             font-size: 26px;
             margin-left: 4rem;
             border-radius: 3px;
             border:2px solid black;
             /* background-color: red; */

        }
    </style>
</head>
<body>
    <div class="container">
        <h2>DASHBOARD</h2>
        <a href="../customer.php" target="c">▶Customer feedback</a>
        <br>
        <br>
        <a href="../user_recrd.php" target="c">▶User Record</a>
        <br>
        <br>
        <a href="../bookig_recrd.php" target="c">▶Booking Record</a>
        <br>
        <br>
        <a href="../tour.php" target="c">▶Destination add</a>
        <br> <br> <br> <br> <br> <br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <a href="http://localhost/final_project/index.php/" target="_top" id="out">▶LOG OUT</a>
     
    </div>
    
    
</body>
</html>