<!-- page banner -->

<?php @session_start();
$info_user = $_SESSION['info-users'];
?>
<section id="page-banner" class="page-banner" style="background-image: url('Public/images/bg/page-banner.jpg');">
    <div class="container">
        <div class="banner-dtl">
            <h3 class="banner-heading">Shopping Cart</h3>
            <div class="breadcrumb-block">
                <ol class="breadcrumb">
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li class="active">Cart</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end page banner -->
<!--  cart -->
<section id="cart-page" class="cart-page">
    <div class="container">
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="Close">&times;</a>
            <i class="fa fa-shopping-basket"></i> <?php echo count($product); ?> Items in cart
        </div>
    <form id="order" action="#" method="POST">
        <?php foreach ($product as $key => $value) { ?>
    
        <div class="cart-products-main-block">
            <div class="row">
                <div class="col-sm-8">
                    <div class="cart-products-block">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="cart-product-img">
                                    <a href="" title="Pomegranate"><img src="Admin/Public/myImage/<?php echo $value['image']; ?>" class="img-responsive" alt="Products"></a>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="cart-product-dtl">
                                    <h5 class="cart-product-name"><a href="" title="Pomegranate"><?php echo $value['product']; ?></a></h5>
                                    <div class="cart-parent-page"><a href="#" title="Food">Food</a> / Vegetable</div>
                                    <div class="shop-products-rating">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="cart-btn-block">
                                        <div class="add-cart-btn-two">
                                            <a href="cart.php?cart=delete&idProduct=<?php echo $value['id']; ?>" class="btn btn-default" title="Add To Cart"><i class="fa fa-shopping-basket"></i> Remove from cart</a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a href="#" class="btn btn-default" title="Wishlist"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-dtl-btn">
                                    <div class="btn-title">Qty:</div>
                                    <div class="product-display">
                                            <div class="select-filter number">
                                                <input type="text" value="<?php echo $value['qty']; ?>" name="qty[<?= $value['id']; ?>]" class="cart-plus-minus-box">
                                                <div class="inc qtybutton"> <i class="fa fa-sort-asc"></i></div>
                                                <div class="dec qtybutton"><i class="fa fa-sort-desc"></i></div>
                                            </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="order-block">
                        <div class="cart-total-block">
                            <div class="cart-shipping-info text-right">
                                <div class="cart-shipping-info-text">Est. Delivery : <?php echo date('Y-m-d', time());?></div>
                                <div class="cart-price"><?php echo number_format($value['price']);?></div>

                                <hr>
                            </div>
                            <table class="cart-table-two">
                                <tr>
                                    <td>Price :</td>
                                    <td class="text-right"><?php

                                echo number_format($value['price']) . ' d';

                                 ?></td>
                                </tr>
                                <tr>
                                    <td><hr></td>
                                    <td><hr></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <th class="text-right"><?php
                                    $total = $value['qty'] * $value['price'];
                                        echo number_format($total) . ' d';
                                        ?></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
           

        <button type="submit" class="btn btn-default">Update Cart</button>
        </form>

        <div class="cart-final-block">
            <div class="row">
                <div class="col-sm-8">
                    <div class="cart-final-btn">
                        <a href="shop.php" class="btn btn-default" title="Continue Shopping">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <table class="cart-table-two cart-final-table">
                        <tr>
                            <th>Total</th>
                            <th class="text-right"><span><?php 
                            $total = 0;
                            foreach($product as $k=>$v){
                              $total +=   $v['price']*$v['qty'];
                               ; 
                            } 

                           echo $total;
                           $_SESSION['total_cart'] = $total;
                            ?></span></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-8">
                <div class="cart-coupon-box">
                   
                
                </div>
            </div>
            <div class="col-sm-4 text-right">
                <div class="cart-final-btn cart-pay-btn">
                    <a href="<?php if(isset($_SESSION['full-name-users'])) echo 'checkout-confirm.php';
                    else echo 'checkout.php';?>" class="btn btn-default" title="Proceed To Pay"> Order</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end cart -->
