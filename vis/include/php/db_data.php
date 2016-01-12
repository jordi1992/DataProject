<?php
    $result = mysql_query('SELECT * from makes,models') or die(mysql_error());
    $num_rows = mysql_num_rows($result);

    $make_id = array();
    $make = array();
    $model_id = array();
    $model = array();

    while($row = mysql_fetch_assoc($result)) {
        $make_id[] = $row['make_id'];
        $make[] = $row['make'];
        $model[] = $row['model'];   
        $model_id[] = $row['model_id'];
          
    }
?>