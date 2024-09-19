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
#social {
    display: flex;
    justify-content: right;
    padding: 8px;
    margin-right: 0rem;
    background-color: #435c8f;
    height: 44px;
    position: static;
}
/* Social img */
#social img {
    width: 30px;
    filter: invert(200%);
    opacity: 0.8;

}

#social li a{
color:white;
}
#social li {
    list-style: none;
    padding: 5px;
    margin-right: 4px;
}

/* Main cantent */
.social-media {
    border: 1px solid rgb(165, 93, 93);
    height: 47px;

}

/* CLossing time */
#social p {
    margin-right: 42rem;
    margin-top: 5px;
    font-family: cursive;
    color: wheat;
}

/* login hover select */
#social li a:hover {
    color: red;
    text-decoration: underline;
    font-weight:bold;
}
#space {
    color: wheat;
    font-weight: bold;
}
/* navbar parimary */
#navbar_primary {
    display: flex;
    justify-content: center;
    margin-top: 2rem;


}
/* list-style */
#navbar_primary li {
    list-style: none;
    padding: 3px;

}

#navbar_primary a {
    text-decoration: none;
    color: #f1f1f0;
    margin: 30px;
    font-family: cursive;
    font-size: 15px;
    font-weight: bold;
}
/* navbr border ::content */
.navbar_main {
    border: 1px solid rgb(64 68 90);
    height: 6rem;
    position: sticky;
    top: 0px;
    background-color: #565662;
}


/* Tafri travel heading */
#navbar_primary #heading {
    font-family: cursive;
    color: wheat;
    font-size: 49px;
    margin-top: -16px;
}


/* Home about middle space  */
#navbar_primary #space_second {
    color: rgb(255, 251, 244);
    /* font-family: cursive; */
    margin-left: 32px;
    margin-right: 32px;
}


#navbar_primary a:hover {
    text-decoration: underline;
    text-decoration-color: rgb(231, 213, 213);
    /* text-decoration-style: dotted; */
    color:red;


}
#navbar_primary a:active{
    border: 1px solid white;
    /* width: 40px; */
    border-radius: 6px;
    border-left-color: yellow;
    border-right-color: yellow;

}

@media (max-width: 1000px) {
        #navbar_primary {
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            margin-top: 1rem;
        }

        #navbar_primary li {
            margin: 10px 0;
        }

        #navbar_primary a {
            margin: 0;
            font-size: 14px;
        }

        #navbar_primary #heading {
            font-size: 36px;
        }

        #navbar_primary #space_second {
            display: none;
        }

        #social {
            justify-content: center;
        }

        #social p {
            margin-right: 0;
        }
    }
</style>

</head>

<body>
    </header>

        </div>
        <section class="navbar_main">
            <nav>
                <ul id="navbar_primary">
                  
                    <li><a href="../index.php /">Home</a></li>
                    <li id="space">/</li>
                    <li><a href="../navbar/about.php">About</a></li>
                    <li id="space">/</li>
                    <li><a href="../tour/view_tour.php">Our Tours</a></li>

                    <li id="space_second">_____</li>
            
                    <h1 id="heading">Tafri Travel</h1>
                    <li id="space_second">_____</li>

                    <li><a href="../navbar/service.php">Service</a></li>
                    <li id="space">/</li>
                    <li><a href="../navbar/blog.php">Blog</a></li>
                    <li id="space">/</li>
                    <li><a href="../navbar/contact.php">Contact Us</a></li>

                </ul>

            </nav>
        </section>
</body>

</html>