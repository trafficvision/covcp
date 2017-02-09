<?php
include "db.php";
include "functions.php";
?>

<!DOCTYPE html>

<html lang="en">
    
    <head>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxKAbTtKDKGJL62koh5wns8Fv1pYa9f3E&callback=initMap"></script>
        <script type="text/javascript" src="/resources/js/report.js"></script>
        <script type="text/javascript" src="external/js/jquery-3.1.1.js"></script>
        
        <link rel="stylesheet" type="text/css" href="external/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <title>Traffic Vision</title>
    </head>
    
    <body>
        <header>
            <nav>
                <div class="row">
                    <a href="#"> <!--link to index.html-->
                        <img src="resources/img/logo.png" alt="Traffic Vision Logo" class="nav-logo">
                    </a>
                    
                    <ul class="main-nav">
                        <li><a href="#"><i class="ion-ios-home-outline icon-nav"></i></a></li> <!--link to index.html-->
                        <li><a href="#"><i class="ion-ios-search icon-nav"></i></a></li> <!--link to search.html-->
                        <li><a href="#"><i class="ion-ios-pie-outline icon-nav"></i></a></li> <!--link to report.html-->
                        <li><a href="#"><i class="ion-ios-information-outline icon-nav"></i></a></li> <!--link to help.html-->
                        <li><a href="#"><i class="ion-power"></i></a></li> <!--link to login.html-->
                    </ul>
                </div>
            </nav>
        </header>
        
        <h1>Report Generation</h1>
        
        <div class="row">
            <section class="sidebar">
                <h2>Filters</h2>
                <!-- dropdown menus -->
            </section>
        </div>
        
        <div class="row">
            <h2>Map View</h2>
            <div id="map"></div>
        </div>
        
        <!-- Google Maps API -->
        <script>
            initMap();
            //initMapTest();
        </script>
        
    </body>
</html>