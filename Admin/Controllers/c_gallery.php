<?php
include ("Models/m_image.php");

class c_gallery{
    public function gallery(){
        if(isset($_GET['id_product']))
        {
            $id_product = $_GET['id_product'];
            $m_image = new m_image();
            $show_image = $m_image->read_image_by_id_product($id_product);
            if(isset($_POST['btn-add-image'], $_SESSION['full-name']))
            {
                $id = NULL;
                $name_admin = $_SESSION['full-name'];
                $image = ($_FILES['file_img']['error']==0) ? $_FILES['file_img']['name']:"";
                $date_up = date('Y-m-d', time());
                $status = 0;
                $result = $m_image->insert_image($id, $id_product, $image, $name_admin, $date_up, $status);
                if($result)
                {
                    if($image != ""){
                        //di chuyển hình ảnh vào thư mục source

                        move_uploaded_file($_FILES['file_img']['tmp_name'], "Public/myImage/product-detail/$image");
                    }
                    echo "<script>window.location='gallery.php?id_product=$id_product'</script>";
                }else{
                    echo "<script>alert('Không Thành công!')</script>";
                }
            }
        }
        $view = "Views/home/v_gallery.php";
        include ("Template/layout.php");
    }

}
?>