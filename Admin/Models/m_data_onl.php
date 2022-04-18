<?php
//setting header to json
header('Content-Type: application/json');

//database
//define("DB_HOST","localhost");
//define("DB_NAME","hphxerfw_eatcleanshop");
//define("DB_USER","root");
//define("DB_PWD","");
//define("DB_HOST","localhost");
//define("DB_NAME","PHP0921E_Nhom7");
//define("DB_USER","PHP0921E_Nhom7");
//define("DB_PWD","3xwK5In7nx");

define("DB_HOST","localhost");
define("DB_NAME","hphxerfw_eatclean");
define("DB_USER","hphxerfw");
define("DB_PWD","xMW43#Ykw;vL68");
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
    $data[] = array(
        'date_in'		=>	$row["date_in"],
        'soluongip'			=>	$row["soluongip"],
        'color'			=>	'#' . rand(100000, 999999) . ''
    );
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
