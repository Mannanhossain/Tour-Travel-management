<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafri Travel & Tourism</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    
    <style>
        * {
    margin: 0px;
    padding: 0px;
    /* box-sizing: border-box; */
}

html {
    scroll-behavior: smooth;
}

.footer {
    display: flex;
    justify-content: space-around;
    border: 1px solid black;
    height: 20rem;
    background-color: #273126;
    color: white;
    margin-top: 1rem;
    position: relative;
}


.footer #web_name,
#blog_post,
#contact_info {
    border: 1px solid #273126;
    width: 19rem;
    height: 16rem;
    padding: 2px 19px;
}

.footer #web_name h1 {
    font-family: cursive;
    margin-top: 38px;
    text-align: center;

}

.footer #web_name p {
    font-family: cursive;
    margin-top: 18px;
    text-align: center;

}

#footer_social_media {
    display: flex;
    justify-content: right;
    /* padding: 8px; */
    margin-right: 0rem;

    height: 33px;

}

#footer_social_media li,
#blog_post li,
#contact_info li {
    list-style: none;
    margin-top: 20px;
}

#footer_social_media img {

    width: 30px;
    filter: invert(200%);

    margin: 14px 23px;
    border: 2px solid rgb(6 255 103);
    border-radius: 57px;

}

#footer_social_media img:hover {
    background-color: rgb(161, 214, 53);
}


/* blog post contact post */
.footer #blog_post h4,
#contact_info h4 {
    margin-top: 43px;
}



.footer #blog_post a {
    color: white;
    text-decoration: none;
}

.footer #blog_post a:hover {
    color: rgb(123, 255, 0);
}


#contact_info ul li img {
    margin: -3px 5px;
    width: 18px;
    height: 20px;
    filter: invert(100%);
}
/* last footer part */
footer {
    text-align: center;
    border: 1px solid black;

    background-color: #142a24;
    font-size: 20px;
    color: #15d199;
    height: 30px;
}
/* @media (max-width: 600px) {
        html{
            width: 38rem; 
        }
      .footer {
        max-width:37rem;
      }
    } */

    @media (max-width:1000px) {
        .footer {
            flex-wrap: wrap;
            justify-content: center;
            height: auto;
        }

        .footer #web_name,
        #blog_post,
        #contact_info {
            width: 100%;
            margin-bottom: 1rem;
        }

        .footer #web_name h1 {
            margin-top: 2rem;
        }

        #footer_social_media {
            justify-content: center;
        }

        #footer_social_media img {
            margin: 8px;
        }

        .footer #blog_post h4,
        #contact_info h4 {
            margin-top: 1rem;
        }

        footer {
            margin-top: 1rem;
        }
    }

</style>

</head>

<body>

     <div class="footer">
        <div id="web_name">
            <h1>Tafri Travel</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum omnis, aspernatur aliquam ipsam ut
                assumenda.</p>
            <div class="web-media">
                <ul id="footer_social_media">

                    <li><a href="https://www.facebook.com/mannan.hossen.522/about"><img src="../img/Facebook-logo.png" alt="Fb"></a></li>

                    <li><a href="#"><img src="../img/Instagram-logo.png" alt="inst"></a></li>

                    <li><a href="#"><img src="../img/in-logo.png" alt="in"></a></li>

                    <li><a href="#"><img src="../img/youtube-logo.png" alt="youtube"></a></li>
                    </ul>
            </div>



        </div>
        <div id="blog_post">
            <h4>BLOG POST</h4>
           <ul type="square">
            <li>
                <a href="#"> Travel with us this year</a>
            </li>
            <i style="color:yellowgreen";>Oct 8 ,2022<i>
            <li>
                <a href="#"> New destination for you</a>
            </li>
            <i style="color:yellowgreen";>Oct 8 ,2022<i>
            <li>
                <a href="#"> Kashmir travel </a>
            </li>
            <i style="color:yellowgreen";>Oct 8 ,2022<i>
           </ul>
        </div>
        <div id="contact_info">
            <h4 style="color:white";>CONTACT INFO</h4>
            <ul style="color:white";>
                <li><img src="../img/location.png" alt=""> 733124, West Bengal, D/Dinajpur,Gangarampur </li>
                <li><img src="../img/call.png" alt="">   8918523121</li>
                <li><img src="../img/email.png" alt="">   mannanhossen5@gamil.com</li>
                <li><img src="../img/www.png" alt="">   www.Tafri.com</li>

            </ul>

        </div>

    </div>
    <footer>
        Copyright@2023 All right reserved/ This Template is made by MANNAN.
    </footer>


</body>

</html>