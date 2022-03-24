<?php
include ("Models/m_category.php");
include ("Models/m_promotion.php");
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Add Product</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Name Product</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name_product" name="name_product" placeholder="Name Product">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Category Select</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" name="select_category" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <?php
                                        $m_category = new m_category();
                                        $category = $m_category->read_category();

                                        foreach ($category as $ct)
                                        {
                                        ?>
                                        <option  value="<?php echo $ct->id; ?>"><?php
                                            echo $ct->name_categoryProduct;
                                            ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Date Create</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control date-inputmask" id="date-mask" name="date_mask" placeholder="Enter Date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Amount</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file_img" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Detail Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="txt_detail" style="height: 200px"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Promotion Select</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" name="promotion" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <?php
                                        $m_promotion = new m_promotion();
                                        $promotion = $m_promotion->read_promotion();

                                        foreach ($promotion as $pr)
                                        {
                                            ?>
                                            <option  value="<?php echo $pr->id; ?>"><?php
                                                echo $pr->price_promotion;
                                                ?> %</option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" name="select_adj" style="width: 100%; height:36px;">
                                        <option>Chọn</option>
                                        <option value="0">Mở</option>
                                        <option value="1">Khóa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" name="btn-add-product" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- editor -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
</div>

