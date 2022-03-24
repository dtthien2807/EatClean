<?php
require_once ("database.php");
class m_user extends database{
    public function read_user(){
        $sql = "select * from tbl_user where status=0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function insert_user($id, $name, $date, $identity_card, $adress, $numberphone, $email, $sex, $date_create, $status)
    {
        $sql = "insert into tbl_user values (?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name, $date, $identity_card, $adress, $numberphone, $email, $sex, $date_create, $status));
    }

}
?>
