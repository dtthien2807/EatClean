<?php
class c_productDetail{
    public function __construct()
    {
    }
    public function productDetail(){

        $view_header = "Views/Header/header_shop.php";
        $view = "Views/Contents/v_productDetail.php";
        include ("Templates/front-end/layout.php");
    }
}
?>