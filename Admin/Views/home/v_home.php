
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
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
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Site Analysis</h4>
                                <h5 class="card-subtitle">Overview of Latest Month</h5>
                            </div>
                        </div>
                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-9">
                                <div class="chart-container" style="width: 640px; height: auto;">
                                    <canvas id="mycanvas"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-user m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5"><?php
                                                echo $count_user->soluong_user;?></h5>
                                            <small class="font-light">Total Users</small>
                                        </div>
                                    </div>
                                    <div class="col-6 m-t-15">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5"><?php
                                                echo $count_product->soluong_product;?></h5>
                                            <small class="font-light">Total Products</small>
                                        </div>
                                    </div>
                                    <div class="col-6 m-t-15">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-tag m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5"><?php
                                                echo $count_order->soluong_order;?></h5>
                                            <small class="font-light">Total Orders</small>
                                        </div>
                                    </div>
                                    <div class="col-6 m-t-15">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-table m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5"><?php $sum= $tong_tien->tongtien ;
                                                echo number_format($sum);?></h5>
                                            <small class="font-light">Total Bills</small>
                                        </div>
                                    </div>
                                    <div class="col-6 m-t-15">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-globe m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5"><?php
                                                echo $count_online->soluong_online;
                                                ?></h5>
                                            <small class="font-light">Online</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-6">
                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">To Do List</h4>
                        <div class="todo-widget scrollable" style="height:450px;">
                            <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                <li class="list-group-item todo-item" data-role="task">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label todo-label" for="customCheck">
                                            <span class="todo-desc">Check những đơn hàng, số lượng sản phẩm.</span> <span class="badge badge-pill badge-danger float-right">Today</span>
                                        </label>
                                    </div>

                                </li>
                                <li class="list-group-item todo-item" data-role="task">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label todo-label" for="customCheck1">
                                            <span class="todo-desc">Kiểm tra giao diện website, báo cáo những lỗi xảy ra.</span><span class="badge badge-pill badge-primary float-right">everyday </span>
                                        </label>
                                    </div>
                                    <div class="item-date"> <?php echo date('Y-m-d', time());?></div>
                                </li>
                                <li class="list-group-item todo-item" data-role="task">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label todo-label" for="customCheck2">
                                            <span class="todo-desc">Xử lý những trường hợp user vi phạm và bị khóa tài khoản</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                        </label>
                                    </div>
                                    <ul class="list-style-none assignedto">
                                        <li class="assignee"><img class="rounded-circle" width="40" src="Public/assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quản lý"></li>
                                    </ul>
                                </li>
                                <li class="list-group-item todo-item" data-role="task">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label todo-label" for="customCheck3">
                                            <span class="todo-desc">Thêm những sản phẩm mới, blog mới để làm mới website</span> <span class="badge badge-pill badge-warning float-right">Monday</span>
                                        </label>
                                    </div>
                                    <div class="item-date"><?php echo date('Y-m-d', time());?></div>
                                </li>
                                <li class="list-group-item todo-item" data-role="task">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label todo-label" for="customCheck4">
                                            <span class="todo-desc">Phê bình những admin làm tác vụ sai</span> <span class="badge badge-pill badge-info float-right">Sunday</span>
                                        </label>
                                    </div>
                                    <ul class="list-style-none assignedto">
                                        <li class="assignee"><img class="rounded-circle" width="40" src="Public/assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hiền"></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->

            <div class="col-lg-6">
                <!-- Tabs -->
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Tab1</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Tab2</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Tab3</span></a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="p-20">
                                <p>Ngày hôm nay, mọi thứ sẽ tốt hơn ngày hôm qua. Để làm được điều này chúng ta cần phải có trách nhiệm với chính công việc và bản thân mình nè <3</p>
                                <p>Mình mong mọi người sẽ làm với 1 trái tim nhiệt huyết và đầy sức sống hơn nữa!</p>
                                <i>Vì vậy mọi người cùng Origano cố gắng hơn nhé!</i>
                                <img src="../Public/images/banner2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="tab-pane  p-20" id="profile" role="tabpanel">
                            <div class="p-20">
                                <img src="../Public/images/offers/offer-img-3.png" class="img-fluid">
                                <p class="m-t-10">Nếu bạn cảm thấy căng thẳng quá, thì hãy ngồi xuống cạnh mình và nhâm nhi miếng cam tươi mát này để bình tĩnh lại và suy nghĩ thật kỹ nhaaa ^^</p>
                                <i>Origano sẽ luôn bên cạnh và nhẹ nhàng với bạn <3</i>
                            </div>
                        </div>
                        <div class="tab-pane p-20" id="messages" role="tabpanel">
                            <div class="p-20">
                                <p>Để có thể phục vụ những khách hàng tốt nhất, mình luôn mong muốn các bạn có thể hiểu rõ bản chất của những sản phẩm bên mình và những đối tượng phù hợp với nó.</p>
                                <i>Vì vậy, các bạn nên tìm hiểu chúng thật kỹ nha. Mình sẽ kiểm tra đó hehe</i>
                                <img src="../Public/images/banner.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
