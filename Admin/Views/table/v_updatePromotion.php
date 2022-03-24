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
                            <h4 class="card-title">Add Promotion</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="title"><?php echo $promotions->title;?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $promotions->price_promotion;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Start Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control date-inputmask" id="date-mask" name="start_date" value="<?php echo $promotions->start_date;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">End Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control date-inputmask" id="date-mask" name="end_date" value="<?php echo $promotions->end_date;?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" name="select_adj" style="width: 100%; height:36px;">
                                        <option>Chọn</option>
                                        <option value="0" <?php if($promotions->status == 0) echo"selected"; ?>>Mở</option>
                                        <option value="1" <?php if($promotions->status == 1) echo"selected"; ?>>Khóa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="btn-update-promotion">Submit</button>
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

