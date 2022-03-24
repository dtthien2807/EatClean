<?php
include_once ("database.php");
class m_review extends database{
    public function read_review()
    {
        $sql = "select * from tbl_review where status =0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function delete_review($id)
    {
        $sql ="update tbl_review set status=1 where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
?>
