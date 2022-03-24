<?php
include ("Models/m_promotion.php");
?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Promotion Table</h4>
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
                        <button type="button" class="btn btn-success float-left"><a href="addPromotion.php" style="color: white;">Add New</a> </button>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr style="background-color: rgb(236, 236, 236);">
                                <th>Title</th>
                                <th>Price</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $m_promotion = new m_promotion();
                            $listP = $m_promotion->read_promotion();
                            foreach ($listP as $key => $promotion)
                            {
                            ?>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td><?php echo $promotion->title; ?></td>
                                <td><?php echo $promotion->price_promotion; ?></td>
                                <td><?php echo $promotion->start_date; ?></td>
                                <td><?php echo $promotion->end_date; ?></td>
                                <td><span class="badge badge-pill badge-<?php if($promotion->status==1)
                                    {
                                        echo "danger";
                                    }
                                    else
                                    {
                                        echo "info";
                                    }

                                    ?>
                                         float-right"><?php if($promotion->status==0)
                                        {
                                            echo "Active";
                                        }
                                        else
                                        {
                                            echo "Inactive";
                                        }?></span>
                                </td>
                                <td>
                                    <a class="btn bg-info" href="updatePromotion.php?id=<?php echo $promotion->id; ?>">
                                        <i class=" far fa-edit "></i>
                                    </a>
                                    <a class="btn bg-danger " href="javascript:question_confirm_Promotion(<?php echo $promotion->id;?>)" title="Delete">
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