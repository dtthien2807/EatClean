<?php
@session_start();
if(isset($_SESSION['full-name-users'])) {
    include("Controllers/c_addressBook.php");
    $a = new c_addressBook();
    $a->addressBook();
}
else
    header("location:login.php");
?>