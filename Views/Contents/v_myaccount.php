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
                            <?php
                            foreach ($read_order_by_user as $value){
                            $detail = $m_order->read_detail_by_order($value->id);
                                foreach ($detail as $item){
                                    $product = $m_shop->read_shop_by_id($item->id_product);
                                    $he = $product->id;
                                ?>
                                <tr>
                                    <td><a href="product-detail.php?id=<?php echo $product->id; ?>" title="<?php echo $product->product;?>"><img src="Admin/Public/myImage/<?php echo $product->image; ?>" class="img-responsive" alt="<?php echo $product->product;?>"></a>
                                    <td><a href="product-detail.php?id=<?php echo $product->id; ?>" class="order-pdt-name" title="<?php echo $product->product;?>"><?php echo $product->product;?></a></td>
                                    <td><?php echo $value->id;?></td>
                                    <td><?php echo $value->date_order;?></td>
                                    <td><?php echo $value->total_price;?></td>
                                    <td><?php echo $item->amount;?></td>
                                    <td>
                                        <div class="order-status">Shipped on 01-05-2022</div>
                                        <a href="#" class="btn btn-default" title="Track Now"><i class="fa fa-rocket"></i> Track Now</a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
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
