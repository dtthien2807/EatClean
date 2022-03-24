<?php
class c_addAddress{
    public function __construct()
    {
    }
    public function address(){
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_addAddress.php";
        include ("Templates/front-end/layout.php");
    }
}
?>