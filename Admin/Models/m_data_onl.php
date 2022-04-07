<?php
//setting header to json
header('Content-Type: application/json');

//database
define("DB_HOST","localhost");
define("DB_NAME","hphxerfw_eatcleanshop");
define("DB_USER","root");
define("DB_PWD","");

//get connection
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);

if(!$mysqli){
    die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT count(ip) as soluongip, date_in FROM active_sessions GROUP BY date_in");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);