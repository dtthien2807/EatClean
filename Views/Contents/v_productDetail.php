<!-- page banner -->
<?php
@session_start();
?>
<section id="page-banner" class="page-banner" style="background-image: url('Public/images/bg/page-banner.jpg');">
    <div class="container">
        <div class="banner-dtl">
            <h3 class="banner-heading">Product Detail</h3>
            <div class="breadcrumb-block">
                <ol class="breadcrumb">
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li class="active">Product Detail</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end page banner -->
<!--  checkout -->
<section id="product-detail" class="product-detail-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="product-desc-img">
                    <img id="zoom-01" src="Admin/Public/myImage/<?php echo $detail_product->image;?>" class="img-responsive" alt="product-desc-1" data-zoom-image="Admin/Public/myImage/<?php echo $detail_product->image;?>">
                </div>
                <div id="gallery-01" class="product-gallery">
                    <div id="product-gallery-slider" class="product-gallery-slider">
                        <div class="item product-gallery-thumb active">
                            <a href="#" data-image="Admin/Public/myImage/<?php echo $detail_product->image;?>" data-zoom-image="Admin/Public/myImage/<?php echo $detail_product->image;?>"><img src="Admin/Public/myImage/<?php echo $detail_product->image;?>" class="img-responsive" alt="product-thumb-1"><div class="product-gallery-overlay"><span><i class="fa fa-search"></i></span></div></a>
                        </div>
                        <?php
                        $m_shop= new m_shop();
                        $select_img = $m_shop->select_img_by_id_product($detail_product->id);
                        foreach ($select_img as $images){
                        ?>
                        <div class="item product-gallery-thumb">
                            <a href="#" data-image="Admin/Public/myImage/product-detail/<?php echo $images->image;?>" data-zoom-image="Admin/Public/myImage/product-detail/<?php echo $images->image;?>"><img src="Admin/Public/myImage/product-detail/<?php echo $images->image;?>" class="img-responsive" alt="product-thumb-2"><div class="product-gallery-overlay"><span><i class="fa fa-search"></i></span></div></a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="product-page-dtl-block">
                    <h5 class="product-dtl-name"><?php echo $detail_product->product;?></h5>
                    <div class="product-dtl-price"><?php echo number_format($detail_product->price);?></div>
                    <div class="product-dtl-rating-block">
                        <div class="shop-products-rating">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                        <div class="rating-text-two">
                            <span><a href="#" title="Reviews">(Based on <?php $m_shop= new m_shop();
                                    $rs = $m_shop->count_review($detail_product->id);
                                    echo $rs->SL;
                                    ?> review)</a></span>
                        </div>
                    </div>
                    <div class="product-desc">
                        <p><br><?php echo $detail_product->description;?></p>
                    </div>
                    <div class="purchase-features-main-block">
                        <div class="row">
                            <div class="col-md-4 pad-rt-0">
                                <div class="purchase-features">
                                    <span><i aria-hidden="true" class="icon_pin_alt"></i>Delivery Time</span><br>3-7 Business Days
                                </div>
                            </div>
                            <div class="col-md-4 pad-lt-0 pad-rt-0">
                                <div class="purchase-features">
                                    <span><i aria-hidden="true" class="icon_currency"></i>Return Available</span><br>Get all your money back
                                </div>
                            </div>
                            <div class="col-md-4 pad-lt-0">
                                <div class="purchase-features border-gray">
                                    <span><i aria-hidden="true" class="icon_star_alt"></i>Loyalty Points</span><br>Get 10 loyalty points
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="product-dtl-btn-main-block">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-8 col-xs-6">
                                        <div class="product-display">
                                            <form id="product-display" action="#">
                                                <div class="select-filter number">
                                                    <span>Quantity:</span>
                                                    <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                                                    <div class="inc qtybutton"> <i class="fa fa-sort-asc"></i></div>
                                                    <div class="dec qtybutton"><i class="fa fa-sort-desc"></i></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="cart-btn-block">
                                            <div class="add-cart-btn-two">
                                                <a href="cart.php?cart=cart&id=<?php echo $detail_product->id; ?>" class="btn btn-default" title="Add To Cart"><i class="fa fa-shopping-basket"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pad-lt-0 pad-rt-0">
                                <div class="coupon-box-block">
                                    <div class="coupon-box">
                                        <form id="coupon-form" class="coupon-form" action="#">
                                            <input type="text" id="coupon" class="form-control" placeholder="Enter Coupon Code">
                                        </form>
                                    </div>
                                    <div class="in-stock-text">
                                        <i class="fa fa-check-square"></i> In stock
                                    </div>
                                </div>
<!--                                <div class="cart-btn-block">-->
<!--                                    <div class="add-cart-btn-two">-->
<!--                                        <a href="#" class="btn btn-default" title="Add To Cart"><i class="fa fa-shopping-basket"></i> Add to cart</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="wishlist-btn">-->
<!--                                    <a href="#" class="btn btn-default" title="Wishlist"><i class="fa fa-heart"></i></a>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="product-info">
                        <ul>
                            <li><span><i class="fa fa-table"></i> Sku: </span>#ABC456-123-M</li>
                            <li><span><i class="fa fa-clock-o"></i> Expiry Date: </span><?php echo $detail_product->date_create;?></li>
                            <li><span><i class="fa fa-pencil-square"></i> Categories: </span><?php $m_shop= new m_shop(); $namecategory = $m_shop->read_category_by_id($detail_product->id_categoryProduct);
                                echo $namecategory->name_categoryProduct;
                                ?></li>
                            <li><span class="share-block"><i class="fa fa-share-alt"></i> Share: </span></li>
                            <li class="social-icon">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#" title="Google Plus"><i class="fa fa-google-plus-square"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-dtl-tab">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews (<?php
                echo $rs->SL;
                ?>)</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="description">
                    <p><?php echo $detail_product->detail_description;?></p>
                    <ul>
                        <li>High Quality Products</li>
                        <li>6 Months Life</li>
                        <li>FSSAI Approved Products Only</li>
                        <li>Chemical Free</li>
                        <li>Produced With Organic Farming</li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="reviews">
                    <div class="blog-comment">
                        <?php
                        $m_shop= new m_shop();
                        $read_review=$m_shop->read_review_by_id($detail_product->id);
                        foreach ($read_review as $rv){
                        ?>
                        <div class="row">
                            <div class="col-xs-10">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img src="Public/images/shop/review-01.jpg" class="media-object" alt="comment-client-01"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading-block">
                                            <h6 class="media-heading"><?php echo $rv->name_user;?>- <span><?php echo $rv->date_review;?></span></h6>
                                            <div class="shop-products-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p><?php echo $rv->content;?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                    if (isset($_SESSION['full-name-users'])) {
                    ?>
                    <div class="blog-comment-send">
                        <h5 class="comments-heading">Post a review</h5>
                        <p>Fill out all required fields to send a message. You have to login to your wordpress account to post any comment. Please don´t spam.<br>Thank you!</p>
                        <form id="comment-form" class="comment-form" method="POST" action="#">
                            <div class="message">
                                <textarea class="form-control" name="message" rows="3" placeholder="Type your message here..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-default" name="btn-add-review">Post Comment</button>
                        </form>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="shop-products-main-block">
            <h2 class="related-products-heading text-center">Related Products</h2>
            <div id="product-dtl-slider" class="product-dtl-slider">
                <?php
                $s = new m_shop();
                $shopp=$s->read_shop();
                foreach ($shopp as $key => $value){ ?>
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
                            <div class="shop-products-price"><?php echo number_format($value->price); ?></div>
                        </div>
                        <div class="shop-products-footer">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="cart.php?cart=cart&id=<?php echo $value->id; ?>" title="Add To Cart"><i class="fa fa-shopping-basket"></i> Add to cart</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="product-detail.php?id=<?php echo $value->id;?>" title="View Detail"><i class="fa fa-file-text-o"></i> View detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- end checkout -->
