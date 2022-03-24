<?php
include ("Models/m_product.php");
class c_addProduct{
    public function addproduct(){
        if(isset($_POST['btn-add-product']))
        {
            $id = NULL;
            $product= $_POST['name_product'];
            $id_categoryProduct = $_POST['select_category'];
            $date_create= $_POST['date_mask'];
            $amount= $_POST['amount'];
            $image=($_FILES['file_img']['error']==0) ? $_FILES['file_img']['name']:"";
            $price_product= $_POST['price'];
            $description= $_POST['description'];
            $status= $_POST['select_adj'];
            $detail_description=$_POST['txt_detail'] ;
            $id_promotion=$_POST['promotion'];
            $insert = new m_product();
            $kq=$insert->insert_product($id, $product, $id_categoryProduct, $date_create, $amount, $price_product, $status, $image, $description, $detail_description, $id_promotion);
            if($kq)
            {
                if($image != ""){
                    //di chuyển hình ảnh vào thư mục source

                    move_uploaded_file($_FILES['file_img']['tmp_name'], "Public/myImage/$image");
                }
                echo "<script>window.location='tableProduct.php'</script>";
            }else{
                echo "<script>alert('Không Thành công!')</script>";
            }
        }

        $view = "Views/table/v_addProduct.php";
        include ("Template/layout.php");
    }
    public function updateproduct(){
        if(isset($_GET["id"])){
            $id = $_GET['id'];

            $m_product = new m_product();
            $products = $m_product->read_product_by_id($id);
            if(isset($_POST["btn-update-product"]))
            {
                $product= $_POST['name_product'];
                $id_categoryProduct = $_POST['select_category'];
                $date_create= $_POST['date_mask'];
                $amount= $_POST['amount'];
                $image=($_FILES['file_img']['error']==0) ? $_FILES['file_img']['name']:$products->image;
                $price_product= $_POST['price'];
                $description= $_POST['description'];
                $status= $_POST['select_adj'];
                $detail_description=$_POST['txt_detail'] ;
                $id_promotion=$_POST['promotion'];
                $kq = $m_product->update_product($id, $product, $id_categoryProduct, $date_create, $amount, $price_product, $status, $image, $description, $detail_description, $id_promotion);
                if($kq)
                {
                    if($_FILES['file_img']['error']==0)
                    {
                        move_uploaded_file($_FILES['file_img']['tmp_name'], "Public/myImage/$image");
                    }
                    echo "<script>window.location='tableProduct.php'</script>";
                }else{
                    echo "<script>alert('Cập nhật không thành công!')</script>";
                }
            }
        }
        $view = "Views/table/v_updateProduct.php";
        include ("Template/layout.php");
    }
    public function deleteProduct()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m_product = new m_product();
            $kq = $m_product->delete_product($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công !');window.location='tableProduct.php'</script>";
            }
            else{
                echo "<script>alert('Xóa không thành công!')</script>";
            }
        }
    }
}
?>
