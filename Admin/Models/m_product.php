<?php
require_once ("database.php");
class m_product extends database{
    public function insert_product($id, $product, $id_categoryProduct, $date_create, $amount, $price, $status, $image, $description, $detail_description, $id_promotion){
        $sql = "insert into tbl_product values (?,?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$product,$id_categoryProduct,$date_create,$amount,$price,$status,$image, $description, $detail_description, $id_promotion));
    }
    public function read_product()
    {
        $sql = "select * from tbl_product";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_product_by_id($id)
    {
        $sql = "select * from tbl_product where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function update_product($id, $product, $id_categoryProduct, $date_create, $amount, $price, $status, $image, $description, $detail_description, $id_promotion)
    {
        $sql = "update tbl_product set product=?,id_categoryProduct=?,date_create=?,amount=?,price=?,status=?,image=?,description=?,detail_description=?,id_promotion=? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($product,$id_categoryProduct,$date_create,$amount,$price,$status,$image,$description,$detail_description,$id_promotion,$id));
    }
    public function delete_product($id)
    {
        $sql = "delete from tbl_product where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    public function count_product()
    {
        $sql = "select count(*) as soluong_product from tbl_product";
        $this->setQuery($sql);
        return $this->loadRow();
    }
}
?>
