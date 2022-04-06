<!-- page banner -->

<?php @session_start; ?>
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
       
        <?php foreach($product as $key=>$value){
            ?>
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
                                            <a href="#" class="btn btn-default" title="Add To Cart"><i class="fa fa-shopping-basket"></i> Remove from cart</a>
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
                                        <form id="select-filter-2" action="#">
                                            <div class="select-filter number">
                                                <input type="text" value="<?php echo $value['qty']; ?>" name="qtybutton" class="cart-plus-minus-box">
                                                <div class="inc qtybutton"> <i class="fa fa-sort-asc"></i></div>
                                                <div class="dec qtybutton"><i class="fa fa-sort-desc"></i></div>
                                            </div>
                                        </form>
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
                                <div class="cart-shipping-info-text">Est. Delivery : 26 - 29 Dec</div>
                                <div class="cart-price"><?php $value['price']; ?></div>

                                <hr>
                            </div>
                            <table class="cart-table-two">
                                <tr>
                                    <td>Subtotal :</td>
                                    <td class="text-right">$10</td>
                                </tr>
                                <tr>
                                    <td><hr></td>
                                    <td><hr></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <th class="text-right">$13</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        } ?>
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
                            <th class="text-right"><span>$39</span></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-8">
                <div class="cart-coupon-box">
                    <div class="cart-coupon-text">Have a promo code? Apply Here</div>
                    <form id="cart-coupon-form" class="cart-coupon-form" action="#">
                        <input type="text" id="coupon" class="form-control" placeholder="Enter promo code">
                        <a href="#" class="coupon-apply-text" title="Apply">Apply</a>
                    </form>
                </div>
            </div>
            <div class="col-sm-4 text-right">
                <div class="cart-final-btn cart-pay-btn">
                    <a href="#" class="btn btn-default" title="Proceed To Pay">Proceed to Pay $39</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end cart -->
