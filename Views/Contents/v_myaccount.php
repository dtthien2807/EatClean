<!-- page banner -->
<?php
@session_start();
?>
<section id="page-banner" class="page-banner" style="background-image: url('Public/images/bg/page-banner.jpg');">
    <div class="container">
        <div class="banner-dtl">
            <h3 class="banner-heading">My Account</h3>
            <div class="breadcrumb-block">
                <ol class="breadcrumb">
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li class="active">My Account</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end page banner -->
<!--  checkout -->
<section id="my-account" class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="customer-profile-main-block">
                    <div class="customer-profile-block">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-img">
                                    <img src="Public/images/clients/meomeo.png" class="img-responsive" alt="customer">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5 class="customer-name"><?php echo $_SESSION['full-name-users']?></h5>
                                <div class="ac-status">Premium Account</div>
                            </div>
                        </div>
                    </div>
                    <div class="ac-nav">
                        <ul class="galery">
                            <li class="active"><a href="myaccount.php" title="My Account"><i class="fa fa-user-circle-o" data-name="myaccount"></i>My Account</a> </li>
                            <li><a href="orderHistory.php" title="Order History"><i aria-hidden="true" class="icon_cart_alt" data-name="orderHistory"></i>Order History</a></li>
                            <li><a href="addressBook.php" title="Address Book"><i aria-hidden="true" class="icon_contacts_alt" data-name="addressBook"></i>Address Book</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="content">
                <div class="my-ac-block">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="highlight"> <h5 class="my-ac-heading">Origano Store Account</h5></div>
                        </div>
                    </div>
                </div>
                <div class="about-me-main-block">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="about-me-block">
                                <h5 class="about-me-heading">About Me</h5>
                                <p>Suspendisse laoreet tempus auctor. Sed sed neque nibh. Ut quis arcu quis quam vehicula convallis sed non tellus. Lorem ipsum dolor sit amet. Suspendisse laoreet tempus auctor.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt sagittis nulla in placeratols Praesent vehicula, enim vitae sagittis consectetur, dolor elit ultrices sem, sit amet semper massa urna sed nibh.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="#" title="Connect Facebook" class="btn social-login fb-login"><i class="fa fa-facebook fa-lg"></i>connect facebook account</a>
                            <a href="#" title="Connect Google Plus" class="btn social-login google-login"><i class="fa fa-google-plus fa-lg"></i>connect google account</a>
                            <a href="#" title="Connect Twitter" class="btn social-login twitter-login"><i class="fa fa-twitter fa-lg"></i>connect twitter account</a>
                        </div>
                    </div>
                </div>
                <div class="recent-order-block">
                    <h5 class="recent-order-heading">Recent Orders</h5>
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
                                <td><a href="product-detail.html" title="Pineapple"><img src="Public/images/shop/product-11.png" class="img-responsive" alt="Pineapple"></a></td>
                                <td><a href="product-detail.html" class="order-pdt-name" title="Pineapple">Pineapple</a></td>
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
                <div class="ac-subscribe-block">
                    <h5 class="ac-subscribe-heading">Update Email Preferences</h5>
                    <form id="subscribe-form" action="#">
                        <div class="form-group">
                            <label><input type="checkbox" value="sub-email" checked>Subscribe Origano Email Newsletter</label>
                        </div>
                        <div class="form-group">
                            <label><input type="checkbox" value="sub-deal" checked>Subscribe Origano Deal Alerts</label>
                        </div>
                        <div class="form-group">
                            <label><input type="checkbox" value="sub-sms">Subscribe Origano SMS Alerts</label>
                        </div>
                        <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane"></i> Update Preferences</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- end checkout -->
