<?php
require_once ("database.php");
class m_contact extends database{
    public function insert_contact($id, $name, $email, $address, $numberphone, $message, $date){
        $sql = "insert into tbl_contact values (?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name, $email, $address, $numberphone, $message, $date));
    }
}
?>