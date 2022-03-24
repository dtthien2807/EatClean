<?php
class c_addressBook{
    public function __construct()
    {
    }
    public function addressBook(){
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_addressBook.php";
        include ("Templates/front-end/layout.php");
    }
}
?>
