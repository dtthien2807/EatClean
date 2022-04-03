<?php
include ("Models/m_users.php");
class c_addAddress{
    public function __construct()
    {
    }
    public function address(){
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m_users = new m_users();
            $read_info_user = $m_users->read_users($id);
            if(isset($_POST['btn-edit-address']))
            {
                $numberphone = $_POST['number-phone'];
                $adress = $_POST['address'];
                $kq = $m_users->update_users($id, $adress, $numberphone);
                if($kq)
                {
                    echo "<script>window.location='addressBook.php'</script>";
                }
                else{
                    echo "<script>alert('Cập nhật không thành công!')</script>";
                }
            }

        }
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_addAddress.php";
        include ("Templates/front-end/layout.php");
    }
}
?>