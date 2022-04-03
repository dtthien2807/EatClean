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
        <h3 class="address-page-heading text-center">Edit My Address</h3>
        <div class="row">
            <div class="col-sm-12" >
                <form id="billing-form" method="POST" action="#" class="register-form" >
                    <h5 class="register-heading text-center">Edit Billing Address</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" id="b-mobile" name="number-phone" value="<?php
                         echo $read_info_user->numberphone; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="b-address-1" name="address" value="<?php echo $read_info_user->adress; ?>">
                    </div>
                    <button type="submit" class="btn btn-default" name="btn-edit-address">Add Address</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end checkout -->