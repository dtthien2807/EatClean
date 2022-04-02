<?php
@session_start();
include ("Models/m_users.php");
class c_loginUser{
    public function login()
    {
        if(isset($_POST['btn-login-user']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
//         $m_users = new m_users();
//         $kq = $m_users->read_user_by_email_pass($email, $password);
            $this->saveLoginUserSession($email, $password);
            if(isset($_SESSION['full-name-users']))
            {
                header("location:index.php");
            }
            else{
                $_SESSION['error_login_user'] = "SAI THÔNG TIN ĐĂNG NHẬP";
                require "login.php";
            }
        }
        $view_header = "Views/Header/header_login.php";
        $view = "Views/Contents/v_login.php";
        include ("Templates/front-end/layout.php");
    }

    public function saveLoginUserSession($email, $password){

        $us= new m_users();
        $re=$us->read_user_by_email_pass($email, $password);
        $_SESSION['full-name-users']=$re->name;

    }
}
?>