<?php
    $result = mysql_query('SELECT * from carinfo ORDER BY caryear ASC') or die(mysql_error());
    $num_rows = mysql_num_rows($result);

    $caryear = array();
    $carmake = array();
    $carmodel = array();


    while($row = mysql_fetch_assoc($result)) {
        $caryear[] = $row['caryear'];
        $carmake[] = $row['carmake'];
        $carmodel[] = $row['carmodel'];          
    }
?>