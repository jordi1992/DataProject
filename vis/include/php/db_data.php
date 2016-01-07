<?php
    $result = mysql_query('SELECT * from cars') or die(mysql_error());
    $num_rows = mysql_num_rows($result);

    $year = array();
    $make = array();
    $model = array();

    while($row = mysql_fetch_assoc($result)) {
        $year[] = $row['year'];
        $make[] = $row['make'];
        $model[] = $row['model'];     
    }
?>