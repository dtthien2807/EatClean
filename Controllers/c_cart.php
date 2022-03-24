<?php
class c_cart{
    public function __construct()
    {
    }
    public function cart(){
        include ("Models/m_shop.php");
        $s = new m_shop();
        $shopp=$s->read_shop();

        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_cart.php";
        include ("Templates/front-end/layout.php");
    }
}
?>