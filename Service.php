<?php
include '../partials/nav.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafri Travel $ Tourism-Service</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <style>
        .container {
            display: flex;
            justify-content: center;
        }

        .service {
            /* border: 1px solid black; */
            width: 17rem;
            height: 16rem;
            margin: 8rem 22px;
            padding: 10px 17px;

        }
        .service h4{
            text-align: center;
            font-size: 21px;
        }
        .service p{
            opacity: 0.7;
            margin-left: 20px;
           
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="service">
           
           <h4>24/7 CONCICRGE SERVICE</h4>
           <p>Avilable round-the-cloc,your perosonal cocierge will handle all the details, from last-minute itinerary change to exquisite local experiences.</p>
        </div>
        <div class="service">
          <h4>CURATED PROPERTIES</h4>
          <p>Equipped with high-end amenites in the world's most stunning locations, each one of out 4000+ villas is carefully handpicked using a 240+ checklist.</p>

        </div>
        <div class="service">
            <h4>BEST RATE GUARANTEE</h4>
            <p>Because your time is valuable,we offer price matching on our luxury villas so you can rest assured that you are getting the best value.</p>

        </div>
    </div>
<?php

include '../partials/footer.php';

?>
</body>
</html>