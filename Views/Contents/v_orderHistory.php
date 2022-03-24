<!-- page banner -->
<section id="page-banner" class="page-banner" style="background-image: url('Public/images/bg/page-banner.jpg');">
    <div class="container">
        <div class="banner-dtl">
            <h3 class="banner-heading">My Account</h3>
            <div class="breadcrumb-block">
                <ol class="breadcrumb">
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li class="active">Order History</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end page banner -->
<!--  checkout -->
<section id="order-history" class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="customer-profile-main-block">
                    <div class="customer-profile-block">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-img">
                                    <img src="Public/images/clients/customer-01.jpg" class="img-responsive" alt="customer">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5 class="customer-name">John Doe</h5>
                                <div class="ac-status">Premium Account</div>
                            </div>
                        </div>
                    </div>
                    <div class="ac-nav">
                        <ul class="galery">
                            <li><a href="myaccount.php" title="My Account"><i class="fa fa-user-circle-o" data-name="myaccount"></i>My Account</a></li>
                            <li class="active"><a href="orderHistory.php" title="My Account"><i aria-hidden="true" class="icon_cart_alt" data-name="orderHistory"></i>Order History</a></li>
                            <li><a href="addressBook.php" title="Address Book"><i aria-hidden="true" class="icon_contacts_alt" data-name="addressBook"></i>Address Book</a></li>
                            <li><a href="forgetPassword.php" title="Change Password"><i class="fa fa-user-secret" data-name="forgetPassword"></i>Change Password</a></li></ul>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-sm-8">
                <div class="content">
                <div class="order-history-table table-responsive">
                    <table>
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Order ID</th>
                            <th>Order Date</th>
                            <th>Amount</th>
                            <th>Quantity</th>
                            <th>Order Status</th>
                        </tr>
                        <tr>
                            <td><a href="product-detail.php" title="Pomegranate"><img src="Public/images/shop/product-07.png" class="img-responsive" alt="Pomegranate"></a>
                            <td><a href="product-detail.php" class="order-pdt-name" title="Pomegranate">Pomegranate</a></td>
                            <td>OS-14777</td>
                            <td>20-06-2017</td>
                            <td>$15.59</td>
                            <td>2</td>
                            <td>
                                <div class="order-status">Shipped on 21-06-2017</div>
                                <a href="#" class="btn btn-default" title="Track Now"><i class="fa fa-rocket"></i> Track Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="product-detail.php" title="Green Cabbage"><img src="Public/images/shop/product-08.png" class="img-responsive" alt="Green Cabbage"></a></td>
                            <td><a href="product-detail.php" class="order-pdt-name" title="Green Cabbage">Green Cabbage</a></td>
                            <td>OS-14779</td>
                            <td>20-06-2017</td>
                            <td>$10.00</td>
                            <td>1</td>
                            <td>
                                <div class="order-status">Shipped on 21-06-2017</div>
                                <a href="#" class="btn btn-default" title="Track Now"><i class="fa fa-rocket"></i> Track Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="product-detail.php" title="Pineapple"><img src="Public/images/shop/product-11.png" class="img-responsive" alt="Pineapple"></a></td>
                            <td><a href="product-detail.php" class="order-pdt-name" title="Pineapple">Pineapple</a></td>
                            <td>OS-14785</td>
                            <td>20-06-2017</td>
                            <td>$12.74</td>
                            <td>4</td>
                            <td>
                                <div class="order-status">Shipped on 21-06-2017</div>
                                <a href="#" class="btn btn-default" title="Track Now"><i class="fa fa-rocket"></i> Track Now</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- end checkout -->
