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
                            <h4 class="card-title">Add Blog</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="txt_title"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Content</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="editor" type="text" name="txt_content" style="height: 200px"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Date Create</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control date-inputmask" id="date-mask" name="date-mask" placeholder="Enter Date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Author</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="author" name="author" placeholder="Author">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="file-img" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="txt_des" style="height: 200px"></textarea>
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
                                <button type="submit" name="btn-add-blog" class="btn btn-primary">Submit</button>
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

