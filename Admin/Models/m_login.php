<?php
include_once ("database.php");
class m_login extends database{

    public function read_admin_by_name_pass($name, $pass){
        $sql = "select * from tbl_admin where name_login=? and password=?";
        $this->setQuery($sql);
        return $this->loadRow(array($name, md5($pass)));
    }
    public function read_admin(){
        $sql = "select * from tbl_admin";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function insert_admin($id, $id_adminPosition, $name_admin, $name_login, $password, $email, $date_sign_up, $status){
        $sql = "insert into tbl_admin values (?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $id_adminPosition, $name_admin, $name_login, $password, $email, $date_sign_up, $status));
    }
}
?>