<?php
@session_start();
include ("Models/m_shop.php");

class c_productDetail{
    public function __construct()
    {
    }
    public function productDetail(){
        if(isset($_GET['id']))
        {
            $id_product = $_GET['id'];
            $m_shop= new m_shop();
            $detail_product = $m_shop->read_shop_by_id($id_product);
            $read_review=$m_shop->read_review_by_id($id_product);
            if(isset($_POST['btn-add-review'], $_SESSION['full-name-users']))
            {
                $id = NULL;
                $name_user = $_SESSION['full-name-users'];
                $date_review = date('Y-m-d', time());
                $content = $_POST['message'];
                $status = 0;
                $insert_rv = $m_shop->insert_review($id, $name_user, $content, $date_review, $status, $id_product);
                if($insert_rv)
                {
                    echo "<script>window.location='product-detail.php?id=$id_product'</script>";
                }
            }

        }
        $view_header = "Views/Header/header_shop.php";
        $view = "Views/Contents/v_productDetail.php";
        include ("Templates/front-end/layout.php");
    }
}
?>