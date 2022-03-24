<!-- page banner -->
<section id="page-banner" class="page-banner" style="background-image: url('Public/images/bg/page-banner.jpg');">
    <div class="container">
        <div class="banner-dtl">
            <h3 class="banner-heading">Blog Eat clean</h3>
            <div class="breadcrumb-block">
                <ol class="breadcrumb">
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li class="active">Blog</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end page banner -->
<!-- blog masnory page -->
<section id="blog-masonry-page" class="blog-masonry-page masonry-main-block">
    <div class="container text-center">
        <div class="menu-filter button-group masonry-filter-group gallery-filter-group text-center">
            <button class="btn active" data-filter=".all"><span>All</span></button>
            <button class="btn" data-filter=".fruits"><span>Fruits</span></button>
            <button class="btn" data-filter=".vegetables"><span>Vegetables</span></button>
            <button class="btn" data-filter=".bread"><span>Bread</span></button>
            <button class="btn" data-filter=".other"><span>Other</span></button>
        </div>
        <div id="basic-grid-filter-block">
            <div class="grid gallery-items">
                <?php foreach ($blog as $key => $value){ ?>
                    <div class="blog-masonry-block grid-item all">
                        <div class="blog-masonry-img">
                            <a href="single-blog.php?id=<?php echo $value->id; ?>" title="<?php echo $value->title_blog; ?>"><img src="Admin/Public/myImage/<?php echo $value->image;?>" class="img-responsive" alt="blog-masonary"></a>
                        </div>
                        <div class="blog-masonary-dtl">
                            <h6 class="blog-masonary-title"><a href="single-blog.php?id=<?php echo $value->id; ?>"" title="<?php echo $value->title_blog; ?>"><?php echo $value->title_blog; ?></a></h6>
                            <div class="blog-listing-info"><?php echo $value->date_up; ?>  |  <a href="#" title="4">4</a> comments  | <i class="fa fa-heart"></i> <a href="#" title="60">60</a></div>
                            <p><?php echo $value->description; ?></p>
                            <a href="single-blog.php?id=<?php echo $value->id; ?>"" class="view-btn" title="View Post">View Post <i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="load-more-btn-block text-center">
            <a id="loadMore" href="#" class="load-more-btn" title="Load More">...Load More...</a>
        </div>
    </div>
</section>
<!-- end blog masnory page -->