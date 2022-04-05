<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_gallery.php");
    $gallery = new c_gallery();
    $gallery->gallery();
}else{
    header("location:login.php");
}

?>
