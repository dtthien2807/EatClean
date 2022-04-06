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
    public function update_count_blog($id)
    {
        $sql = "update tbl_blog set count_view=count_view+1 where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    public function read_blog_with_2()
    {
        $sql = "select * from tbl_blog LIMIT 3, 2";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_blog_with_3()
    {
        $sql = "select * from tbl_blog LIMIT 3";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_comment_by_id($id_blog)
    {
        $sql = "select * from tbl_comment where id_blog = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_blog));
    }
    public function count_comment($id_blog)
    {
        $sql = "select count(*) as soluong from tbl_comment where id_blog = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_blog));
    }
    public function insert_comment($id, $id_blog, $name, $content, $date)
    {
        $sql = "insert into tbl_comment values (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $id_blog, $name, $content, $date));
    }
}
?>
