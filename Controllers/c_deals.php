<?php
class c_deals{
    public function __construct()
    {
    }
    public function deal(){
        $view_header = "Views/Header/header_page.php";
        $view = "Views/Contents/v_deals.php";
        include ("Templates/front-end/layout.php");
    }
}
?>