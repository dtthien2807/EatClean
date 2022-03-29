<?php
require_once ("database.php");
class m_users extends database{
    public function read_user(){
        $sql = "select * from tbl_user where status=0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_user_by_email_pass($email, $pass_word){
        $sql = "select * from tbl_user where email=? and pass_word=?";
        $this->setQuery($sql);
        return $this->loadRow(array($email, md5($pass_word)));
    }
    public function insert_user($id, $name, $date, $identity_card, $adress, $numberphone, $email, $sex, $date_create, $status, $pass_word)
    {
        $sql = "insert into tbl_user values (?,?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name, $date, $identity_card, $adress, $numberphone, $email, $sex, $date_create, $status, $pass_word));
    }

}
?>
