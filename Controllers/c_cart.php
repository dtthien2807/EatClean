<?php
@session_start();
error_reporting(E_ERROR | E_PARSE);
class c_cart
{
    public function __construct()
    {
    }
    public function store()
    {
        include "Models/m_shop.php";
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $m_shop = new m_shop();
            $detail_product = $m_shop->read_shop_by_id($productId);
            $product = (array) $detail_product;
            if (empty($_SESSION['cart']) || !array_key_exists($productId, $_SESSION['cart'])) {
                $product['qty'] = 1;
                $_SESSION['cart'][$productId] = $product;
            } else {
                $product['qty'] = $_SESSION['cart'][$productId]['qty'] + 1;
                $_SESSION['cart'][$productId] = $product;
            }
            header('location:cart.php');
        }

        //$shopp=$s->read_shop();

    }

    public function removeCart()
    {
        if ($_GET['cart'] == 'delete') {
            $idProduct = $_GET['idProduct'] ?? null;
            unset($_SESSION['cart'][$idProduct]);

            header('Location:cart.php');
        }

    }
    public function update()
    {

        foreach ($_POST['qty'] as $productId => $qty) {
            if ($qty == 0) {
                unset($_SESSION['cart'][$productId]);
            } else {
                $_SESSION['cart'][$productId]['qty'] = $qty;
            }
        }
        header("refresh");

    }
    public function cart()
    {
        if (isset($_SESSION['cart'])) {
            $product = $_SESSION['cart'];
        }

        // echo '<pre>';
        // print_r($_SESSION['total_cart']);
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_cart.php";
        include "Templates/front-end/layout.php";
    }
}
