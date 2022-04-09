<?php
include_once ("database.php");
class m_user extends database{
    public function read_user()
    {
        $sql = "select * from tbl_user";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_user_by_id($id)
    {
        $sql = "select * from tbl_user where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function delete_user($id)
    {
        $sql ="update tbl_user set status=1 where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    public function count_user()
    {
        $sql = "select count(*) as soluong_user from tbl_user";
        $this->setQuery($sql);
        return $this->loadRow();
    }

}
?>
