
<html>
    <head>

        <title>ADMIN PANEL</title>
        <style>
            #a{
                background-color: #2b6856;
                transition: 900ms ease-out 0s;
            }
            #b{
                background-color:pink;
            }
        </style>
    </head>
    <frameset rows ="15%,*" >
        <frame name ="a" id="a" src="nav.php /">
            <frameset cols ="20%,*">
                <frame name="b"  id="b"src= "dashboard.php /">
                    <frame name ="c">

                    </frame>
                </frame>
            </frameset>
        </frame>
    </frameset>
</html>

