<?php
include_once ("database.php");
class m_category extends database{
    public function insert_category($id, $name_categoryProduct, $status){
        $sql = "insert into tbl_categoryproduct values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name_categoryProduct, $status));
    }
    public function read_category()
    {
        $sql = "select * from tbl_categoryproduct";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_category_by_id($id)
    {
        $sql = "select * from tbl_categoryproduct where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function update_category($id, $name_categoryProduct, $status)
    {
        $sql = "update tbl_categoryproduct set name_categoryProduct=?,status = ? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($name_categoryProduct, $status, $id));
    }
    public function delete_category($id)
    {
        $sql ="delete from tbl_categoryproduct where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
?>
