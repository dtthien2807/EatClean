<?php
@session_start();
error_reporting(E_ERROR | E_PARSE);
include ("Models/m_login.php");
include ("Models/m_adminPosition.php");
class c_loginAdmin{

    public function Hienthi()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $pass = $_POST['password'];
            $this->saveLoginSession($name, $pass);
            if(isset($_SESSION['full-name'])){
                header("location:home.php");
            }
            else{
                $_SESSION['error_login'] = "SAI THÔNG TIN ĐĂNG NHẬP";
                require "login.php";
            }
        }
    }
    public function upregister()
    {
        if(isset($_POST['btn-sign-up'])){
            $id = NULL;
            $id_adminPosition= $_POST['position'];
            $name_admin = $_POST['full_name'];
            $name_login= $_POST['name_login'];
            $password= md5($_POST['pass_w']);
            $email= $_POST['email'];
            $date_sign_up = date('Y-m-d', time());
            $status = 0;
            $insert = new m_login();

            $kq=$insert->insert_admin($id, $id_adminPosition, $name_admin, $name_login, $password, $email, $date_sign_up, $status);
            if($kq)
            {
                echo "<script>alert('Thành công!')</script>";
                header("location:login.php");
            }else{
                echo "<script>alert('Không Thành công!')</script>";
            }
        }
    }
    public function logout(){
        unset($_SESSION["full-name"]);
        unset($_SESSION['error_login']);
        header("location:login.php");
    }
    public function saveLoginSession($name, $pass){

        $u= new m_login();
        $read=$u->read_admin_by_name_pass($name, $pass);
        $_SESSION['full-name']=$read->name_admin;

    }
}
?>
