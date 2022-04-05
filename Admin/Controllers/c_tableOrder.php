<?php
include ("Models/m_order.php");
class c_tableOrder{
    public function tableOrder(){
        $m_order = new m_order();
        $listOrder = $m_order->read_order();
        $view = "Views/table/v_tableOrder.php";
        include ("Template/layout.php");
    }
}
?>