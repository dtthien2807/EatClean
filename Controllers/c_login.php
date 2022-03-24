<?php
class c_login{
    public function __construct()
    {
    }
    public function login(){
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_login.php";
        include ("Templates/front-end/layout.php");
    }
}
?>