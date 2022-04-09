<!-- page banner -->
<?php
@session_start();
$info_user = $_SESSION['info-users'];
?>
<section id="page-banner" class="page-banner" style="background-image: url('Public/images/bg/page-banner.jpg');">
    <div class="container">
        <div class="banner-dtl">
            <h3 class="banner-heading">Checkout</h3>
            <div class="breadcrumb-block">
                <ol class="breadcrumb">
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li class="active">Checkout</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end page banner -->
<!--  checkout -->
<section id="checkout" class="checkout-page checkout-main-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form id="checkout-confirm-form" class="checkout-confirm-form" action="#" method="POST">
                    <h4 class="checkout-page-heading">Delivery Address</h4>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" id="cmpname" name="name-user" value="<?php echo $_SESSION['full-name-users'];?>">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $info_user->adress; ?>">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Identity Card</label>
                                <input type="text" class="form-control" id="city" name="cmnd" value="<?php echo $info_user->identity_card; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" class="form-control" id="state" name="birthday" value="<?php echo $info_user->date; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" id="phone" name="number-phone" value="<?php echo $info_user->numberphone; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $info_user->email; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="checkout-btn">
                        <button type="submit" class="btn btn-default" name="add-order">Order</button>
                        <a href="cart.php" class="cancel-text" title="Cancel">Cancel</a>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <div class="order-block">
                    <h4 class="checkout-page-heading">Payment Summary</h4>
                    <div class="cart-total-block">
                        <table class="cart-table-one">
                            <tr>
                                <th class="cart-total-heading">Products</th>
                            </tr>
                            <?php
                            foreach ($product as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value['product']; ?> <span><?php echo $value['qty']; ?></span></td>
                                    <td class="text-right"><?php
                                        $total = $value['qty'] * $value['price'];
                                        echo number_format($total) . ' d';
                                        ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            <tr>
                                <td><hr></td>
                                <td><hr></td>
                            </tr>
                        </table>
                        <table class="cart-table-two">
                            <tr>
                                <td><hr></td>
                                <td><hr></td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th class="text-right"><?php
                                    if(isset($_SESSION['total_cart']))
                                        echo  $_SESSION['total_cart'];
                                    ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="payment">
                    <form id="payment" action="#">
                        <div class="form-group">
                            <input type="radio" name="payment" value="Direct Bank Transfer" checked>
                            <label>Direct Bank Transfer</label>
                            <p>Your order won’t be shipped until the funds have cleared in our account</p>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="payment" value="Cheque Payment">
                            <label>Cheque Payment</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="payment" value="Credit Card">
                            <label>Credit Card</label>
                            <img src="Public/images/shop/credit-cards.jpg" class="img-responsive" alt="credit-card">
                        </div>
                        <div class="form-group">
                            <input type="radio" name="payment" value="paypal">
                            <label>Paypal</label>
                        </div>
                        <div class="checkout-btn">
                            <button type="button" class="btn btn-default">Pay Now</button>
                            <a href="#" class="cancel-text" title="Cancel">cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end checkout -->
