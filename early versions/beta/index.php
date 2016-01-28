<?php
    include './include/php/db_connect.php';
    include './include/php/db_data.php';
    include './include/php/db_car_data.php';
    include './include/php/functions.php';
?>
<html>
   <head>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
      <script src="http://d3js.org/d3.v3.min.js"></script>
      <script src="http://d3js.org/topojson.v1.min.js"></script>
      <script src="http://datamaps.github.io/scripts/datamaps.world.min.js?v=1"></script>
      <script src="http://www.d3plus.org/js/d3.js"></script>
      <script src="http://www.d3plus.org/js/d3plus.js"></script>
      <link rel="stylesheet" type="text/css" href="./include/css/stylesheet.css" />

      <title>DataProject</title>
   </head>
   <body>
      <div class="wrapper">
         <div id="menu">
            <ul class="first">
               <li><a href="/" class="hover">Home</a></li>
               <li><a href="/contact/" class="hover">Contact</a></li>
            </ul>
         </div>
         <div class="content">
            <h1>Everything you need to know about car makes!</h1>
            fames ac turpis egestas. In euismod suscipit fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel tincidunt metus. Nunc ac ligula nec ex viverra ultricies id.
            </br>
            </br>
            <div id="container1" style="position: relative; top:-420px; width: 100%; height: 600px;"></div>
             Nunc ac ligula nec ex viverra ultricies id.
            <div id="network"></div>
            <div id="viz"></div>
            </br>
            </br>
            fames ac turpis egestas. In euismod suscipit fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel tincidunt metus. Nunc ac ligula nec ex viverra ultricies id.
            fames ac turpis egestas. In euismod suscipit fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel tincidunt metus. Nunc ac ligula nec ex viverra ultricies id.
            fames ac turpis egestas. In euismod suscipit fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel tincidunt metus. Nunc ac ligula nec ex viverra ultricies id.
            fames ac turpis egestas. In euismod suscipit fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel tincidunt metus. Nunc ac ligula nec ex viverra ultricies id.
            fames ac turpis egestas. In euismod suscipit fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel tincidunt metus. Nunc ac ligula nec ex viverra ultricies id.
            </br>
            </br>
            <div class="chart"></div>
            <div id="graph" class="aGraph"></div>
         </div>
         <div id="footer">
            <div class="footercontent">
               Copyright &copy; 2016 Jordi Jonkergouw
            </div>
         </div>
      </div>
   </body>
</html>