<?php
include ("Models/m_blog.php");
?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Category Product Table</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-footer clearfix">
                        <button type="button" class="btn btn-success float-left"><a href="addBlog.php" style="color: white;">Add New</a> </button>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr style="background-color: rgb(236, 236, 236);">
                                <th>Title</th>
                                <th>Content</th>
                                <th>Create At</th>
                                <th>By</th>
                                <th>Image</th>
                                <th>View</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $m_blog = new m_blog();
                            $listB=$m_blog->read_blogs();

                            foreach ($listB as $key => $blog) {
                            ?>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td><?php echo $blog->title_blog; ?></td>
                                <td><?php echo $blog->content; ?></td>
                                <td><?php echo $blog->date_up; ?></td>
                                <td><?php echo $blog->name_admin; ?></td>
                                <td><img src="Public/myImage/<?php echo $blog->image;?>" width="80px"/></td>
                                <td><?php echo $blog->count_view; ?></td>
                                <td><?php echo $blog->description; ?></td>
                                <td><span class="badge badge-pill badge-<?php if($blog->status==1)
                                    {
                                        echo "danger";
                                    }
                                    else
                                    {
                                        echo "info";
                                    }

                                    ?>
                                         float-right"><?php if($blog->status==0)
                                        {
                                            echo "Active";
                                        }
                                        else
                                        {
                                            echo "inactive";
                                        }?></span>
                                </td>
                                <td>
                                    <a class="btn bg-info" href="updateBlog.php?id=<?php echo $blog->id;?>" title="Edit"">
                                        <i class=" far fa-edit "></i>
                                    </a>
                                    <a class="btn bg-danger" href="javascript:question_confirm_Blog(<?php echo $blog->id;?>)" title="Delete">
                                        <i class=" fas fa-trash" ></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
    </div><!-- /.container-fluid -->
    <!-- /.content -->
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
</div>