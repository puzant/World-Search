<?php
include('connect.php');
?>

<!DOCTYPE html>

<head>
    <title>world search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">

</head>

<body id="page2">
    <nav>
        <ul>
            <div id="mysidenav" class="sidenav">
                <div class="btn-side"><a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</a></div>
                <a href="weather_forcast_API/index.html">Weather</a>
                <a href="gallery.html">Gallery</a>
                <a href="index.php">About</a>
                <a href="">contact</a>
                <div class="social-media">
                    <a href="https://www.facebook.com/puzant.bakjejian" class="fa fa-facebook"></a>
                    <a href="https://github.com/puzant" class="fa fa-github"></a>
                    <a href="https://www.linkedin.com/in/puzant-bakjejian-006426108/" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-instagram"></a>

                </div>
            </div>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa fa-bars fa-lg" aria-hidden="true" style="margin-top:10px; margin-left:10px; color:#fff; float:left;"></i></span>
            <li><a href="login.php">Log in</li></a>
                <li><a href="signup.php">Sign Up</li></a>
        </ul>
    </nav>



    <!---       google map API goes here     !---->

    <div class="map">
        <div id="googlemap"></div>

    </div>

    <hr class="fade">

    <main>

        <div class="quick-access">
            <h2>check all of it here</h2>
            <a href="display-city">City</a>
            <a href="display-country-language">Country Language</a>
            <a href="display-country">Country</a>
        </div>

    </main>

    <!---    the seperation line goes here     !--->
    <hr class="fade">

    <script>
        function mymap() {
            var mapprop = {
                center: new google.maps.LatLng(51.508742, -0.120850),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googlemap"), mapprop);
        }

    </script>

    <script>
        function openNav() {
            document.getElementById("mysidenav").style.width = "250px";
        }

        function closenav() {
            document.getElementById("mysidenav").style.width = "0";
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4uTPUmnxsvk4ETUHueul6Wtopmi1FZzw&callback=mymap"></script>

</body>

</html>
