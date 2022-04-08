<?php
require_once ("database.php");
class m_cont extends database{
    public function read_contact()
    {
        $sql = "select * from tbl_contact";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}
?>