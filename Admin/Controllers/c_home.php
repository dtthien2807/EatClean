<?php
@session_start();
include("Models/m_user.php");
include ("Models/m_product.php");
include ("Models/m_order.php");
include ("Models/m_active.php");
class c_home{
    public function index(){
        $m_user = new m_user();
        $count_user = $m_user->count_user();
        $m_product = new m_product();
        $count_product = $m_product->count_product();
        $m_order = new m_order();
        $count_order = $m_order->count_order();
        $tong_tien = $m_order->read_sum();

        $m_active = new m_active();
        $active_sessions = 0;
        if($sid = session_id())
        {
            $ip = $_SERVER['REMOTE_ADDR']; //GET IP ADDRESS
            $m_active->delete_active();
            $select_active = $m_active->select_active($ip);
            if(!$select_active)
            {
                $date = date('Y-m-d', time());
                $m_active->insert_active($ip, $sid, $date);
            }
            $count_online = $m_active->read_active();
        }

        $view = "Views/home/v_home.php";
        include ("Template/layout.php");
    }
}
?>