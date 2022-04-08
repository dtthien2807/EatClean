<?php
include ("Models/m_user.php");
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Admin Table</h4>
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
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr style="background-color: rgb(236, 236, 236);">
                                <th>ID</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Note</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Confirm</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $m_user = new m_user();

                            foreach ($listOrder as $key => $order) {
                                ?>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td><a href="detail-order.php?id_order=<?php echo $order->id;?>" ><?php echo $order->id; ?></a></td>
                                    <td><?php $od = $m_user->read_user_by_id($order->id_user);
                                        echo $od->name;
                                        ?></td>
                                    <td><?php echo $order->date_order; ?></td>
                                    <td><?php echo $order->note; ?></td>
                                    <td><?php echo $order->total_price; ?></td>
                                    <td><span class="badge badge-pill badge-<?php if($order->status==1)
                                        {
                                            echo "danger";
                                        }
                                        else
                                        {
                                            echo "info";
                                        }

                                        ?>
                                         float-right"><?php if($order->status==1)
                                            {
                                                echo "Chưa thanh toán";
                                            }
                                            else
                                            {
                                                echo "Đã thanh toán";
                                            }?></span>
                                    </td>
                                    <td>
                                        <?php if($order->status==1){ ?>
                                        <a class="btn bg-danger" href="javascript:question_confirm_payment(<?php echo $order->id;?>)" title="Confirm payment">
                                            <i class="fas fa-check" ></i>
                                        </a>
                                        <?php } ?>
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
