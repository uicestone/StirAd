<?php get_header(); the_post(); ?>

<div class="container-fluid">
    <div class="container">
        <div class="col-lg-12 ptb_20">
            <a href="<?=site_url()?>">首页</a> / <?php the_category('/'); ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="col-lg-8 content">

            <div class="post">
                <div class="sticker">
                    <div class="post_type">
                        <img src="<?=get_stylesheet_directory_uri()?>/images/slider_icon.png" width="29" height="27">
                    </div>
                    <div class="date">
                        <?=get_the_date('d')?>
                        <div class="month"><?=get_the_date('M')?></div>
                    </div>
                </div>
                <div class="featured_image">
                    <a href="#">
                        <?php the_post_thumbnail([1920, 1080]); ?>
                        <span class="hover"></span>
                    </a>
                </div>
                <a href="#"><h2><?php the_title(); ?></h2></a>
                <div class="post_info">
                    <span class="col-lg-3">发布于：<?php the_date(); ?></span>
                    <span class="col-lg-2">作者：<?php the_author(); ?> </span>
                    <hr>
                    <?php the_content(); ?>
                </div>
            </div>

            <ul class="tags clearfix">
                <?php the_tags('<li>', ' ', '</li>'); ?>
            </ul>

            <div class="author-info bottom_border">
                <div class="author-avatar">
                    <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/postauthor.jpg" width="101" height="102" alt="ah" class="avatar"></a>
                </div><!-- .author-avatar -->
                <div class="author-description">
                    <h2 class="author-title"><a href="#">Juan Doe</a></h2>
                    <p class="author-bio">
                        Share a little biographical information to fill out your profile. This may be shown publicly.
                        Share a little biographical information to fill out your profile. This may be shown publicly.
                    </p>
                </div><!-- .author-description -->
            </div>


            <div class="related clearfix">
                <h3 class="ptb_10">Related Articles</h3>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 nlp">
                    <div class="featured_image"><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/related1.jpg" width="275"
                                                                 height="150"><span class="hover"></span></a></div>
                    <a href="#">How To Become A Top Wordpress Professional</a></div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 nlp">
                    <div class="featured_image"><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/related2.jpg" width="275"
                                                                 height="150"><span class="hover"></span></a></div>
                    <a href="#">How To Become A Top Wordpress Professional</a></div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 nlp">
                    <div class="featured_image"><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/related3.jpg" width="275"
                                                                 height="150"><span class="hover"></span></a></div>
                    <a href="#">How To Become A Top Wordpress Professional</a></div>
            </div>

        </div>
        <div class="sidebar col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="sidebar_item">
                <form action="<?=site_url()?>" class="searchform">
                    <input name="s" type="text" value="" size="30" placeholder="搜索">
                    <button class="search icon icon-search" type="submit" id="searchsubmit"></button>
                </form>
            </div>

            <div class="sidebar_item">
                <h3>分类</h3>
                <ul class="categories">
                    <li><?php the_category(); ?></li>
                </ul>
            </div>

            <div class="sidebar_item">
                <h3>Popular Post</h3>
                <ul class="recent_post">
                    <li>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 np">
                                <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/mountain.jpg" width="3000" height="2340"></a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <a href="#">How To Improve And Refine Your WordPress Theme Development Process</a>
                                <a href="#" class="comment-link">5 Comments</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 np">
                                <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/mountain.jpg" width="3000" height="2340"></a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <a href="#">How To Improve And Refine Your WordPress Theme Development Process</a>
                                <a href="#" class="comment-link">5 Comments</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 np">
                                <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/mountain.jpg" width="3000" height="2340"></a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <a href="#">How To Improve And Refine Your WordPress Theme Development Process</a>
                                <a href="#" class="comment-link">5 Comments</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 np">
                                <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/mountain.jpg" width="3000" height="2340"></a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <a href="#">How To Improve And Refine Your WordPress Theme Development Process</a>
                                <a href="#" class="comment-link">5 Comments</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 np">
                                <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/mountain.jpg" width="3000" height="2340"></a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <a href="#">How To Improve And Refine Your WordPress Theme Development Process</a>
                                <a href="#" class="comment-link">5 Comments</a></div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
       