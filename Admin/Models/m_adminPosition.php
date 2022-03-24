<?php
include_once ("database.php");
class m_adminPosition extends database{
    public function read_position_by_id($id)
    {
        $sql = "select * from tbl_adminposition where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function read_position()
    {
        $sql = "select * from tbl_adminposition";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
