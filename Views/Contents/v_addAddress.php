<!-- page banner -->
<section id="page-banner" class="page-banner" style="background-image: url('Public/images/bg/page-banner.jpg');">
    <div class="container">
        <div class="banner-dtl">
            <h3 class="banner-heading">Add Address</h3>
            <div class="breadcrumb-block">
                <ol class="breadcrumb">
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li><a href="myaccount.php" title="My Account">My Account</a></li>
                    <li class="active">Add Address</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end page banner -->
<!--  checkout -->
<section id="add-address" class="account-page register-page add-address-page">
    <div class="container">
        <h3 class="address-page-heading text-center">Add New Address</h3>
        <div class="row">
            <div class="col-sm-6">
                <form id="register-form" action="#" class="register-form">
                    <h5 class="register-heading text-center">Add Shipping Address</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="firstname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" placeholder="Mobile Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="address-1" placeholder="Address Line 1">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="address-2" placeholder="Address Line 2">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="city" placeholder="City">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="state" placeholder="State">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="pincode" placeholder="Pincode">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="country" placeholder="Country" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Add Address</button>
                </form>
            </div>
            <div class="col-sm-6">
                <form id="billing-form" action="#" class="register-form">
                    <h5 class="register-heading text-center">Add Billing Address</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="b-firstname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="b-lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="b-mobile" placeholder="Mobile Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="b-address-1" placeholder="Address Line 1">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="b-address-2" placeholder="Address Line 2">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="b-city" placeholder="City">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="b-state" placeholder="State">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="b-pincode" placeholder="Pincode">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="b-country" placeholder="Country" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Add Address</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end checkout -->