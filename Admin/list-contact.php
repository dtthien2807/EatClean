<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_cont.php");
    $contact = new c_cont();
    $contact->cont();
}else{
    header("location:login.php");
}

?>