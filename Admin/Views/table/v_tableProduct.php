<?php
include ("Models/m_product.php");
include ("Models/m_category.php");
include ("Models/m_promotion.php");
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Product Table</h4>
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
                        <button type="button" class="btn btn-success float-left"><a href="addProduct.php" style="color: white;">Add New</a> </button>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr style="background-color: rgb(236, 236, 236);">
                                <th>Name</th>
                                <th>Category</th>
                                <th>Create At</th>
                                <th>Amount</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Detail description</th>
                                <th>Promotion</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $m_product = new m_product();
                            $listProduct=$m_product->read_product();
                            $m_category = new m_category();
                            $m_promotion = new m_promotion();
                            foreach ($listProduct as $key => $pr) {
                            ?>
                            <tr>
                                <td><a href="gallery.php?id_product=<?php echo $pr->id;?>" title="album">
                                    <?php echo $pr->product;?></a></td>
                                <td><?php $name_category = $m_category->read_category_by_id($pr->id_categoryProduct);
                                        echo $name_category->name_categoryProduct;
                                    ?></td>
                                <td><?php echo $pr->date_create;?></td>
                                <td><?php echo $pr->amount;?></td>
                                <td><?php echo $pr->price;?></td>
                                <td><img src="Public/myImage/<?php echo $pr->image;?>" width="80px"/></td>
                                <td><?php echo $pr->description;?></td>
                                <td><?php echo $pr->detail_description;?></td>
                                <td><?php $prom = $m_promotion->read_promotion_by_id($pr->id_promotion);
                                    echo $prom->price_promotion;
                                    ?>%</td>
                                <td><span class="badge badge-pill badge-<?php if($pr->status==1)
                                    {
                                        echo "danger";
                                    }
                                    else
                                    {
                                        echo "info";
                                    }

                                    ?>
                                         float-right"><?php if($pr->status==0)
                                        {
                                            echo "Active";
                                        }
                                        else
                                        {
                                            echo "inactive";
                                        }?></span>
                                </td>
                                <td>
                                    <a class="btn bg-info" href="updateProduct.php?id=<?php echo $pr->id; ?>">
                                        <i class=" far fa-edit "></i>
                                    </a>
                                    <a class="btn bg-danger " href="javascript:question_confirm_Product(<?php echo $pr->id;?>)" title="Delete">
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