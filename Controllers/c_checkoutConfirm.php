<?php
@session_start();
error_reporting(E_ERROR | E_PARSE);
include ("Models/m_order_user.php");
class c_checkoutConfirm{
    public function __construct()
    {
    }
    public function confirm(){
        $product = $_SESSION['cart'];
        $info_user = $_SESSION['info-users'];
        if(isset($_POST['add-order'])) {
            $id_user = $info_user->id;
            $id_or = NULL;
            $date_order = date('Y-m-d', time());
            $note = "ghi nhớ";
            $total_price = $_SESSION['total_cart'];
            $status = 1;
            $m_order = new m_order_user();
            $id_order = $m_order->add_order($id_or, $id_user, $date_order, $note, $status, $total_price);
            if ($id_order > 0) {
                $id_detail = NULL;
                foreach ($product as $k => $v) {
                    $idProduct = $v['id'];
                    $qty = $v['qty'];
                    $price = $v['price'];
                    $kq = $m_order->add_detail_order($id_detail, $id_order, $idProduct, $qty, $price);
                }
                if ($kq != 0) {
                    echo "<script>alert('Ban da dat hang thanh cong!');window.location='index.php'</script>";
                    unset($_SESSION['cart']);
                    unset($_SESSION['total_cart']);
                }
            }
        }
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_checkoutConfirm.php";
        include ("Templates/front-end/layout.php");
    }
}
?>
