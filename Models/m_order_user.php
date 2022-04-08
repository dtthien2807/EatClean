<?php
@session_start();
require_once ("database.php");
class m_order_user extends database{
    public function insert_user_order($id, $name, $date, $identity_card, $adress, $numberphone, $email, $sex, $date_create, $status, $pass_word)
    {
        $sql = "insert into tbl_user values (?,?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        $result =  $this->execute(array($id,$name, $date, $identity_card, $adress, $numberphone, $email, $sex, $date_create,$status,$pass_word));
        if($result)
            return $this->getLastId();
        else
            return false;
    }
    public function add_order($id, $id_user, $date_order, $note, $status, $total_price)
    {
        $sql = "insert into tbl_order values (?,?,?,?,?,?)";
        $this->setQuery($sql);
        $result =  $this->execute(array($id,$id_user,$date_order,$note,$status,$total_price));
        if($result)
            return $this->getLastId();
        else
            return false;
    }
    public function add_detail_order($id, $id_order, $id_product, $amount, $price)
    {
        $sql = "insert into tbl_detailorder values (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$id_order,$id_product,$amount,$price));
    }
    public function read_order_by_id_user($id_user)
    {
        $sql = "select * from tbl_order where id_user=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_user));
    }
    public function read_detail_by_order($id_order)
    {
        $sql = "select * from tbl_detailorder where id_order=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_order));
    }

}
?>
