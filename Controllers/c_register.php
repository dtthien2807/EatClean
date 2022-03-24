<?php
class c_register{
    public function __construct()
    {
    }
    public function register(){
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_register.php";
        include ("Templates/front-end/layout.php");
    }
}
?>