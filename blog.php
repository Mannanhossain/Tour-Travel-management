
<?php
include '../partials/nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafri Travel & Tourism-Blog</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">

    <style>
        h2,
        p {
            text-align: center;
            margin:30px auto;
         }

        .main_container,
        .second_container {
            display: flex;
            margin: 30px 159px;

        }

        .container p {
            margin: 59px 15px;
            font-size: 20px;
        }

        @media (max-width: 1000px) {
            .main_container,
            .second_container {
                display: block;
                margin: 30px 1rem;
            }

            .container p {
                margin: 30px 1rem;
            }
        }
    </style>
</head>

<body>
    <hr>
    <h2>I'm off to Maldives for 3 weeks!</h2>
    <p>Uplodated:8/8/22| August 8th,2022</p>
    <div class="main_container">

        <div class="container">
            <img src="../img/maldives.jpg" width="300px" height="200" alt="">
        </div>
        <div class="container">

            <p>SO I,m taking a one weeks vaction leave from Monday, June 1st to Tuesday, June 15th, julia will be
                handiling QA while I 'm away .<a href="#" style="text-decoration: none;">Read more.</a></p>
        </div>
    </div>
    <hr>
    <h2>I'm off to France for 2 weeks!</h2>
    <p>Uplodated:8/8/22| June 8th,2022</p>
    <div class="second_container">

        <div class="container">
            <img src="../img/france.jpg" width="300px" height="200" alt="">

        </div>
        <div class="container">

            <p>SO I,m taking a one weeks vaction leave from Monday, May 81st to Tuesday, july 15th, julia will be
                handiling QA while I 'm away .<a href="#" style="text-decoration: none;">Read more.</a></p>
        </div>
    </div>
    <hr>
<?php

include '../partials/footer.php';
?>

</body>

</html>