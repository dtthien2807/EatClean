<?php
include("Models/m_user.php");
class c_tableUser{
    public function tableUser(){
        $m_user = new m_user();
        $listU=$m_user->read_user();
        $view = "Views/table/v_tableUser.php";
        include ("Template/layout.php");
    }
    public function deleteUser(){
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m_user = new m_user();
            $kq = $m_user->delete_user($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công !');window.location='tableUser.php'</script>";
            }
            else{
                echo "<script>alert('Không thành công !')</script>";
            }
        }
    }
}
?>
