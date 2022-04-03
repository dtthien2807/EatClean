<!-- page banner -->
<?php
@session_start();
?>
<section id="page-banner" class="page-banner" style="background-image: url('Public/images/bg/page-banner.jpg');">
    <div class="container">
        <div class="banner-dtl">
            <h3 class="banner-heading">Address Book</h3>
            <div class="breadcrumb-block">
                <ol class="breadcrumb">
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li><a href="myaccount.php" title="My Account">My Account</a></li>
                    <li class="active">Address Book</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end page banner -->
<!--  checkout -->
<section id="address-book" class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="customer-profile-main-block">
                    <div class="customer-profile-block">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-img">
                                    <img src="Public/images/clients/meomeo.png" class="img-responsive" alt="customer">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5 class="customer-name"><?php echo $_SESSION['full-name-users'];?></h5>
                                <div class="ac-status">Premium Account</div>
                            </div>
                        </div>
                    </div>
                    <div class="ac-nav">
                        <ul class="galery">
                            <li><a href="myaccount.php" title="My Account"><i class="fa fa-user-circle-o" data-name="myaccount"></i>My Account</a></li>
                            <li><a href="orderHistory.php" title="Order History"><i aria-hidden="true" class="icon_cart_alt" data-name="orderHistory"></i>Order History</a></li>
                            <li class="active"><a href="addressBook.php" title="Address Book"><i aria-hidden="true" class="icon_contacts_alt" data-name="addressBook"></i>Address Book</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="content">
                    <div class="highlight"><h3 class="register-page-heading text-center">Manage Addresses</h3></div>
                <div class="address-main-block">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="address-block">
                                <h5 class="address-heading">Billing Address</h5>
                                <ul>
                                    <li class="company-name">Media City</li>
                                    <li><?php $info_user = $_SESSION['info-users'];
                                    echo $info_user->adress; ?></li>
                                    <li>Phone: <a href="tel:#" title="Phone"><?php echo $info_user->numberphone; ?></a></li>
                                    <li class="edit-text"><a href="addAddress.php?id=<?php echo $info_user->id; ?>" title="Edit">Edit</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- end checkout -->
