<?php
class c_aboutus{
    public function __construct()
    {
    }
    public function aboutus(){
        $view_header = "Views/Header/header_page.php";
        $view = "Views/Contents/v_aboutus.php";
        include ("Templates/front-end/layout.php");
    }
}
?>