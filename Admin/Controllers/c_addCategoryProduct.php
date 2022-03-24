<?php
include ("Models/m_category.php");

class c_addCategoryProduct{
    public function addcategory(){
        if(isset($_POST['btn-add-category']))
        {
            $id = NULL;
            $name_categoryProduct= $_POST['name_category'];
            $status = $_POST['select_adj'];
            $insert = new m_category();
            $kq=$insert->insert_category($id, $name_categoryProduct,$status);
            if($kq)
            {
                echo "<script>window.location='table_categoryProduct.php'</script>";
            }else{
                echo "<script>alert('Không Thành công!')</script>";
            }
        }
        $view = "Views/table/v_add_categoryProduct.php";
        include ("Template/layout.php");
    }
    public function updatecategory(){
        if(isset($_GET["id"])){
            $id = $_GET['id'];

            $m_category = new m_category();
            $categories = $m_category->read_category_by_id($id);
            if(isset($_POST["btn-update-category"]))
            {
                $name_categoryProduct= $_POST['name_category'];
                $status = $_POST['select_adj'];
                $kq = $m_category->update_category($id, $name_categoryProduct, $status);
                if($kq){
                    echo "<script>window.location='table_categoryProduct.php'</script>";
                }
                else{
                    echo "<script>alert('Không Thành công!')</script>";
                }
            }
        }
        $view = "Views/table/v_updateCategory.php";
        include ("Template/layout.php");
    }
    public function deleteCategory()
    {
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m_category = new m_category();
            $kq = $m_category->delete_category($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công !');window.location='table_categoryProduct.php'</script>";
            }
            else
            {
                echo "<script>alert('Không Thành công!')</script>";
            }
        }
    }
}
?>