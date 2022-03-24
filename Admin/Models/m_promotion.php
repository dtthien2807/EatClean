<?php
include_once ("database.php");
class m_promotion extends database{
    public function insert_promotion($id, $price_promotion, $start_date, $end_date, $status, $title){
        $sql = "insert into tbl_promotion values (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $price_promotion, $start_date, $end_date, $status, $title));
    }
    public function read_promotion()
    {
        $sql = "select * from tbl_promotion";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_promotion_by_id($id)
    {
        $sql = "select * from tbl_promotion where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function update_promotion($id, $price_promotion, $start_date, $end_date, $status, $title)
    {
        $sql = "update tbl_promotion set price_promotion=?,start_date=?,end_date=?,status=?,title=? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($price_promotion,$start_date,$end_date,$status,$title,$id));
    }
    public function delete_promotion($id)
    {
        $sql = "delete from tbl_promotion where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
?>