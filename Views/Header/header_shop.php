<!--body start-->
<?php
@session_start();
// echo '<pre>';
// print_r($_SESSION['cart']);
?>
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
                            <li class="active"><a href="shop.php">Shop</a></li>
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
                            <?php
                            if (isset($_SESSION['full-name-users'])) {
                            ?>
                            <li><a href="#">Account</a>
                                <ul>
                                    <li><a href="myaccount.php">My Account</a></li>
                                    <li><a href="orderHistory.php">Order History</a></li>
                                    <li><a href="addressBook.php">Address Book</a></li>
                                    <li><a href="logOut.php?func=exit">Log out</a></li>
                                </ul>
                            </li>
                                <?php
                            }
                            ?>
                            <?php
                            if(empty($_SESSION['full-name-users'])) {
                                ?>
                                <li><a href="login.php">Login</a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="nav-block-right">
                    <ul>
                        <?php
                        if (isset($_SESSION['full-name-users'])) {
                            $useriF = $_SESSION['full-name-users'];
                            ?>
                            <li><a href="myaccount.php" title="My Account"><i class="fs1" aria-hidden="true" data-icon=""></i>
                                    <?php echo $_SESSION['full-name-users'];?></a></li>
                            <li><span><i class="fa fa-square"></i></span></li>
                            <?php
                        }
                        ?>
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
                    <?php
                    if(isset($_SESSION['cart'])){
                        $productCart = $_SESSION['cart'];
                        foreach($productCart as $k=>$v){
                            ?>
                        <li class="cart-content">
                            <div class="cart-img">
                                <a href="product-detail.php?id=<?php echo $v['id'];?>" title="<?php echo $v['product']; ?>"><img src="Admin/Public/myImage/<?php echo $v['image'] ?>" alt="Product"></a>
                            </div>
                            <div class="cart-dtl">
                                <h6 class="cart-title"><a href="product-detail.php?id=<?php echo $v['id'];?>" title="<?php echo $v['product']; ?>"><?php echo $v['product']; ?></a></h6>
                                <div class="cart-meta">
                                    <div class="cart-price"><?php echo $v['price']; ?></div>
                                    <div class="cart-qty">Qty: <?php echo $v['qty']; ?></div>
                                </div>
                                <div class="cart-remove">
                                    <a href="#" title="Remove From Cart"><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                        </li>
                        <?php
                        }
                    }
                    ?>
                    <li class="cart-subtotal text-right">Total: <?php if(isset($_SESSION['total_cart'])) echo $_SESSION['total_cart']; else echo "0";?></li>
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
