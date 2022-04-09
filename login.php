<?php
@session_start();
?>
<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2017 .
**********************************************************************************************************  -->
<!--
Template Name: Origano – Organic Store HTML Template
Version: 1.0.0
Author: Media City
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- head -->

<!-- Mirrored from mediacity.co.in/origano/version3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Dec 2021 13:11:56 GMT -->
<head>
    <title>Origano Store</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Origano" />
    <meta name="keywords" content="origano, html template, organic store template, organic store eCommerce template, ">
    <meta name="author" content="Media City" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" type="image/icon" href="Public/images//favicon/favicon.ico"> <!-- favicon-icon -->
    <!-- theme style -->
    <link href="Public/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> <!-- bootstrap css -->
    <!-- revolution -->
    <link rel="stylesheet" type="text/css" href="Public/revolution/css/settings.css"> <!-- revolution setting css -->
    <link rel="stylesheet" type="text/css" href="Public/revolution/css/layers.css"> <!-- revolution layer css -->
    <link rel="stylesheet" type="text/css" href="Public/revolution/css/navigation.css"> <!-- revolution layer css -->
    <link href="Public/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> <!-- fontawesome css -->
    <link href="Public/css/linearicons.css" rel="stylesheet" type="text/css" /> <!-- linear icons css -->
    <link href="Public/css/eleganticon.css" rel="stylesheet" type="text/css" /> <!-- elegant icons css -->
    <link href="Public/css/organicfood.css" rel="stylesheet" type="text/css" /> <!-- organicfood icons css -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Lato:400,700,900|Playfair+Display:400,400i|Poppins:400,500,600,700|Lora:400,700" rel="stylesheet"> <!-- google font -->
    <link rel="stylesheet" type="text/css" href="Public/css/menumaker.css"> <!-- menu css -->
    <link href="Public/css/owl.carousel.css" rel="stylesheet" type="text/css" /> <!-- owl carousel css -->
    <link href="Public/css/magnific-popup.css" rel="stylesheet" type="text/css" /> <!-- magnify popup css -->
    <link href="Public/css/style.css" rel="stylesheet" type="text/css" /> <!-- custom css -->
    <!-- end theme style -->
</head>
<!--body start-->
<body>
<!-- preloader -->
<div class="preloader">
    <div class="status">
        <div class="status-message">
        </div>
    </div>
</div>
<!-- end preloader -->
<!-- navigation -->
<nav id="nav-bar" class="nav-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="logo">
                    <a href="index.php" title="logo"><img src="Public/images/logo.png" class="img-responsive" alt="logo"></a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="navigation">
                    <div id="cssmenu" class="align-center">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="about_us.php">About Us</a></li>
                                    <li><a href="deals.php">Deals Page</a></li>
                                    <li><a href="terms.php">Terms</a></li>
                                    <li><a href="faq.php">FAQ</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="active"><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="nav-block-right">
                    <ul>
                        <li id="cart" class="cart"><a href="#" title="Shopping Cart"><i class="fs1" aria-hidden="true" data-icon=""></i> (<?php if(isset($_SESSION['cart'])){
                                    echo count($_SESSION['cart']);
                                }else{
                                    echo '0';
                                } ?>) item</a></li>
                        <li><a href="#" class="search-icon" title="Search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- cart -->
                <ul class="cart-box">
                    <li class="cart-footer">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="cart.php" class="btn btn-default" title="View Cart">View Cart</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="checkout.php" class="btn btn-default" title="Checkout">Checkout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- end cart -->
            </div>
        </div>
    </div>
    <!-- search -->
    <div class="search search-pages">
        <div class="container-fluid clearfix">
            <input type="search" class="search-box" placeholder="Type anything here...." />
            <a href="#" class="fa fa-times search-close"></a>
        </div>
    </div>
    <!-- end search -->
</nav>
<!-- end navigation -->
<!-- page banner -->

<section id="page-banner" class="page-banner" style="background-image: url('Public/images/bg/page-banner.jpg');">
    <div class="container">
        <div class="banner-dtl">
            <h3 class="banner-heading">Login</h3>
            <div class="breadcrumb-block">
                <ol class="breadcrumb">
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end page banner -->
<!--  checkout -->
<section id="login" class="account-page login-page register-page">
    <div class="container">
        <h3 class="register-page-heading text-center">Login Now</h3>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <form id="login-form" class="register-form" action="actionUser.php" method="POST">
                <h5 class="register-heading text-center">Proceed To Login</h5>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
                </div>
                <button type="submit" class="btn btn-default" name="btn-login-user">Login</button>
                <?php if(isset($_SESSION['error_login_user'])){ ?>
                    <div class="alert alert-danger" role="alert">
                        Bạn nhập sai thông tin!
                    </div>
                <?php } ?>
                <div class="login-text">
                    <div class="row">
                        <div class="col-xs-6 text-right">
                            <a href="register.php" title="Register With Us">Register With Us</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- end checkout -->
