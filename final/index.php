<?php
   //Inladen van de database connecties en variablen
   include './include/php/db_connect.php';
   include './include/php/db_data.php';
   include './include/php/db_car_data.php';
   include './include/php/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <!--inladen van de JavaScripts, libraries en css-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js">
    </script>
    <script src="http://d3js.org/d3.v3.min.js">
    </script>
    <script src="http://d3js.org/topojson.v1.min.js">
    </script>
    <script src="http://datamaps.github.io/scripts/datamaps.world.min.js?v=1">
    </script>
    <script src="http://www.d3plus.org/js/d3.js">
    </script>
    <script src="http://www.d3plus.org/js/d3plus.js">
    </script>
    <link href="./include/css/stylesheet.css" rel="stylesheet" type="text/css">
    <title>DataProject</title>
</head>
<body>
    <div class="wrapper">
        <div id="menu">
            <ul class="first">
                <li>
                    <a class="hover" href="/">Home</a>
                </li>
                <li>
                    <a class="hover" href="/contact/">Contact</a>
                </li>
            </ul>
        </div>
        <div class="content">
            <h1>Everything you need to know about carmakes!</h1>Welcome on the
            website where you find lots of information about carmakes, like
            their country of origen, their relations with other carmakes and
            last but not least, a timeline with for each carmake their
            respectful amount of total models they released of the course from
            1909 until 2000!<br>
            <br>
            <br>
            Beneath you will find a map of the world with colored countries.
            Those countries are the origen of that carmakes which is mentioned
            inside the pop-up. To get a pop-up simply hover over the countries.
            If there is no data for a country, those countries are colored
            gray.<br>
            <br>
            <div id="container1" style=
            "position: relative; top:-420px; width: 100%; height: 600px;">
            </div>
            <img src="./include/images/legend.png" style="padding-left:20px; padding-bottom:20px;">
            <div id="viz"></div><br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            For a long time carmakes have been elements of each other and it is
            easy to lose sight of all those relations. So to clear the sky for
            you, you can look up all those relations on the right. Also by
            pressing a button next to a carmake will open a pop-up where you
            can find a external link to extra information. I hope you find some
            information about the relations you didn't already know.<br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            This section is about the graph you will find at the end of this
            page. All those lines represent a carmake. By hovering over you can
            see which line is which car make. Also you can see exactly what
            year it is and the amount of different models a car has produced in
            total since the start of the company. The axes explained gives you
            total amount of models produced on the y-axis and the year is bound
            to the x-axis.
        </div>
        <div id="footer">
            <div class="footercontent">
                Copyright &copy; 2016 Jordi Jonkergouw
            </div>
        </div>
    </div>
</body>
</html>