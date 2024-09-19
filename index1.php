<?php
 session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   
    header("location:../index.php/");
    exit;
}
?>
<?php
    $sms=false;
if(isset($_POST['Name'])){
     $server="localhost";
    $username="root";
    $password="";
    $db="mannan";

    $con=mysqli_connect($server,$username,$password,$db);

    if(!$con){
        die("connect database faild".mysqli_connect_error());

    }
    //  echo"connect to database";
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $sql ="INSERT INTO `message` (`sno`, `name`, `email`, `subject`, `message`, `dt`) VALUES (NULL, '$name', '$email',  '$subject', '$message', current_timestamp());";

    // echo "$sql";
    $response=mysqli_query($con,$sql);
    if($response){
        $sms=true;
    }else{
        echo " Inserting Error ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Tafri travel-<?php $_SESSION['username']?></title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">

</head>
<body>
    <header>
         <div class="social-media">
            <ul id="social">
                <p id="time">◷ Mon-Sat 10am - 06.30pm. Sunday CLOSED </p>
                <li><a href="https://www.facebook.com/mannan.hossen.522/about"><img src="../img/Facebook-logo.png" alt="Fb"></a></li>
                <li id="space">/</li>
                <li><a href="https://www.instagram.com/mannanhossen/"><img src="../img/Instagram-logo.png" alt="inst"></a></li>
                <li id="space">/</li>
                <li><a href="#"><img src="../img/in-logo.png" alt="in"></a></li>
                <li id="space">/</li>
                <li><a href="#"><img src="../img/youtube-logo.png" alt="youtube"></a></li>
                <li id="space">/</li>
                <li><a href="#"><img src="../img/twiter-logo.png" alt="twiter"></a></li>
                <li id="space">//</li>
                <button><li><a href="../login_system/logout.php" id="logout">LOGOUT</a></li></button>
        </ul>
        </div>
        <section class="navbar_main">
            <nav>
                <ul id="navbar_primary">
                    <li><a href="#">Home</a></li>
                    <li id="space">/</li>
                    <li><a href="../navbar/about.php">About</a></li>
                    <li id="space">/</li>
                    <li><a href="../tour/view_tour.php">Our Tours</a></li>

                    <li id="space_second">_____</li>
                    <!-- <li id="heading">Tafri Travel</li> -->
                    <h1 id="heading">Tafri Travel</h1>
                    <li id="space_second">_____</li>

                    <li><a href="../navbar/service.php">Service</a></li>
                    <li id="space">/</li>
                    <li><a href="../navbar//blog.php">Blog</a></li>
                    <li id="space">/</li>
                    <li><a href="../navbar/contact.php">Contact Us</a></li>

                </ul>
            </nav>
        </section>
        <section>
            <div class="middle_content">
                <h4> Welcome <?php echo  $_SESSION['username'] ?></h4>
                <h1>Your Journey Begins</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, beatae.</p>
            </div>
            <div id="button">
                <a href="../tour/view_tour.php">View All Travel</a>
            </div>
        </section>
    </header>
    <div class="destination">
        <span id="left">_________________________________________</span>
        <span>|</span>
        <span id="heading">Find a Tour By destination</span>
        <span>|</span>
        <span id="right">_________________________________________</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eveniet tempore aliquid distinctio </p>
    </div>

    <div class="circle_card">
        <a href="../tour/booking.php" id="usa"><img src="../img/usa.jpg" alt="usa" </a>
            <a href="../tour/booking.php"><img src="../img/dubai.jpg" alt="dubai"></a>
            <a href="../tour/booking.php"><img src="../img/france.jpg" alt="france"></a>
            <a href="../tour/booking.php"><img src="../img/swizerland.jpg" alt="swizerland"></a>
    </div>
    <div class="circle_heading">
        <h3>USA</h3>
        <h3>DUBAI</h3>
        <h3>FRANCE</h3>
        <h3>SWIZERLAND</h3>
    </div>
    <section>
        <div class="maldives">
            <div id="maldives_box">
                <h2>MALDIVES DELUXE PACKAGE</h2>
           
                <p>The Maldives are known as “the tropical paradise” for reasons such as its beauty. This tropical
                    country has separated islands and islands are surrounded by its own lagoon. Each island has pure
                    white sandy beaches.
                    The sea covers 99% of the Maldives and it is where you can see beautiful fishes and corals. There
                    are over five thousand coral reefs and plenty of reef fish, corals, and many other marine lives you
                    could see underwater. Diving in the Maldives would be memorable. </p>
                <div id="button_book">
                    <a href="../tour/booking.php">BOOK NOW
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div id="box">
        <h2>THE BEST OFFERS WITH ROOMS</h2>
    </div>
    <div class="best_offer">
        <div class='items' id="box1">

            <h3 align="center" style="background-color:rgb(248, 208, 208) ;">GTAND CASTLE</h3>
            <img src="../img/grand.jpg" width="100%" height="47%" alt="">
            <h4 align="center" style="color: red; font-size: 40px;">$70</h4>
            <p id="p">Per night / Per person</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, quae.Lorem, ipsum dolor.</p>
            <a href="../tour/booking.php">BOOK NOW</a>

        </div>
        <div class='items' id="box1">
            <h3 align="center" style="background-color:rgb(248, 208, 208) ;">TURKEY HILLS</h3>
            <img src="../img/turki.jpg" width="100%" height="47%" alt="">
            <h4 align="center" style="color: red; font-size: 40px;">$50</h4>
            <p id="p" align="center">Per night / Per person</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, quae.Lorem, ipsum dolor.</p>
            <a href="../tour/booking.php">BOOK NOW</a>
        </div>
        <div class='items' id="box1">
            <h3 align="center" style="background-color:rgb(248, 208, 208) ;">ISLAND DREAM</h3>
            <img src="../img/island.jpg" width="100%" height="47%" alt="">
            <h4 align="center" style="color: red; font-size: 40px;">$80</h4>
            <p id="p" align="center">Per night / Per person</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, quae.Lorem, ipsum dolor.</p>
            <a href="../tour/booking.php">BOOK NOW</a>

        </div>
        <div class='items' id="box1">
            <h3 align="center" style="background-color:rgb(248, 208, 208) ;">DARJEELING TRAVEL</h3>
            <img src="../img/darjeeling.jpg" width="100%" height="47%" alt="">
            <h4 align="center" style="color: red; font-size: 40px;">$40</h4>
            <p id="p" align="center">Per night / Per person</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, quae.Lorem, ipsum dolor.</p>
            <a href="../tour/booking.php">BOOK NOW</a>

        </div>
        <div class='items' id="box1">
            <h3 align="center" style="background-color:rgb(248, 208, 208) ;">New Zealand</h3>
            <img src="../img/new zealand.jpg" width="100%" height="47%" alt="">
            <h4 align="center" style="color: red; font-size: 40px;">$75</h4>
            <p id="p" align="center">Per night / Per person</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, quae.Lorem, ipsum dolor.</p>
            <a href="../tour/booking.php">BOOK NOW</a>

        </div>
        <div class='items' id="box1">
            <h3 align="center" style="background-color:rgb(248, 208, 208) ;">ROME</h3>
            <img src="../img/rome.jpg" width="100%" height="47%" alt="">
            <h4 align="center" style="color: red; font-size: 40px;">$85</h4>
            <p id="p" align="center">Per night / Per person</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, quae.Lorem, ipsum dolor.</p>
            <a href="../tour/booking.php">BOOK NOW</a>

        </div>
        <div class='items' id="box1">
            <h3 align="center" style="background-color:rgb(248, 208, 208) ;">TOKYO</h3>
            <img src="../img/TOKYO.jpg" width="100%" height="47%" alt="">
            <h4 align="center" style="color: red; font-size: 40px;">$80</h4>
            <p id="p" align="center">Per night / Per person</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, quae.Lorem, ipsum dolor.</p>
            <a href="../tour/booking.php">BOOK NOW</a>

        </div>
        <div class='items' id="box1">
            <h3 align="center" style="background-color:rgb(248, 208, 208) ;">MACHU PICHU</h3>
            <img src="../img/macu.jpg" width="100%" height="47%" alt="">
            <h4 align="center" style="color: red; font-size: 40px;">$100</h4>
            <p id="p" align="center">Per night / Per person</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, quae.Lorem, ipsum dolor.</p>
            <a href="../tour/booking.php">BOOK NOW</a>

        </div>
    </div>

    <!-- feadback -->
    <div id="clients">
        <h1 align="center">WHAT OUR CLIENTS SAY ABOUT US</h1>
    </div>
    <div class="feadback">
        <div class="feadback_box">
            <img src="../img/client1.jpg" width="100%" height="100%" alt="">
            <p>"I'm very grateful and happy thank you to this app there are greatess app that I ever seen thank you so
                much"</p>

            <div id="client_name_date">
                <i id="client_name">MANNAN HOSSAIN,</i>
                <i id="client_date">8JUNE 2022</i>
            </div>

        </div>
        <div class="feadback_box">
            <img src="../img/client2.jpg" width="100%" height="100%" alt="">
            <p>"It is very good stay in maruthi residency near tambaram area, the rooms are very neat and good maintance
                by reception staffs. generator and 24 hours room services are good."</p>
            <div id="client_name_date">

                <i id="client_name">MANNAN HOSSAIN,</i>
                <i id="client_date">8JUNE 2022</i>
            </div>

        </div>
        <div class="feadback_box">
            <img src="../img/client3.jpg" width="100%" height="100%" alt="">
            <p>"We booked through Tafri.com location and service was best. They welcome us very well and guided us. We
                will visit again"</p>

            <div class="client_name_date">

                <i id="client_name">MANNAN HOSSAIN,</i>
                <i id="client_date">8JUNE 2022</i>
            </div>

        </div>
    </div>

    <div class="contact_page">

        <div class="form_stracture">
            <form action="index1.php" method="POST">
            <h1>GET IN TOUCH</h1>
                <?php
                if($sms){
                    echo "<strong>Thanks</strong>";
                }

                ?>
                <label for="Name">Name:
                    <input type="text" name="Name" id="Name">
                </label>
                <label for="Email">Email:
                    <input type="email" name="Email" id="Email">
                </label>
                <label for="Subject">Subject:
                    <input type="text" name="Subject" id="Subject">
                </label>
                <label for="Message">Message:
                    <textarea name="Message" id="Message" cols="20" rows="10"
                        placeholder="Typing here......"></textarea>
                </label>
                <button type="submit" id="form_submission">Sending Message</button>
            </form>
        </div>
    </div>

<?php

include './partials/footer.php';
?>
</body>

</html>