<!-- footer -->
<footer id="footer" class="footer-main-block">
    <div class="container">
        <div class="footer-block">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="about-widget footer-widget">
                        <div class="footer-logo">
                            <img src="Public/images//logo-footer.png" alt="footer-logo">
                        </div>
                        <p>Dedicate yourself to the clean eating lifestyle, and you’ll lose about 3 pounds a week, Reno says. The benefits go beyond weight loss. You'll stay healthy and have more energy. Your eyes will look bright and alert. Your teeth and gums will be healthier. Your skin will glow.</p>
                        <!-- <a href="#" class="read-more" title="Read More"><i class="fa fa-chevron-circle-right"></i> Read More</a> -->
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                <!-- <li><a href="https://www.behance.net/" target="_blank" title="Behance"><i class="fa fa-behance"></i></a></li>
                                <li><a href="https://linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="useful-link-widget footer-widget">
                        <h5 class="widget-heading">Useful Links</h5>
                        <ul>
                            <li><a href="about_us.php" title="About">About</a></li>
                            <li><a href="blog.php" title="Blog">Blog</a></li>
                            <li><a href="cart.php" title="Giỏ hàng">Giỏ Hàng</a></li>
                            <li><a href="faq.php" title="FAQ">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="myaccount-widget footer-widget">
                        <h5 class="widget-heading">My Account</h5>
                        <ul>
                            <li><a href="myaccount.php" title="Thông tin cá nhân">Thông tin cá nhân</a></li>
                            <li><a href="deals.php" title="Dịch vụ">Dịch vụ</a></li>
                            <li><a href="checkout.php" title="Thanh toán">Thanh toán</a></li>
                            <li><a href="forgetPassword.php" title="Quên mật khẩu">Quên mật khẩu</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="contact-widget footer-widget">
                        <h5 class="widget-heading">Contact Info</h5>
                        <form id="contact-form" class="contact-form" action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="info@gmail.com">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Send Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="copyright-block">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="copyright-text">
                        <p>Copyright 2021 <a href="index.php" title="Origano">Origano</a> | All Right Reserved | Designed By <a href="#" title="Media City" target="_blank">Media City</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pad-rt-0">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="terms.php" title="Terms And Condition">Term &amp; Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- jquery -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="Public/js/jquery.min.js"></script> <!-- jquery library js -->
<script type="text/javascript" src="Public/js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="Public/js/menumaker.js"></script> <!-- menumaker js -->
<script type="text/javascript" src="Public/js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="Public/js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js -->
<script type="text/javascript" src="Public/js/jquery.elevatezoom.js"></script> <!-- product zoom js -->
<script type="text/javascript" src="Public/js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="Public/js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="Public/js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="Public/js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="Public/js/jquery.appear.js"></script> <!-- progress bar js -->
<script type="text/javascript" src="Public/js/jquery.countdown.js"></script>  <!-- event countdown js -->
<script type="text/javascript" src="Public/js/imagesloaded.pkgd.js"></script> <!-- image load js-->
<script type="text/javascript" src="Public/js/masonry.pkgd.min.js"></script> <!-- masonry js -->
<script type="text/javascript" src="Public/js/jquery.owl-filter.js"></script> <!-- owl filter js -->
<!-- revolution js files -->
<script type="text/javascript" src="Public/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="Public/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="Public/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="Public/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="Public/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="Public/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="Public/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="Public/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<!-- end revolution js files -->
<script type="text/javascript" src="Public/js/theme.js"></script> <!-- custom js -->
<script type="text/javascript">
    var tpj=jQuery;
    var revapi1061;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_1061_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_1061_1");
        }else{
            revapi1061 = tpj("#rev_slider_1061_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,1250,480],
                gridheight:[868,768,860,720],
                lazyType:"none",
                parallax: {
                    type:"3D",
                    origo:"slidercenter",
                    speed:1000,
                    levels:[2,4,6,8,10,12,14,16,45,50,47,48,49,50,0,50],
                    type:"3D",
                    ddd_shadow:"off",
                    ddd_bgfreeze:"on",
                    ddd_overflow:"visible",
                    ddd_layer_overflow:"visible",
                    ddd_z_correction:50,
                },
                spinner:"off",
                stopLoop:"on",
                stopAfterLoops:0,
                stopAtSlide:1,
                shuffle:"off",
                autoHeight:"off",
                fullScreenAutoWidth:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "60px",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });
    // blog
    var msnry = new Masonry( '.grid', {
        itemSelector: '.grid-item',
    });
    imagesLoaded( '.grid' ).on( 'progress', function() {
        msnry.layout();
    });
    // Masonry Filter
    $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'masonry',
    });

    $('.menu-filter button').on('click', function(){
        $('.menu-filter button').removeClass('active');
        $(this).addClass('active');
        var selector =$(this).attr('data-filter');
        $(".grid").isotope({
            filter: selector,
            animationOption: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });
        return false;
    });
    var container = document.querySelector('.galery'),
        lis = document.querySelectorAll('li'),
        textWrapper = document.querySelector('.highlight'),
        content = document.querySelector('.content');
    function updateText(content){
        textWrapper.innerHTML = content;
    }
    function requestContent(file){
        $('.content').load(file + ' .content');
    }

    function removeCurrentClass(){
        for(var i = 0; i < lis.length; i++){
            lis[i].classList.remove('current');
        }
    }

    function addCurrentClass(elem){
        removeCurrentClass();
        var element = document.querySelector("." + elem);
        element.classList.add('current');
    }

    container.addEventListener('click', function(e){
        if(e.target != e.currentTarget){
            e.preventDefault();
            var data = e.target.getAttribute('data-name'),
                url = data + ".php";
            addCurrentClass(data);
            history.pushState(data, null, url);
            updateText(data);
            requestContent(url);
        }
        e.stopPropagation();
    }, false);


    window.addEventListener('popstate', function(e){
        var character = e.state;

        if (character == null) {
            removeCurrentClass();
            content.innerHTML = " ";
        } else {
            updateText(data);
            requestContent(character + ".php");
            addCurrentClass(character);
        }
    })
</script>
<!-- end jquery -->
</body>
<!--body end -->

<!-- Mirrored from mediacity.co.in/origano/version3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Dec 2021 13:13:16 GMT -->
</html>
