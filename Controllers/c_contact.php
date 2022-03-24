<?php
class c_contact{
    public function __construct()
    {
    }
    public function contact(){
        $view_header = "Views/Header/header_contact.php";
        $view = "Views/Contents/v_contact.php";
        include ("Templates/front-end/layout.php");
    }
}
?>