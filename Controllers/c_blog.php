<?php
include ("Models/m_blog.php");
class c_blog{
    public function __construct()
    {
    }
    public function blog()
    {
        $b = new m_blog();
        $blog=$b->read_blog();

        $view_header = "Views/Header/header_blog.php";
        $view = "Views/Contents/v_blog.php";
        include ("Templates/front-end/layout.php");
    }
    public function singleBlog(){
        if(isset($_GET["id"])){
            $id_blog = $_GET['id'];

            $b = new m_blog();
            $blog=$b->read_blog();
            $blogg = $b->read_blog_by_id($id_blog);
            $blog_index_3 = $b->read_blog_with_3();
            $comment_blog = $b->read_comment_by_id($id_blog);
            $count_blog = $b->update_count_blog($id_blog);
            if(isset($_POST['btn-add-comment']))
            {
                $id = NULL;
                $name = $_POST['name'];
                $date = date('Y-m-d', time());
                $content = $_POST['message'];
                $insert_cm = $b->insert_comment($id, $id_blog, $name, $content, $date);
                if($insert_cm)
                {
                    echo "<script>window.location='single-blog.php?id=$id_blog'</script>";
                }
            }

        }
        $view_header = "Views/Header/header_blog.php";
        $view = "Views/Contents/v_single_blog.php";
        include ("Templates/front-end/layout.php");
    }
}
?>