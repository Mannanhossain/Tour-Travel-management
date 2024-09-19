<?php
include '../partials/nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafri Travel & Tourism-about us</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">

    <style>
        .container {

            margin-top: 3rem;
            margin-left: 23rem;

            width: 35rem;
        }
        .container h1 {

            background-color: #d5d522;
            width: 12rem;
            height: 3rem;
            border: 1px solid black;
            border-top-right-radius: 24px;
            border-bottom-left-radius: 23px;
        }

        .client {
            /* border: 1px solid black; */
            text-align: center;
            margin-top: 6rem;
        }

        .client p {
            opacity: 0.5;
            margin: 3px 11rem;
        }

        section {
            display: flex;
            justify-content: center;
        }

        .before,
        .after {
            /* border: 1px solid black; */
            margin: 20px 200px;
            width: 8%;
        }
        .before p,.after p {
            margin-top: -20px;
            opacity: 0.7;
            padding: 1px 29px;
            margin-left: 33px;

        }

        @media (max-width: 1000px) {
            .container {
                margin: 3rem 1rem;
                width: auto;
            }

            .client p {
                margin: 3px 1rem;
            }

            .before,
            .after {
                margin: 20px 1rem;
            }
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>ABOUT US</h1>
        <div class="para">

            <p>Like you ,We had no idea who to trust for travel advice.</p>
            <p> That is why we made Tafri travel ,a travel site written by real expert,not anoymous review .OUt write
                are locals wtih hometown pride, parents who are road trip heroes, cruise junkies who know every ship at
                sea, and virtually everyone else in between.</p>
            <p>As one of the top-10 travel information sites in the world as measured by comScore, a leading internet
                measurement company, we have more than 50 write from lifetime loal to licensed tour guides -sharign
                useful travel advice and inspiration from destiantins around the world . TafriTravel has been honored by
                multiple awards since its inception, including the "Eppy Awards", the "W3 Awards" , and the
                "communicator Awards".</p>
        </div>
    </div>
    <div class="client">
        <h1>YEARS STATISTICS</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur hic officiis praesentium vitae illo,
            tempora quisquam inventore alias id voluptates ipsum, laboriosam ipsa, corporis libero voluptate modi.
            Praesentium, officiis modi!</p>
    </div>
    <section>

        <div class="before">
            <h4 align="center" style="color:yellowgreen">2021</h4>
            <h2>1642</h2>
            <p>client</p>
            <h2>543</h2>
            <p>Returning clients</p>
            <h2>11546</h2>
            <p>Reach</p>
            <h2>3730</h2>
            <p>Items</p>

        </div>
        <div class="after">
            <h4 align="center" style="color:yellowgreen">2023</h4>
            <h2>3527</h2>
            <p>client</p>
            <h2>145</h2>
            <p>Returning clients</p>
            <h2>9321</h2>
            <p>Reach</p>
            <h2>17429</h2>
            <p> More items</p>

        </div>
    </section>
<?php

include '../partials/footer.php';
?>
</body>
</html>