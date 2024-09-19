<?php
include '../partials/nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafri Travel & Tourism-Contact</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">

    <style>
        .container {
            text-align: center;
            margin: 8rem auto;
            height: 20rem;
            width: 56rem;
            border: 1px solid black;
            box-shadow: 6px 10px 15px gray;
            background-color: #f0dbe9;
            border-radius: 38px;
}
        
        .container h2 {
            text-align: center;
            margin: 34px auto;
            background-color: #d5d522;
            width:15rem;
            height: 2rem;
            border: 1px solid black;
            border-top-right-radius: 24px;
            border-bottom-left-radius: 23px;

        }

        .container li {
            list-style: none;
            display: inline;
            margin:38px;
            
        }
        .container li:hover{
            opacity: 0.4;   
        }
        @media (max-width: 1000px) {
            .container {
                width: 90%;
                margin: 4rem auto;
            }

            .container h2 {
                width: 12rem;
                margin: 24px auto;
            }

            .container li {
                margin: 18px;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Contact details</h2>
        <img src="../img/favicon.png" width="100px" height=80px" alt="">
        <ul>
            <li><a href="https://www.facebook.com/mannan.hossen.522/about"><img src="../img/Facebook-logo.png" alt="" width="50px" height="30px"></a></li>
            <li><a href="https://www.instagram.com/mannanhossen/"><img src="../img/Instagram-logo.png" alt="" width="50px" height="30px"></a></li>
            <li><a href="#"><img src="../img/youtube-logo.png" alt="" width="50px" height="35px"></a></li>
           </ul>
           <div id="contact_add">
           
            <ul>
                <li><img src="../img/location.png" width="25px" height="18px" alt=""> 733124, West Bengal, D/Dinajpur,Gangarampur </li>
                <li><img src="../img/call.png" width="20px" height="15px" alt="">   8918523121</li>
                <li><img src="../img/email.png" width="20px" height="15px" alt="">   mannanhossen5@gamil.com</li>
                <li><img src="../img/www.png" width="20px" height="15px" alt="">   www.Tafri.com</li>

            </ul>

        </div>
    </div>
    
    <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d48031.346972033716!2d88.57671986312053!3d25.38855670523392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1682788633478!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
<?php

include '../partials/footer.php';
?>
</body>
</html>