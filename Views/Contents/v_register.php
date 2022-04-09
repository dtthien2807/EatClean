
<!-- page banner -->
<section id="page-banner" class="page-banner" style="background-image: url('Public/images/bg/page-banner.jpg');">
    <div class="container">
        <div class="banner-dtl">
            <h3 class="banner-heading">Register</h3>
            <div class="breadcrumb-block">
                <ol class="breadcrumb">
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li class="active">Register</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end page banner -->
<!--  checkout -->
<section id="register" class="account-page register-page">
    <div class="container">
        <h3 class="register-page-heading text-center">Register Now</h3>
        <div class="row">
            <div class="col-sm-6">
                <form id="register-form" class="register-form" action="" method="POST">
                    <h5 class="register-heading text-center">Proceed To Signup Now</h5>
                    <?php
                    include_once 'Views/error.php';
                    $errorClass = new c_error();
                    $errorClass->showError($error_user);
                    //Error::showError($error_1);
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nname" name="name_user" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control date-inputmask" id="date-mask" name="date_user" placeholder="Enter Date">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="numberphone" placeholder="Mobile Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="address-1" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="identity" placeholder="Identity Card">
                    </div>
                    <div class="form-group">
                        <select class="select2 form-control custom-select" name="select_sex" style="width: 100%; height:36px;">
                            <option>Sex</option>
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="confirm-password" name="conf_password" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn btn-default" name="btn-register-user">Register</button>
                    <div class="login-text">
                        <a href="login.php" title="Login Now">Already have an account? Login Now</a>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <div class="why-register-block">
                    <h5 class="why-register-heading">Why register with us?</h5>
                    <ul>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Fast Order Processing</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Get Regular Top Offers</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Earn Reward Points</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Fast Technical Support</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Track Past Orders</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Apply Coupons</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Add Multiple Delivery Address</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Win Event Passes</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Win Gift Vouchers</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Get Free Samples</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Top Notch Quality</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Faster Return Processing</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Trusted Sellers</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>100% Secured</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>PCI Compliance</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Latest Security Standards</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Secured With 256 Bit Encryption</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>SSL Secured Website</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Purchase Protection</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>7 Days Returns Policy</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>Live Chat Support</li>
                        <li><i aria-hidden="true" class="icon_box-checked"></i>FSSAI License Holder</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end checkout -->