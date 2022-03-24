<?php
class c_faq{
    public function __construct()
    {
    }
    public function faq(){
        $view_header = "Views/Header/header_page.php";
        $view = "Views/Contents/v_faq.php";
        include ("Templates/front-end/layout.php");
    }
}
?>