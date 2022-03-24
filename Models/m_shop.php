<?php
require_once ("database.php");
class m_shop extends database{
    public function read_shop(){
        $sql = "select * from tbl_product where status=0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}
?>
