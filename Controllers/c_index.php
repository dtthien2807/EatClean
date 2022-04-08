<?php
class c_index{
    public function __construct()
    {
    }
    public function index(){
        include ("Models/m_shop.php");
        $s = new m_shop();
        $shopp=$s->read_shop();
        $read_category = $s->read_category();

        $view_header = "Views/Header/header_index.php";
        $view = "Views/Contents/v_index.php";
        include ("Templates/front-end/layout.php");
    }
}
?>