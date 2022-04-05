<!-- page banner -->
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
            <i class="fa fa-shopping-basket"></i>3 Items in cart
        </div>
        <div class="cart-products-main-block">
            <div class="row">
                <div class="col-sm-8">
                    <div class="cart-products-block">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="cart-product-img">
                                    <a href="product-detail.php" title="Pomegranate"><img src="Public/images/shop/product-07.png" class="img-responsive" alt="Products"></a>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="cart-product-dtl">
                                    <h5 class="cart-product-name"><a href="product-detail.php" title="Pomegranate">Pomegranate</a></h5>
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
                                                <input type="text" value="9" name="qtybutton" class="cart-plus-minus-box">
                                                <div class="inc qtybutton"> <i class="fa fa-sort-asc"></i></div>
                                                <div class="dec qtybutton"><i class="fa fa-sort-desc"></i></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="or-text">or</div>
                                <div class="product-dtl-btn box-qunty-btn">
                                    <div class="btn-title">Box:</div>
                                    <div class="sort-btn">
                                        <div class="sort-dropdown dropdown">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <span class="drp-name" data-bind="label">10 kg</span>
                                                <span><i class="fa fa-sort-desc"></i></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <li><a href="#" title="dropdown">20 kg</a></li>
                                                <li><a href="#" title="dropdown">50 kg</a></li>
                                                <li><a href="#" title="dropdown">100 kg</a></li>
                                            </ul>
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
                                <div class="cart-shipping-info-text">Est. Delivery : 26 - 29 Dec</div>
                                <div class="cart-price"><span>$20.00</span>$10.00</div>
                                <div class="cart-promo"><span>50%</span></div>
                                <hr>
                            </div>
                            <table class="cart-table-two">
                                <tr>
                                    <td>Subtotal :</td>
                                    <td class="text-right">$10</td>
                                </tr>
                                <tr>
                                    <td>Shipping :</td>
                                    <td class="text-right">$3</td>
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
    <div class="container-fluid">
        <div class="shop-products-main-block">
            <h2 class="related-products-heading text-center">Related Products</h2>
            <div id="product-dtl-slider" class="product-dtl-slider">
                <?php foreach ($shopp as $key => $value){ ?>
                <div class="item shop-products-block">
                    <div class="shop-products-img">
                        <a href="product-detail.php?id=<?php echo $value->id;?>" title="<?php echo $value->product; ?>"><img src="Admin/Public/myImage/<?php echo $value->image;?>" class="img-responsive" alt="Product"></a>
                    </div>
                    <div class="shop-products-dtl-main">
                        <div class="shop-products-dtl">
                            <h5 class="shop-products-name"><a href="product-detail.php?id=<?php echo $value->id;?>" title="<?php echo $value->product; ?>"><?php echo $value->product; ?></a></h5>
                            <div class="shop-products-rating">
                                <ul>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                    <li><i class="fa fa-star active"></i></li>
                                </ul>
                            </div>
                            <div class="shop-products-price"><span>$85.00</span> <?php echo number_format($value->price); ?></div>
                        </div>
                        <div class="shop-products-footer">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="cart.php" title="Add To Cart"><i class="fa fa-shopping-basket"></i> Add to cart</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="product-detail.php?id=<?php echo $value->id;?>" title="View Detail"><i class="fa fa-file-text-o"></i> View detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- end cart -->
