
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('Public/images/bg/page-banner.jpg');">
    <div class="container">
      <div class="banner-dtl">
        <h3 class="banner-heading">Shopping Page</h3>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index.php" title="Home">Home</a></li>
            <li class="active">Shop</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!--  store -->
  <section id="shop-page-4-col" class="shop-page shop-main-block">
    <div class="container">
      <div class="shop-nav">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="sort-btn">   
              <div class="sort-dropdown dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Sort By: <span class="drp-name" data-bind="label">Default</span>
                  <span><i class="fa fa-sort-desc"></i></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                  <li><a href="#">Discount</a></li>
                  <li><a href="#">Price Low</a></li>
                  <li><a href="#">Price High</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="sort-btn">   
              <div class="sort-dropdown dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Category: <span class="drp-name" data-bind="label">Any</span>
                  <span><i class="fa fa-sort-desc"></i></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <?php
                    foreach ($read_category as $categories){
                    ?>
                  <li><a href="#"><?php echo $categories->name_categoryProduct;?></a></li>
                    <?php
                    }
                    ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-offset-2 col-md-4 col-sm-10 pad-lt-0">
            <div class="row">
              <div class="col-md-5 col-md-offset-3 col-sm-3 col-xs-6">
                <div class="product-display">                    
                  <form id="select-filter" action="#">
                    <div class="select-filter number">
                      <span>Show:</span>
                      <input type="text" value="8" name="qtybutton" class="cart-plus-minus-box">
                      <div class="inc qtybutton"> <i class="fa fa-sort-asc"></i></div>
                      <div class="dec qtybutton"><i class="fa fa-sort-desc"></i></div>
                    </div>
                  </form>               
                </div>
              </div>
              <div class="col-xs-2"> 
                <div class="grid-icon">
                  <a href="#" class="btn active" title="grid icon"><i class="fa fa-th"></i></a>
                </div>
              </div>
              <div class="col-xs-2 pad-lt-0">
                <div class="grid-icon">
                  <a href="#" class="btn" title="grid icon"><i class="fa fa-th-list"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shop-products-main-block text-center">
        <div class="row">
            <?php foreach ($shopp as $key => $value){ ?>
          <div class="col-md-3 col-sm-6">      
            <div class="shop-two-products-block">                      
              <div class="shop-two-products-img">    
                <img class="img-responsive" src="Admin/Public/myImage/<?php echo $value->image;?>" alt="products">
                <div class="overlay-bg">
                  <div class="shop-two-products-rating">
                    <ul>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star-half-o"></i></li>
                    </ul>
                  </div>
                  <div class="shop-two-products-icon">
                    <ul>
                      <li><a href="cart.php?cart=cart&id=<?php echo $value->id; ?>" title="Add To Cart"><i class="fa fa-shopping-bag"></i></a></li>
                      <li><a href="Admin/Public/myImage/<?php echo $value->image;?>" class="product-popup" title="<?php echo $value->product; ?>"><i class="fa fa-search"></i></a></li>
                      <li><a href="#" title="Wish List"><i class="fa fa-heart-o"></i></a></li>
                      <li><a href="product-detail.php?id=<?php echo $value->id;?>" title="Compare"><i class="fa fa-random"></i></a></li>
                    </ul>
                  </div>
                </div>  
              </div>   
              <div class="shop-two-products-dtl">   
                <h5 class="shop-two-products-name" title="<?php echo $value->product; ?>"><a href="product-detail.php"><?php echo $value->product; ?></a></h5>
                <div class="shop-two-products-price"><?php echo number_format($value->price); ?></div>
              </div>  
            </div>
          </div>
            <?php } ?>
        </div>
      </div>
      <div class="pagination-block">
        <div class="row">  
          <div class="col-xs-2">
            <div class="prev">
              <a href="#" class="btn btn-default" title="Previous"><i class="fa fa-long-arrow-left"></i></a>
            </div>
          </div>
          <div class="col-xs-8 text-center">
            <ul class="pagination">
              <li class="active"><a href="#" title="Pagination">1</a></li>
              <li><a href="#" title="Pagination">2</a></li>
              <li><a href="#" title="Pagination">3</a></li>
              <li><a href="#" title="Pagination">4</a></li>
              <li><a href="#" title="Pagination">5</a></li>
            </ul>
          </div>
          <div class="col-xs-2 text-right">
            <div class="next">
              <a href="#" class="btn btn-default" title="Next"><i class="fa fa-long-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end store -->