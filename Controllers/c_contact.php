<?php
include ("Models/m_contact.php");
class c_contact{
    public function __construct()
    {
    }
    public function contact(){
        if (isset($_POST['add-contact']))
        {
            $id = Null;
            $name = $_POST['name'];
            $email = $_POST['email'];
            $numberphone = $_POST['numberphone'];
            $address = $_POST['address'];
            $date = date('Y-m-d');
            $message = $_POST['message'];
            $m_contact = new m_contact();
            $kq = $m_contact->insert_contact($id, $name, $email, $address, $numberphone, $message, $date);
            if($kq)
            {
                echo "<script>alert('Bạn đã gửi contact thành công! Chúng mình sẽ sớm liên lạc lại với bạn ^^');window.location='contact.php'</script>";
            }
            else
                echo "<script>alert('Lỗi!')</script>";
        }
        $view_header = "Views/Header/header_contact.php";
        $view = "Views/Contents/v_contact.php";
        include ("Templates/front-end/layout.php");
    }
}
?>