<?php
include ("Models/m_user.php");
include ("Models/m_product.php");
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Detail Order</h4>
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
                                <th>USER </th>
                                <th>PRODUCT</th>
                                <th>AMOUNT</th>
                                <th>PRICE</th>
                                <th>ADDRESS</th>
                                <th>NUMBERPHONE</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $m_user = new m_user();
                            $m_product = new m_product();
                            $m_order = new m_order();
                            foreach ($detail_order as $key => $detail) {
                                ?>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td><?php
                                        $read_order = $m_order->read_order_by_id($detail->id_order);
                                        $dt = $m_user->read_user_by_id($read_order->id_user);
                                        echo $dt->name;
                                        ?></td>
                                    <td><?php $pro = $m_product->read_product_by_id($detail->id_product);
                                        echo $pro->product;
                                    ?></td>
                                    <td><?php echo $detail->amount; ?></td>
                                    <td><?php echo $detail->price; ?></td>
                                    <td><?php echo $dt->adress; ?></td>
                                    <td><?php echo $dt->numberphone; ?></td>
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
