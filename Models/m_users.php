<?php
require_once ("database.php");
class m_users extends database{
    public function read_users($id){
        $sql = "select * from tbl_user where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function read_user_by_email_pass($email, $pass_word){
        $sql = "select * from tbl_user where email=? and pass_word=?";
        $this->setQuery($sql);
        return $this->loadRow(array($email,$pass_word));
    }
    public function insert_user($id, $name, $date, $identity_card, $adress, $numberphone, $email, $sex, $date_create, $status, $pass_word)
    {
        $sql = "insert into tbl_user values (?,?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name, $date, $identity_card, $adress, $numberphone, $email, $sex, $date_create, $status, $pass_word));
    }
    public function update_users($id, $adress, $numberphone)
    {
        $sql = "update tbl_user set adress=?,numberphone=? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($adress, $numberphone, $id));
    }
}
?>
