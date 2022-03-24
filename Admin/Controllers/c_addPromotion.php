<?php
include ("Models/m_promotion.php");
class c_addPromotion{
    public function addpromotion(){
        if(isset($_POST['btn-add-promotion']))
        {
            $id = NULL;
            $price_promotion= $_POST['price'];
            $title = $_POST['title'];
            $start_date= $_POST['start_date'];
            $end_date= $_POST['end_date'];
            $status= $_POST['select_adj'];
            $insert = new m_promotion();
            $kq=$insert->insert_promotion($id, $price_promotion, $start_date, $end_date, $status, $title);
            if($kq)
            {
                echo "<script>window.location='tablePromotion.php'</script>";
            }else{
                echo "<script>alert('Không Thành công!')</script>";
            }
        }
        $view = "Views/table/v_addPromotion.php";
        include ("Template/layout.php");
    }
    public function updatepromotion(){
        if(isset($_GET["id"])){
            $id = $_GET['id'];

            $m_promotion = new m_promotion();
            $promotions = $m_promotion->read_promotion_by_id($id);
            if(isset($_POST["btn-update-promotion"]))
            {
                $price_promotion= $_POST['price'];
                $title = $_POST['title'];
                $start_date= $_POST['start_date'];
                $end_date= $_POST['end_date'];
                $status= $_POST['select_adj'];
                $kq = $m_promotion->update_promotion($id, $price_promotion, $start_date, $end_date, $status, $title);
                if($kq)
                {
                    echo "<script>window.location='tablePromotion.php'</script>";
                }else{
                    echo "<script>alert('Không Thành công!')</script>";
                }
            }
        }
        $view = "Views/table/v_updatePromotion.php";
        include ("Template/layout.php");
    }
    public function deletePromotion()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m_promotion = new m_promotion();
            $kq = $m_promotion->delete_promotion($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công !');window.location='tablePromotion.php'</script>";
            }
            else{
                echo "<script>alert('Không Thành công!')</script>";
            }
        }
    }
}
?>
