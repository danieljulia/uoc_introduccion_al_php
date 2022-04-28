<?php 


/**
  obtenemos los ids de los registros de la tabla node de drupal 
*/

$mysqli = new mysqli("localhost", "root", "root", "drupal9");
$result = $mysqli->query("SELECT nid FROM node ORDER BY nid ASC");


foreach ($result as $row) {
    echo " nid = " . $row['nid'] . "\n";
}


