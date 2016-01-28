<?php
    $result = mysql_query('SELECT * from makes') or die(mysql_error());
    $num_rows = mysql_num_rows($result);

    $make_id = array();
    $make = array();
    $make_id = array();
    $caryear = array();
    $carmake = array();
    $carmodel = array();


    while($row = mysql_fetch_assoc($result)) {
        $make_id[] = $row['make_id'];
        $make[] = $row['make'];
        // $caryear[] = $row['caryear'];
        // $carmake[] = $row['carmake'];
        // $carmodel[] = $row['carmodel'];          
    }
?>