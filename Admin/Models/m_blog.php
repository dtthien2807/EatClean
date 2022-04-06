<?php
require_once ("database.php");
class m_blog extends database{
    public function insert_blog($id, $title_blog, $content, $date_up, $name_admin, $image, $count_view, $descript, $status){
        $sql = "insert into tbl_blog values (?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$title_blog,$content,$date_up,$name_admin,$image,$count_view,$descript, $status));
    }
    public function read_blogs(){
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
    public function update_blog($id, $title_blog, $content, $date_up, $name_admin, $image, $description, $status)
    {
        $sql = "update tbl_blog set title_blog=?,content=?,date_up=?,name_admin=?,image=?,description=?,status=? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($title_blog,$content,$date_up,$name_admin,$image,$description,$status,$id));
    }
    public function delete_blog($id)
    {
        $sql ="delete from tbl_blog where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
?>
