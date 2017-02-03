<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title><?php bloginfo('sitename'); ?></title>
    
    <?php wp_head(); ?>
    
    <link rel="stylesheet" id="switch_style" href="#">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?=body_class()?>>

<!-- Preloader -->
<div id="preloader">
    <li><i class="fa fa-circle-o-notch fa-spin"></i></li>
</div>

<div class="page_wrapper">
    <header class="text-white text-center" id="home">
        <div class="navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="<?=get_stylesheet_directory_uri()?>/images/stir.png" width="150"></a>
                </div>
                <?php wp_nav_menu(['theme_location'=>'primary', 'container_class'=>'collapse navbar-collapse', 'menu_class'=>'nav navbar-nav', 'walker'=>new Kinder_Walker_Nav_Menu()]); ?>
            </div>
        </div>

        <img src="<?=get_stylesheet_directory_uri()?>/images/mountain_opt.jpg" class="bg_img" width="2000" height="1337">

        <?php if(is_home()): ?>
        <div class="slider_wrapper">
            <div class="tb container">
                <div class="tb-cell text-center">
                    <div class="container">
                        <div class="slider text-center">

                            <?php foreach (get_posts(array('posts_per_page'=>-1, 'tag'=>'home-slider')) as $post): ?>
                            <div class="slider_item">
                                <h1 class="text-large"><?=$post->post_title?></h1>
                                <h1><?=$post->post_excerpt?></h1>
                                <p class="lead"><?=$post->post_content?><p>
                            </div>
                            <?php endforeach; ?>

                        </div><!-- Slider End -->
                    </div><!-- Container End -->
                </div><!-- TB-Cell End -->
            </div> <!-- Tb Container End -->
        </div> <!-- Slider Wrapper End -->
        <?php elseif(is_404()): ?>
        <div class="slider_wrapper">
            <div class="tb container">
                <div class="tb-cell text-center">
                    <div class="under_construction">
                        <h1 class="text-large">404 哎呀！</h1>
                        <p class="lead upper">你访问的页面不见了哦</p>
                        <div class="col-lg-8 col-lg-offset-2 text-center pt_30">
                            <a href="#" class="btn-mandy">返回首页</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php elseif(is_page('under-construction')): ?>
        <div class="slider_wrapper">
            <div class="tb container">
                <div class="tb-cell text-center">
                    <div class="under_construction">
                        <h1 class="upper">站点正在建设中</h1>
                        <p class="lead upper">我们正在改善一些东西，稍后您就会看到</p>
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div id="countdown"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </header> <!-- Header End -->
