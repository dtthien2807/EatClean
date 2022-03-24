<?php
@session_start();
include ("Models/m_login.php");
class c_loginAdmin{
    public function Hienthi()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $pass = $_POST['password'];
            $this->saveLoginSession($name, $pass);
            if(isset($_SESSION['name'])){
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
            $password= $_POST['pass_w'];
            $email= $_POST['email'];
            $date_sign_up = time();
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
        unset($_SESSION["name"]);
        unset($_SESSION["password"]);
        unset($_SESSION['error_login']);
        header("location:login.php");
    }
    public function saveLoginSession($name, $pass){

        $u= new m_login();
        $read=$u->read_user_by_id_pass($name, $pass);

        if(!empty($read)){
            $_SESSION['name']=$name;
        }
    }
}
?>
