<?php
//setting header to json
header('Content-Type: application/json');

//database
define("DB_HOST","localhost");
define("DB_NAME","hphxerfw_eatcleanshop");
define("DB_USER","root");
define("DB_PWD","");
//define("DB_HOST","localhost");
//define("DB_NAME","PHP0921E_Nhom7");
//define("DB_USER","PHP0921E_Nhom7");
//define("DB_PWD","3xwK5In7nx");

//get connection
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);

if(!$mysqli){
    die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT sum(total_price) as tongtien, date_order FROM tbl_order GROUP BY date_order");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
    $data[] = array(
        'date_order'		=>	$row["date_order"],
        'tongtien'			=>	$row["tongtien"],
        'color'			=>	'#' . rand(100000, 999999) . ''
    );
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
