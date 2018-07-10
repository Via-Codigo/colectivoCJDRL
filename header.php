<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="theme-color" content="#000000" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title><?php 
  // Hack to solve title not apearing on index templates
  // http://stackoverflow.com/questions/9055009/wordpress-wp-title-blank-on-index-page
   bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title('');?>
  </title>


  <?php 
  // FavIcons for different devices 
  get_template_part( "includes/templates/icons" ); ?> 
  
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
  <?php wp_head(); ?>
  <?php if(!WP_DEBUG):  
  // Activate Google analytics only if in production
  ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-XXXXXXX-X', 'auto');
      ga('send', 'pageview');

    </script>
  <?php endif; ?>

</head>

<body <?php body_class(); ?> >
   <header id="header" class="b_colorCcinereous">
            <div class="container con_hei separador_xs">
                <div class="row d_flex align_itemsC">
                    <div id="logo" class="col-sm-4">
                        <a href="<?php echo home_url( "/" ); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/source/images/logo.png" ?>" class="img-responsive" alt="titulo">
                        </a>
                    </div>
                    <?php get_template_part("includes/templates/menu"); ?>
                    
                    
                    <div id="menuH" class="menuHA hidden-lg hidden-md visible-sm visible-xs">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <?php get_template_part("includes/templates/mobile", "menu"); ?>
                
            </div>
     </header>
     <main id="main">