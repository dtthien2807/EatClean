<!-- <section id="home-slider" class="home-slider"> -->
<?php
include ("Models/m_blog.php");
?>
<div class="item home-slider-bg" style="background-image: url('Public/images/slider/slider-01.jpg')">
    <div class="overlay-bg"></div>
    <div class="container">
        <div class="slider-dtl">
            <h1 class="slider-heading">Health</h1>
            <h1 class="slider-heading">&amp; Energy</h1>
            <h2 class="slider-sub-heading">Discover new diet</h2>
        </div>
    </div>
</div>

<!-- </section> -->
<!--  end slider -->
<!-- collection -->
<section id="collection" class="collection-main-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pad-0">
                <div class="collection-img">
                    <img src="Public/images/img_moi.jpg" class="img-responsive" alt="collection">
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="collection-dtl">
                    <div class="collection-icon">
                        <img src="Public/images/icons/farmer-icon.png" class="img-responsive" alt="farmer-icon">
                    </div>
                    <h4 class="collection-sub-heading">Eat clean</h4>
                    <h1 class="collection-heading">Diet</h1>
                    <p>At Origano, we will try to give you the best experience with the products in our store. We always update and share with you daily useful menus and achieve the expected results. Besides, our products are also a good choice for you. </p>
                    <a href="about_us.php" class="btn btn-default" title="Read More">Read More</a>
                    <div class="collection-bg">
                        <img src="Public/images/bg/collection-bg.jpg" class="img-responsive" alt="collection-bg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- collection end  -->
<!-- welcome -->
<section id="welcome" class="welcome-main-block-three">
    <div class="container">
        <div class="welcome-heading-block text-center">
            <h1 class="welcome-heading">Origano</h1>
            <h4 class="welcome-sub-heading">Store</h4>
        </div>
        <p class="welcome-text text-center">We started <span>Origano</span> as a option for people like us who are looking for ways to improve your health and live a healthier lifestyle</p>
        <!-- <div class="welcome-features-main-block">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="welcome-features-block">
                <h1 class="welcome-features-heading">Original</h1>
                <h2 class="welcome-features-sub-heading">Organic</h2>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="welcome-features-block">
                <h1 class="welcome-features-heading">Always</h1>
                <h2 class="welcome-features-sub-heading">Fresh</h2>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="welcome-features-block">
                <h1 class="welcome-features-heading">Without</h1>
                <h2 class="welcome-features-sub-heading">Pesticides</h2>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="welcome-features-block">
                <h1 class="welcome-features-heading">Healthy</h1>
                <h2 class="welcome-features-sub-heading">Family</h2>
              </div>
            </div>
          </div>
        </div> -->
    </div>
