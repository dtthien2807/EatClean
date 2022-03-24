<!-- page banner -->
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
                <form id="checkout-form" class="checkout-form" action="#">
                    <h4 class="checkout-page-heading">Delivery Address</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" id="firstname" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" id="lastname" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control" id="cmpname">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="address">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Town / City</label>
                                <input type="text" class="form-control" id="city" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control" id="state" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" id="phone" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Postcode</label>
                                <input type="text" class="form-control" id="pincode" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" id="country" required>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-btn">
                        <button type="submit" class="btn btn-default">Save Address</button>
                        <a href="#" class="cancel-text" title="Cancel">Cancel</a>
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
                            <tr>
                                <td>Your Product Name <span>x3</span></td>
                                <td class="text-right">$20.00</td>
                            </tr>
                            <tr>
                                <td>Your Product Name <span>x1</span></td>
                                <td class="text-right">$10.00</td>
                            </tr>
                            <tr>
                                <td>Your Product Name <span>x5</span></td>
                                <td class="text-right">$80.00</td>
                            </tr>
                            <tr>
                                <td><hr></td>
                                <td><hr></td>
                            </tr>
                        </table>
                        <table class="cart-table-two">
                            <tr>
                                <td>Subtotal :</td>
                                <td class="text-right">$110</td>
                            </tr>
                            <tr>
                                <td>Shipping :</td>
                                <td class="text-right">$23</td>
                            </tr>
                            <tr>
                                <td><hr></td>
                                <td><hr></td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th class="text-right">$133</th>
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
                            <button type="submit" class="btn btn-default">Pay Now</button>
                            <a href="#" class="cancel-text" title="Cancel">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end checkout -->