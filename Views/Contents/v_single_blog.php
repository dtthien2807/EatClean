<?php
@session_start();
?>
<section id="blog-single-with-audio" class="blog-single-with-image outline-50">
    <div class="banner">
        <img src="Public/images/blog-single/banner-2.jpg" class="img-responsive" alt="banner">
    </div>
    <div class="container">
        <div class="blog-single-block">
            <div class="blog-user-detail">
                <div class="row">
                    <div class="col-md-3 col-sm-5">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="blog-user-img">
                                    <img src="Public/images/clients/meomeo.png" class="img-responsive" alt="blog-user">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="blog-user-info">
                                    <h5 class="blog-user-info-heading"><?php echo $blogg->name_admin;?></h5>
                                    <div class="blog-user-info-sub-heading">Administrator</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-8 col-sm-12">
                        <div class="blog-user-profile">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="blog-user-info">
                                        <h5 class="blog-user-info-heading">Date</h5>
                                        <div class="blog-user-dtl"><?php echo $blogg->date_up;?></div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-5">
                                    <div class="blog-user-info">
                                        <h5 class="blog-user-info-heading">Tags</h5>
                                        <div class="blog-user-dtl"><a href="#" title="Design">Design</a>/<a href="#" title="Storytelling">Storytelling</a>/<a href="#" title="Cinematography">Cinematography</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 pad-0">
                <div class="topic-block">
                    <h5 class="topic-heading">I Am Speechless</h5>
                    <div class="breadcrumb-block">
                        <ul class="breadcrumb">
                            <li><a href="index.php" title="Home">Home</a></li>
                            <li><a href="blog.php" title="Blog">Blog</a></li>
                            <li class="active"><a href="#" title="<?php echo $blogg->title_blog;?>"><?php echo $blogg->title_blog;?></a></li>
                        </ul>
                    </div>
                    <div class="topic-btn-block">
                        <?php $m_blog = new m_blog();
                        $read_blog = $m_blog->read_blog_by_id($blogg->id);
                        $pre = $m_blog->read_blog_by_id($blogg->id-1);
                        $next = $m_blog->read_blog_by_id($blogg->id+1);?>
                        <a href="single-blog.php?id=<?php if($pre == '') { echo $blogg->id;} else echo $blogg->id-1;?>" class="btn pagi-btn-pre" title="Previous"><i class="fa fa-angle-double-left"></i>Previous</a>
                        <a href="single-blog.php?id=<?php if($next =='') { echo $blogg->id;} else echo $blogg->id+1;?>" class="btn pagi-btn-nxt" title="Next">Next<i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 pad-0">
                <div class="single-blog-full-article">
                    <h2 class="article-heading"><?php echo $blogg->title_blog;?></h2>
                    <blockquote class="special-block">
                        <?php echo $blogg->content;?>
                    </blockquote>
<!--                    <p class="text">-->
<!--                        Lorem ipsum dolor sit amet, sit vidit malis aeterno an, mundi vituperata ea eos. Sit choro verear aliquando ne. Malis denique mei ex, te nonumes partiendo laboramus mea. Ei eum partem sententiae, pri in modo docendi. No mei debet tractatos, mei id salutatus percipitur, et eam populo fuisset iudicabit. Nam nusquam argumentum partiendo pri.-->
<!--                    </p>-->
                    <div class="single-inner-blog">
                        <h4 class="inner-blog-heading"><span>Hey you!</span> Is it me you’re looking for?</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inner-blog-img">
                                    <img src="Admin/Public/myImage/<?php echo $blogg->image;?>" class="img-responsive" alt="single-blog-img">
                                </div>
                                <div class="inner-blog-title text-center">image</div>
                            </div>
                            <div class="col-md-6">
                                <div class="inner-blog-text">
                                    <?php echo $blogg->description;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="share-btns">
                        <ul>
                            <li>Share:</li>
                            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-blog-related-post">
            <h4 class="related-post-heading">Related Post</h4>
            <div class="row">
                <?php

                foreach ($blog_index_3 as $key => $item){ ?>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-grid-block">
                        <div class="blog-grid-img">
                            <a href="single-blog.php?id=<?php echo $item->id; ?>" title="<?php echo $item->title_blog; ?>"><img src="Admin/Public/myImage/<?php echo $item->image;?>" class="img-responsive" alt="blog-img"></a>
                        </div>
                        <div class="blog-grid-dtl">
                            <div class="date"><?php echo $item->date_up; ?></div>
                            <h5 class="blog-grid-dtl-heading"><a href="#" title="<?php echo $item->title_blog; ?>"><?php echo $item->title_blog; ?></a></h5>
                            <a href="single-blog.php?id=<?php echo $item->id; ?>" class="btn arw-btn" title="Continue">Continue</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="blog-comment">
            <h4 class="related-post-heading"><?php $m_blog= new m_blog();
                $count_comment = $m_blog->count_comment($blogg->id);
                echo $count_comment->soluong;
                ?> Comments</h4>
            <?php
            $read_comment = $m_blog->read_comment_by_id($blogg->id);
            foreach ($read_comment as $rc){
            ?>
            <div class="row">
                <div class="col-xs-10">
                    <div class="media">
                        <div class="media-left">
                            <a href="#" title="User"><img src="Public/images/blog/comment-user-05.jpg" class="media-object" alt="comment-client-01"></a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading-block">
                                <h6 class="media-heading"><?php echo $rc->name;?> <span><?php echo $rc->date;?></span></h6>
                                <div class="shop-products-rating">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p><?php echo $rc->content;?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="blog-comment-send">
            <h5 class="comments-heading">Leave A Comment</h5>
            <p>Fill out all required fields to send a message. You have to login to your wordpress account to post any comment. Please don´t spam.<br>Thank you!</p>
            <form id="comment-form" class="comment-form" action="#" method="POST">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name...">
                        </div>
                    </div>

                </div>
                <div class="message">
                    <textarea class="form-control" name="message" rows="3" placeholder="Type your message here..."></textarea>
                </div>
                <button type="submit" class="btn btn-default" name="btn-add-comment">Post Comment</button>
            </form>
        </div>
    </div>
</section>
