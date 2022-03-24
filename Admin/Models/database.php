<?php
require_once("config.php");
class database{
    protected $pdo = NULL;
    protected $sql = '';
    protected $sta = NULL;

    public function __construct() {
        try
        {
            $this->pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME,DB_USER,DB_PWD);
            $this->pdo->query('set names "utf8"');
        }
        catch(PDOException $ex )
        {
            die($ex->getMessage());
        }
    }
//set câu truy vấn cho database
    public function setQuery($sql) {
        $this->sql = $sql;
    }

    //Function execute the query
    // hàm này sẽ làm hàm chạy câu truy vấn
    public function execute($options=array()) {
        $this->sta = $this->pdo->prepare($this->sql);
        if($options) {  //If have $options then system will be tranmission parameters
            for($i=0;$i<count($options);$i++) {
                $this->sta->bindParam($i+1,$options[$i]);
            }
        }
        $this->sta->execute();
        return $this->sta;
    }

    //Funtion load datas on table
    // lấy nhiều dữ liệu ở trong bảng
    public function loadAllRows($options=array()) {
        if(!$options) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($options))
                return false;
        }
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    //Funtion load 1 data on the table
    //lay 1 du lieu thoi
    public function loadRow($option=array()) {
        if(!$option) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_OBJ);
    }

    //Function count the record on the table
    public function loadRecord($option=array()) {
        if(!$option) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_COLUMN);
    }
//lấy id cuối cùng
    public function getLastId() {
        return $this->pdo->lastInsertId();
    }
//đóng kết nối
    public function disconnect() {
        $this->sta=NULL;
        $this->pdo = NULL;
    }
}
?>