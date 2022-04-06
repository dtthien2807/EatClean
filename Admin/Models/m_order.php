<?php
include_once ("database.php");
class m_order extends database{
    public function read_order()
    {
        $sql = "select * from tbl_order where status =0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function count_order()
    {
        $sql = "select count(*) as soluong_order from tbl_order";
        $this->setQuery($sql);
        return $this->loadRow();
    }

}
?>