<?php
@session_start();
error_reporting(E_ERROR | E_PARSE);
include ("Models/m_order_user.php");
include ("Models/m_shop.php");
$info_user = $_SESSION['info-users'];
class c_myaccount{
    public function __construct()
    {
    }
    public function myaccount(){
        $info_user = $_SESSION['info-users'];
        $id_user = $info_user->id;
        $m_order = new m_order_user();
        $m_shop = new m_shop();
        $read_order_by_user = $m_order->read_order_by_id_user($id_user);

        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_myaccount.php";
        include ("Templates/front-end/layout.php");
    }
}
?>
