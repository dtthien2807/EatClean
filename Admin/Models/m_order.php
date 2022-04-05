<?php
include_once ("database.php");
class m_order extends database{
    public function read_order()
    {
        $sql = "select * from tbl_order where status =0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}
?>