</section>
<!-- end welcome -->
<!-- products -->
<section id="products-block" class="products-main-block">
    <div class="container-fluid">
        <div class="shop-products-main-block">
            <div class="section-three text-center">
                <h2 class="section-heading">Our Products</h2>
                <h4 class="section-sub-heading">Featured Product</h4>
            </div>
            <div class="store-nav text-center">
                <div class="btn-filter-wrap">
                    <ul>
                        <li class="btn btn-filter btn-active" data-filter="*"><span>All</span></li>
                        <?php
                        foreach ($read_category as $categories){
                        ?>
                        <li class="btn btn-filter" data-filter=".<?php echo $categories->id;?>"><span><?php echo $categories->name_categoryProduct;?></span></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div id="products-slider" class="products-slider">
                <?php foreach ($shopp as $key => $value){ ?>
                <div class="item shop-products other">
                    <div class="shop-products-block">
                        <div class="shop-products-img">
                            <a href="product-detail.php?id=<?php echo $value->id;?>" title="<?php echo $value->product; ?>"><img src="Admin/Public/myImage/<?php echo $value->image;?>" class="img-responsive" alt="Grapes"></a>
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
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!-- products end  -->
<!-- free shipping -->
<section id="shipping" class="shipping-main-block">
    <div class="container">
        <div class="shipping-block" style="background-image: url('Public/images/bg/shipping-bg.jpg')">
            <div class="shipping-dtl text-center">
                <h3 class="shipping-heading">Free Shipping On All Orders Over 200.000 VNĐ</h3>
                <!-- <p>Compellingly optimize scalable niche markets for error-free deliverables.</p> -->
            </div>
        </div>
    </div>
</section>
<!-- end free shipping -->
<!-- features -->
<section id="features" class="features-main-block">
    <div class="container">
        <div class="section-three text-center">
            <h2 class="section-heading">Our Features</h2>
            <h4 class="section-sub-heading">Best Services at Your Home</h4>
        </div>
        <div class="our-features-block">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-features">
                        <div class="row">
                            <div class="col-xs-2 pad-rt-0">
                                <div class="features-img">
                                    <img src="Public/images/icons/features-01.png" class="img-responsive" alt="features">
                                </div>
                            </div>
                            <div class="col-xs-10">
                                <h5 class="features-heading">Always Fresh</h5>
                                <h6 class="features-sub-heading">Đối với những sản phẩm tươi, chúng tôi luôn cố gắng giao hàng tới cho bạn nhanh nhất có thể để sản phẩm luôn trong tình trạng đảm bảo chất lượng tươi sạch mà người dùng yêu cầu.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="our-features">
                        <div class="row">
                            <div class="col-xs-2 pad-rt-0">
                                <div class="features-img">
                                    <img src="Public/images/icons/features-04.png" class="img-responsive" alt="features">
                                </div>
                            </div>
                            <div class="col-xs-10">
                                <h5 class="features-heading">Fruit Diets</h5>
                                <h6 class="features-sub-heading">Đối với trái cây, chúng tôi sẽ có hệ thống đảm bảo cho chúng không bị hỏng hay bị va đập trong qua trình vận chuyển để người dùng có thể có trải nghiệm tốt nhất.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="our-features">
                        <div class="row">
                            <div class="col-xs-2 pad-rt-0">
                                <div class="features-img">
                                    <img src="Public/images/icons/features-06.png" class="img-responsive" alt="features">
                                </div>
                            </div>
                            <div class="col-xs-10">
                                <h5 class="features-heading">Healthy Diets</h5>
                                <h6 class="features-sub-heading">Đến với những sản phẩm của chúng tôi, bạn có thể dựa theo những thực đơn chúng tôi chia sẻ để có thể đảm bảo sức khỏe theo lối sống Eat clean, vừa bảo vệ sức khỏe của bạn cũng như chính gia đình của bạn.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features end  -->
<!-- farmers -->
<section id="farmers" class="farmers-main-block farmers-main-block-two">
    <div class="container text-center">
        <div class="section-three">
            <h2 class="section-heading">Inspirational people</h2>
            <h4 class="section-sub-heading">We Are Doing Best</h4>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="farmers-block">
                    <div class="farmers-img">
                        <img src="Public/images/farmers/nk.jpg" class="img-responsive" alt="farmers" style="width: 344px;">
                    </div>
                    <div class="farmers-dtl">
                        <h2 class="farmers-name">Ngọc Khánh</h2>
                        <div class="farmers-post">Người truyển cảm hứng</div>
                        <p>Là 1 tiktoker được mọi người biết đến khi cô luôn luôn truyền năng lượng tích cực và chia sẻ những thực đơn Eat clean mới mẻ </p>
                    </div>
                    <div class="farmers-social">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="farmers-block">
                    <div class="farmers-img">
                        <img src="Public/images/farmers/bc.jpg" class="img-responsive" alt="farmers">
                    </div>
                    <div class="farmers-dtl">
                        <h2 class="farmers-name">Châu Bùi</h2>
                        <div class="farmers-post">Người truyền cảm hứng</div>
                        <p>Là 1 fashionista nổi tiếng tại Việt Nam, Châu Bùi đã truyền cảm hứng những lối sống lành mạnh cho giới trẻ ngày nay.</p>
                    </div>
                    <div class="farmers-social">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="farmers-block">
                    <div class="farmers-img">
                        <img src="Public/images/farmers/chicken.jpeg" class="img-responsive" alt="farmers" style="width: 344px;">
                    </div>
                    <div class="farmers-dtl">
                        <h2 class="farmers-name">ChickenEatclean</h2>
                        <div class="farmers-post">Người truyền cảm hứng</div>
                        <p>Cũng là 1 tiktoker được mọi người biết đến khi cô luôn luôn truyền năng lượng tích cực và chia sẻ những thực đơn Eat clean mới và khá hấp dẫn.</p>
                    </div>
                    <div class="farmers-social">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- farmers end  -->
<!-- news -->
<section id="news" class="news-main-block">
    <div class="container">
        <div class="section-three text-center">
            <h2 class="section-heading">Best News</h2>
            <h4 class="section-sub-heading">Keep Up To Date With Us</h4>
        </div>
        <div class="row">
            <?php
            $b = new m_blog();
            $blog_index = $b->read_blog_with_2();
            foreach ($blog_index as $key => $item){
            ?>
            <div class="col-md-6">
                <div class="news-block">
                    <div class="row">
                        <div class="col-sm-6 pad-rt-0">
                            <div class="news-img">
                                <a href="single-blog.php?id=<?php echo $item->id;?>" title="<?php echo $item->title_blog;?>"><img src="Admin/Public/myImage/<?php echo $item->image;?>" class="img-responsive" alt="news"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 pad-lt-0">
                            <div class="news-post-block">
                                <h6 class="news-title"><a href="single-blog.php?id=<?php echo $item->id;?>" title="<?php echo $item->title_blog;?>"><?php echo $item->title_blog;?></a></h6>
                                <div class="news-info"><?php echo $item->date_up;?></div>
                                <p><?php echo $item->description;?></p>
                                <a href="single-blog.php?id=<?php echo $item->id;?>" class="news-read-more" title="Read More"><i class="fa fa-chevron-circle-right"></i> Read More</a>
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
</section>
<!-- end news -->