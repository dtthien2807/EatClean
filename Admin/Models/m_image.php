<?php
include_once ("database.php");
class m_image extends database{
    public function read_image_by_id_product($id_product)
    {
        $sql = "select * from tbl_images where id_product = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_product));
    }
    public function insert_image($id, $id_product, $image, $name_admin, $date_up, $status)
    {
        $sql = "insert into tbl_images values (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$id_product,$image,$name_admin,$date_up,$status));
    }

}
?>