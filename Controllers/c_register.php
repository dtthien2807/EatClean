<?php
include ("Models/m_users.php");
class c_register{
    public function __construct()
    {
    }
    public function register(){
        $error_user = [];
        if(isset($_POST['btn-register-user'])) {
            $id = NULL;
            $name = $_POST['name_user'];
            $date = $_POST['date_user'];
            $identity_card = $_POST['identity'];
            $adress = $_POST['address'];
            $numberphone = $_POST['numberphone'];
            $email = $_POST['email'];
            $sex = $_POST['select_sex'];
            $date_create = date('Y-m-d');
            $status = 0;
            $pass_word = $_POST['password'];
            $conf = $_POST['conf_password'];
            $m_users = new m_users();
            if ($pass_word != $conf) {
                $error_user = "Mật khẩu không trùng nhau!";
            }
            if (empty($error_user)) {
                $result = $m_users->insert_user($id, $name, $date, $identity_card, $adress, $numberphone, $email, $sex, $date_create, $status, $pass_word);

                if ($result) {
                    echo "<script>alert('Đăng kí tài khoản thành công !');window.location='login.php'</script>";
                } else {
                    echo "<script>alert('Lỗi!')</script>";
                }
            }
        }

        $view_header = "Views/Header/header_login.php";
        $view = "Views/Contents/v_register.php";
        include ("Templates/front-end/layout.php");
    }

}
?>