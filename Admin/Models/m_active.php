<?php
include_once ("database.php");
class m_active extends database{
    public function delete_active()
    {
        $minutes = 5;
        $sql ="delete from active_sessions where < DATE_SUB(NOW(),INTERVAL '$minutes' MINUTE)";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function select_active($ip)
    {
        $sql = "select * from active_sessions where ip='$ip'";
        $this->setQuery($sql);
        return $this->loadRow(array($ip));
    }
    public function insert_active($ip, $session, $date)
    {
        $sql = "insert into active_sessions values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ip, $session, $date));
    }
    public function read_active()
    {
        $sql = "select count(*) as soluong_online from active_sessions";
        $this->setQuery($sql);
        return $this->loadRow();
    }
}
?>
