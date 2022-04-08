<?php
class c_shop{
    public function __construct()
    {
    }
    public function shop(){
        include ("Models/m_shop.php");
        $s = new m_shop();
        $shopp=$s->read_shop();
        $read_category = $s->read_category();

        $view_header= "Views/Header/header_shop.php";
        $view = "Views/Contents/v_shop.php";
        include ("Templates/front-end/layout.php");
    }
}
?>
