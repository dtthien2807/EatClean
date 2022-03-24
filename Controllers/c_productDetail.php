<?php
include ("Models/m_shop.php");

class c_productDetail{
    public function __construct()
    {
    }
    public function productDetail(){
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m_shop= new m_shop();
            $detail_product = $m_shop->read_shop_by_id($id);
            $read_review=$m_shop->read_review_by_id($id);

        }
        $view_header = "Views/Header/header_shop.php";
        $view = "Views/Contents/v_productDetail.php";
        include ("Templates/front-end/layout.php");
    }
}
?>