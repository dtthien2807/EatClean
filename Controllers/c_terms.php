<?php
class c_terms{
    public function __construct()
    {
    }
    public function terms(){
        $view_header = "Views/Header/header_page.php";
        $view = "Views/Contents/v_terms.php";
        include ("Templates/front-end/layout.php");
    }
}
?>