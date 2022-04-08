<?php
require_once ("database.php");
class m_shop extends database{
    public function read_shop(){
        $sql = "select * from tbl_product where status=0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_shop_by_id($id)
    {
        $sql = "select * from tbl_product where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function read_shop_by_idCategory($id_categoryProduct)
    {
        $sql = "select * from tbl_product where id_categoryProduct=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_categoryProduct));
    }
    public function read_category_by_id($id)
    {
        $sql = "select * from tbl_categoryproduct where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function read_category()
    {
        $sql = "select * from tbl_categoryproduct where status=0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_review_by_id($id_product)
    {
        $sql = "select * from tbl_review where status = 0 and id_product = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_product));
    }
    public function count_review($id_product)
    {
        $sql = "select count(*) as SL from tbl_review where status = 0 and id_product = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_product));
    }
    public function insert_review($id, $name_user, $content, $date_review, $status, $id_product)
    {
        $sql = "insert into tbl_review values (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name_user, $content, $date_review, $status, $id_product));
    }
    public function select_img_by_id_product($id_product)
    {
        $sql = "select * from tbl_images where status = 0 and id_product = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_product));
    }
}
?>
