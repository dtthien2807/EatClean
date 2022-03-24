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
            $id = $_GET['id'];

            $b = new m_blog();
            $blog=$b->read_blog();
            $m_blog = new m_blog();
            $blogg = $m_blog->read_blog_by_id($id);

        }
        $view_header = "Views/Header/header_blog.php";
        $view = "Views/Contents/v_single_blog.php";
        include ("Templates/front-end/layout.php");
    }
}
?>