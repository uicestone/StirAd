<?php get_header(); ?>

<div class="container-fluid">
    <div class="container">
        <div class="col-lg-12 ptb_20">
            <a href="<?=site_url()?>">首页</a> / <?php the_category('/'); ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="content col-lg-8 col-md-8 col-sm-8 col-xs-12">

            <?php while(have_posts()): the_post(); ?>
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
            <?php endwhile; ?>

            <div class="ptb_80 text-center"><a href="#" class="btn-mandy">查看更早的内容</a></div>

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
                    <li><?=get_the_category_list('</li> <li>')?></li>
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
