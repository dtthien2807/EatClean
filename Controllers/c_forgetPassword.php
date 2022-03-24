<?php
class c_forgetPassword{
    public function __construct()
    {
    }
    public function forgetPass(){
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_forgetPassword.php";
        include ("Templates/front-end/layout.php");
    }
}
?>