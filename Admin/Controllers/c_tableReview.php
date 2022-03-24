<?php
include ("Models/m_review.php");
class c_tableReview{
    public function tableReview(){
        $m_review = new m_review();
        $listR = $m_review->read_review();
        $view = "Views/table/v_tableReview.php";
        include ("Template/layout.php");
    }
    public function deleteReview(){
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m_review = new m_review();
            $kq = $m_review->delete_review($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công !');window.location='tableReview.php'</script>";
            }
            else{
                echo "<script>alert('Không thành công !')</script>";
            }
        }
    }
}
?>
