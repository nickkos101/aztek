<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(''); ?></title>
    <meta name="keywords" content="SUP Paddle, stand up paddle boarding paddle, stand up paddle, replaceable blades">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/slick/slick.css"/>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta name="google-site-verification" content="hcM5wD44B0SzOhaacbxgYRROZ3ADlJQh2EwernuKJlM" />
    <meta charset="UTF-8">
    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58366141-3', 'auto');
  ga('send', 'pageview');

</script>
    <?php wp_head(); ?>
</head>
<body>
    <div class="respMenu col-wrap">
        <div class="respMenu-bar">
            <div class="logo column four-fifths">
                <a href="<?php $url = home_url(); echo $url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-mobile.png" alt="Aztek Paddles"/></a>
            </div>
            <div class="mobile-menu-open column fifth talignright">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <div class="respMenu-sub col-wrap">
            <div class="column half">
                <?php wp_nav_menu(array('theme_location' => 'Mobile_Nav_Left',)); ?>
            </div>
            <div class="column half">
                <?php wp_nav_menu(array('theme_location' => 'Mobile_Nav_Right',)); ?>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="container">
            <div class="col-wrap">
                <div class="column full logo taligncenter">
                    <a href="/go/aztek-challenge"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Aztek Paddles"/></a>
                </div>
               <!-- <a href="<?php echo get_site_url(); ?>/get-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/get-fit.png" class="get-fit"></a> -->
                <div class="column two-thirds talignright">
                   <!-- <nav>
                        <div class="social-media">
                            <a href="https://www.facebook.com/AztekPaddles" target="_blank" title="Follow Aztek Paddles on facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook" /></a>
                            <a href="https://twitter.com/AztekPaddles" target="_blank" title="Follow Aztek Paddles on twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter" /></a>
                            <a href="http://instagram.com/aztekpaddles" target="_blank" title="Follow Aztek Paddles on instagram"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="instagram" /></a>
                            <a href="https://www.youtube.com/channel/UCCh9z86LBOKm6JhUL5nFjhA" target="_blank" title="Follow Aztek Paddles on youtube"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="youtube" /></a>
                        </div>
                        <div class="account-links">
                            <?php wp_nav_menu(array('theme_location' => 'Accounts_Nav',)); ?>
                        </div>
                        <div class="navigation">
                            <?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
                        </div>
                        <a href="<?php echo get_site_url(); ?>/cart"><div class="cart-count">
                            <p><?php global $woocommerce; echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></p>
                        </div></a>
                    </nav>
                    <nav class="responsive">
                        <i class="fa fa-align-justify"></i>
                        <ul>
                            <li><a href="">Buy Now</a></li>
                            <li><a href="">Technology</a></li>
                            <li><a href="">Events</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </nav> -->
                </div>
            </div>
        </div>
    </header>
    <div class="msg-bar"><div class="container"></div></div>