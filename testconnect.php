<?php
$servername = "localhost";
$username = "hphxerfw";
$password = "xMW43#Ykw;vL68";
try {
    $conn = new PDO("mysql:host=$servername;dbname=hphxerfw_eatclean", $username, $password);
// thiết lập lỗi PDO thành ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();}
?>
