<?php
include ("Models/m_blog.php");
class c_addBlog{
    public function addblog(){
        if(isset($_POST['btn-add-blog']))
        {
            $id = NULL;
            $title_blog= $_POST['txt_title'];
            $content = $_POST['txt_content'];
            $date_up= $_POST['date-mask'];
            $name_admin= $_POST['author'];
            $image=($_FILES['file-img']['error']==0) ? $_FILES['file-img']['name']:"";
            $count_view= 0;
            $descript= $_POST['txt_des'];
            $status= $_POST['select_adj'];
            $insert = new m_blog();
            $kq=$insert->insert_blog($id, $title_blog, $content, $date_up, $name_admin, $image, $count_view, $descript, $status);
            if($kq)
            {
                if($image != ""){
                    //di chuyển hình ảnh vào thư mục source

                    move_uploaded_file($_FILES['file-img']['tmp_name'], "Public/myImage/$image");
                }
                echo "<script>window.location='tableBlog.php'</script>";
            }else{
                echo "<script>alert('Không Thành công!')</script>";
            }
        }
        $view = "Views/table/v_addBlog.php";
        include ("Template/layout.php");
    }
    public function updateblog(){
        if(isset($_GET["id"])){
            $id = $_GET['id'];

            $m_blog = new m_blog();
            $blogs = $m_blog->read_blog_by_id($id);
            if(isset($_POST["btn-update-blog"]))
            {
                $title_blog= $_POST['txt_title'];
                $content = $_POST['txt_content'];
                $date_up= $_POST['date-mask'];
                $name_admin= $_POST['author'];
                $image=($_FILES['file-img']['error']==0) ? $_FILES['file-img']['name']:$blogs->image;
                $description= $_POST['txt_des'];
                $status= $_POST['select_adj'];
                $kq = $m_blog->update_blog($id, $title_blog, $content, $date_up, $name_admin, $image, $description, $status);
                if($kq)
                {
                    if($_FILES['file-img']['error']==0)
                    {
                        move_uploaded_file($_FILES['file-img']['tmp_name'], "Public/myImage/$image");
                    }
                    echo "<script>window.location='tableBlog.php'</script>";
                }else{
                    echo "<script>alert('Không Thành công!')</script>";
                }
            }

        }
        $view = "Views/table/v_updateBlog.php";
        include ("Template/layout.php");
    }
    public function deleteBlog()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m_blog = new m_blog();
            $kq = $m_blog->delete_blog($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công !');window.location='tableBlog.php'</script>";
            }
            else
            {
                echo "<script>alert('Không Thành công!')</script>";
            }
        }
    }
}
?>
