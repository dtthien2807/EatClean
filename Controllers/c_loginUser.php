<?php
@session_start();
include ("Models/m_users.php");
class c_loginUser{
    public function __construct()
    {
    }
    public function login()
    {
        if(isset($_POST['btn-login-user']))
        {
            $email = $_POST['email'];
            $password =$_POST['password'];
//            $m_users = new m_users();
//            $kq = $m_users->read_user_by_email_pass($email, $password);
//            $hien = $kq->name;
//            echo $hien;

            $this->saveLoginUserSession($email, $password);
//            var_dump($_SESSION['info-users']);``d

            if(isset($_SESSION['full-name-users']))
            {
                header("location:index.php");
            }
            else{
                $_SESSION['error_login_user'] = "SAI THÔNG TIN ĐĂNG NHẬP";
                require "login.php";
            }

        }

    }

    public function saveLoginUserSession($email, $password){

        $m_users= new m_users();
        $re=$m_users->read_user_by_email_pass($email, $password);
        $_SESSION['full-name-users']=$re->name;
        $_SESSION['info-users']= $re;
    }
    public function logOut(){
        unset($_SESSION['full-name-users']);
        unset($_SESSION['info-users']);
        unset($_SESSION['error_login_user']);
        header("location:index.php");
    }
}
?>