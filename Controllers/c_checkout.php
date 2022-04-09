<?php
@session_start();
error_reporting(E_ERROR | E_PARSE);
include ("Models/m_order_user.php");
class c_checkout{
    public function __construct()
    {
    }
    public function checkout(){
//       echo '<pre>';
       //print_r($_SESSION['cart']);
       $product = $_SESSION['cart'];
//       print_r($product);

    //   print_r($_SESSION['total_cart']);
        if(isset($_POST['add-user-order']))
        {
            $id_u=null;
            $name = $_POST['name-user'];
            $date = $_POST['birthday'];
            $identity_card = $_POST['cmnd'];
            $email = $_POST['email'];
            $numberphone = $_POST['number-phone'];
            $adress = $_POST['address'];
            $sex = 1;
            $date_create = date('Y-m-d');
            $status = 0;
            $pass_word = null;
            $m_order = new m_order_user();
            $id_user = $m_order->insert_user_order($id_u,$name,$date,$identity_card,$adress,$numberphone,$email,$sex,$date_create,$status, $pass_word);
            if($id_user>0)
            {
                $id_o=null;
                $date_order = date('Y-m-d', time());
                $note = "ghi nhớ";
                $total_price = $_SESSION['total_cart'];
                $status_order = 1;
                $id_order = $m_order->add_order($id_o,$id_user, $date_order,$note,$status_order,$total_price);
                if($id_order>0)
                {
                    $id_detail= NULL;
                    foreach($product as $k => $v){
                           $idProduct = $v['id'];
                           $qty = $v['qty'];
                           $price = $v['price'];
                           $kq = $m_order->add_detail_order($id_detail, $id_order, $idProduct, $qty, $price);
                    }
                    if($kq != 0){
                        echo "<script>alert('Ban da dat hang thanh cong!');window.location='index.php'</script>";
                        unset($_SESSION['cart']);
                        unset($_SESSION['total_cart']);
                    }
                }
            }
        }
        $view_header = "Views/Header/header_index.php";
        $view = "Views/Contents/v_checkout.php";
        include ("Templates/front-end/layout.php");
    }
}
?>
