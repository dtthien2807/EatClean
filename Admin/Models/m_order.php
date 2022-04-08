<?php
include_once ("database.php");
class m_order extends database{
    public function read_order()
    {
        $sql = "select * from tbl_order";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function count_order()
    {
        $sql = "select count(*) as soluong_order from tbl_order";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function confirm_payment($id)
    {
        $sql = "update tbl_order set status = 0 where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    public function read_detail($id_order)
    {
        $sql = "select * from tbl_detailorder where id_order=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_order));
    }
    public function read_order_by_id($id)
    {
        $sql = "select * from tbl_order where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function read_sum()
    {
        $sql = "select sum(total_price) as tongtien from tbl_order";
        $this->setQuery($sql);
        return $this->loadRow();
    }
}
?>