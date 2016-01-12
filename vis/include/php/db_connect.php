<?php

$host        =    'localhost';
$user        =    'root';
$password    =    '';
$database    =    'models';

error_reporting(0);

$link = mysql_connect($host,$user,$password) or die('Error in Server information');
mysql_select_db($database,$link) or die('Can not Select Databasse');
?>