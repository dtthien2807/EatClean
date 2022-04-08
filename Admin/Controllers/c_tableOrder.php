<?php
include ("Models/m_order.php");
class c_tableOrder{
    public function tableOrder(){
        $m_order = new m_order();
        $listOrder = $m_order->read_order();
        $view = "Views/table/v_tableOrder.php";
        include ("Template/layout.php");
    }
    public function confirm_order()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m_order = new m_order();
            $result = $m_order->confirm_payment($id);
            if($result)
            {
                echo "<script>window.location='tableOrder.php'</script>";
            }
            else
            {
                echo "<script>alert('Không thành công !')</script>";
            }
        }
    }
    public function show_detail()
    {
        if(isset($_GET['id_order']))
        {
            $id_orders = $_GET['id_order'];
            $m_order = new m_order();
            $detail_order = $m_order->read_detail($id_orders);
        }
        $view = "Views/table/v_tableDetail.php";
        include ("Template/layout.php");
    }
}
?>