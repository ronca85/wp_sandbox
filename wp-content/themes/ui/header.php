<?php // pj(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Primula helps companies increase their online presence. With more than a decade of experience, Primula has become a leader in digital experiences, web design and branding.">
    <meta name="keywords" content="Design, Branding, Web development, Apps">
    <meta name="theme-color" content="#f3ff72">
    <meta name="msapplication-TileColor" content="#f3ff72">

    <link rel="manifest" href="site.webmanifest">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="152x152" href="dist/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dist/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/images/favicons/favicon-16x16.png">
    <link rel="mask-icon" href="dist/images/favicons/safari-pinned-tab.svg" color="#021119">

    <title><?php wp_title(); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900&display=swap&subset=latin-ext" rel="stylesheet">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144274538-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-144274538-1');
    </script>
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>

    <script>
      if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = Array.prototype.forEach
      }

      var templateUrl = '<?php bloginfo('template_url'); ?>'
    </script>
  </head>

  <body>

    <header style="background: teal;">
      <div class="o-container">

        <div class="o-layout">
          <div class="o-layout_item u-1/2@from-medium">
            <?php // get_template_part( 'partials/navigation' ); ?>
            <?php if ( function_exists( tempnav() ) ) tempnav(); ?>
          </div>

          <div class="o-layout_item u-1/2@from-medium">
        
            <?php get_search_form(); ?>

          </div>
        </div>
      </div>

    </header>
		
    <?php get_template_part( 'partials/new/transition-lines'); ?>