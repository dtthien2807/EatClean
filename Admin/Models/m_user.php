<?php
include_once ("database.php");
class m_user extends database{
    public function read_user()
    {
        $sql = "select * from tbl_user";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function delete_user($id)
    {
        $sql ="update tbl_user set status=1 where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
?>
