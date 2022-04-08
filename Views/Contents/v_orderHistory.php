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
                            <li><a href="myaccount.php" title="My Account"><i class="fa fa-user-circle-o" data-name="myaccount"></i>My Account</a></li>
                            <li class="active"><a href="orderHistory.php" title="My Account"><i aria-hidden="true" class="icon_cart_alt" data-name="orderHistory"></i>Order History</a></li>
                            <li><a href="addressBook.php" title="Address Book"><i aria-hidden="true" class="icon_contacts_alt" data-name="addressBook"></i>Address Book</a></li>
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
                        <?php
                        foreach ($read_order_by_user as $value){
                            $detail = $m_order->read_detail_by_order($value->id);
                            foreach ($detail as $item){
                                $product = $m_shop->read_shop_by_id($item->id_product);
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
            </div>
        </div>
    </div>
</section>
<!-- end checkout -->
