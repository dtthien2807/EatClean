<?php
require_once ("database.php");
class m_blog extends database{
    public function read_blog(){
        $sql = "select * from tbl_blog";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_blog_by_id($id)
    {
        $sql = "select * from tbl_blog where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

}
?>
