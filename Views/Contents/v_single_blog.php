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
                                    <img src="Public/images/blog/blog-single-user-02.jpg" class="img-responsive" alt="blog-user">
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
                                <div class="col-md-3 col-sm-4">
                                    <div class="blog-user-info">
                                        <h5 class="blog-user-info-heading">Category</h5>
                                        <div class="blog-user-dtl"><a href="#" title="Food">Food</a></div>
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
                        <a href="single-blog-with-video.html" class="btn pagi-btn-pre" title="Previous"><i class="fa fa-angle-double-left"></i>Previous</a>
                        <a href="single-blog-with-audio.html" class="btn pagi-btn-nxt" title="Next">Next<i class="fa fa-angle-double-right"></i></a>
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
                <?php foreach ($blog as $key => $value){ ?>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-grid-block">
                        <div class="blog-grid-img">
                            <a href="single-blog.php?id=<?php echo $value->id; ?>" title="<?php echo $value->title_blog; ?>"><img src="Admin/Public/myImage/<?php echo $value->image;?>" class="img-responsive" alt="blog-img"></a>
                        </div>
                        <div class="blog-grid-dtl">
                            <div class="date"><?php echo $value->date_up; ?></div>
                            <h5 class="blog-grid-dtl-heading"><a href="#" title="<?php echo $value->title_blog; ?>"><?php echo $value->title_blog; ?></a></h5>
                            <a href="single-blog.php?id=<?php echo $value->id; ?>" class="btn arw-btn" title="Continue">Continue</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="blog-comment">
            <h4 class="related-post-heading">02 Comments</h4>
            <div class="row">
                <div class="col-xs-10">
                    <div class="media">
                        <div class="media-left">
                            <a href="#" title="User"><img src="Public/images/blog/comment-user-05.jpg" class="media-object" alt="comment-client-01"></a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading-block">
                                <h6 class="media-heading">Johnathan Doe - <span>posted 2 minutes ago</span></h6>
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
                            <p>Ad sumo admodum tincidunt cum. Mei et ullum lobortis, virtute accusamus pertinacia ne vim. At summo aliquando ius. Sea ad munere nullam admodum. Quo legere vivendo pericula et, ea aliquam placerat ullamcorper mei. Vide tractatos ei eos. Duo dicta commune intellegam cu, cu eum partem omnesque prodesset. Mea eripuit voluptatum in. Congue aperiam maiestatis et mea, nih</p>
                            <div class="media comments-reply">
                                <div class="media-left">
                                    <a href="#" title="User"><img src="Public/images/blog/comment-user-06.jpg" class="media-object" alt="comment-client-02"></a>
                                </div>
                                <div class="media-body">
                                    <div class="media-heading-block">
                                        <h6 class="media-heading-reply">Susan Muscluas - <span>posted 3 hours ago</span></h6>
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
                                    <p>Ad sumo admodum tincidunt cum. Mei et ullum lobortis, virtute accusamus pertinacia ne vim. At summo aliquando ius. Sea ad munere nullam admodum. Quo legere vivendo pericula et, ea aliquam placerat ullamcorper mei. Vide tractatos ei eos. Duo dicta commune intellegam cu, cu eum partem omnesque prodesset et mea, nihil.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="media-reply-block">
                        <div class="media-reply">
                            <a href="#"><i class="fa fa-mail-forward" title="Reply"></i> Reply</a>
                        </div>
                        <div class="media-reply hidden-xs">
                            <a href="#"><i class="fa fa-mail-forward" title="Reply"></i> Reply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-comment-send">
            <h5 class="comments-heading">Leave A Comment</h5>
            <p>Fill out all required fields to send a message. You have to login to your wordpress account to post any comment. Please don´t spam.<br>Thank you!</p>
            <form id="comment-form" class="comment-form" action="#">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name...">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="youremail@email.com">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject (Optional)">
                        </div>
                    </div>
                </div>
                <div class="message">
                    <textarea class="form-control" name="mesaage" rows="3" placeholder="Type your message here..."></textarea>
                </div>
                <button type="button" class="btn btn-default">Post Comment</button>
            </form>
        </div>
    </div>
</section>
