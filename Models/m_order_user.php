<?php
@session_start();
require_once ("database.php");
class m_order_user extends database{
    public function read_orders($id){
        $sql = "select * from tbl_deatailorder inner join tbl_order";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

}
?>
