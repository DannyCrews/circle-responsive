<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package circlesurrogacy
 */

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package circlesurrogacy
 */
do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
do_action( 'genesis_meta' );

wp_head(); //* we need this for plugins
?>
</head>
<?php
genesis_markup( array(
  'html5'   => '<body %s>',
  'xhtml'   => sprintf( '<body class="%s">', implode( ' ', get_body_class() ) ),
  'context' => 'body',
) );
do_action( 'genesis_before' );

genesis_markup( array(
  'html5'   => '<div %s>',
  'xhtml'   => '<div id="wrap">',
  'context' => 'site-container',
) );

genesis_markup( array(
  'html5'   => '<div %s>',
  'xhtml'   => '<div id="inner">',
  'context' => 'site-inner',
) );
genesis_structural_wrap( 'site-inner' );
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'circlesurrogacy' ), max( $paged, $page ) );

  ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_enqueue_script( 'common' ) ?>
<?php
  /* We add some JavaScript to pages with the comment form
   * to support sites with threaded comments (when in use).
   */
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

  /* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to add elements to <head> such
   * as styles, scripts, and meta tags.
   */
  wp_head();
?>
<script src='//cameratag.com/api/v4/js/cameratag.js' type='text/javascript'></script>
</head>

<body <?php body_class(); ?>>

<!-- facebook javascript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=108497922641426";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end facebook javascript -->

<!-- sharrre javascript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/socialite.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.sharrre.min.js"></script>

<script>
  jQuery(function(){
    jQuery('.share-buttons').one('mouseenter', function() {
      Socialite.load(jQuery(this)[0]);
    });
  });

  jQuery('.twitter').sharrre({
    share: {
      twitter: true
    },
    enableHover: false,
    enableTracking: true,
    buttons: { twitter: {via: '_JulienH'}},
    click: function(api, options){
      api.simulateClick();
      api.openPopup('twitter');
    }
  });
  jQuery('.facebook').sharrre({
    share: {
      facebook: true
    },
    enableHover: false,
    enableTracking: true,
    click: function(api, options){
      api.simulateClick();
      api.openPopup('facebook');
    }
  });
  jQuery('.googlepluss').sharrre({
    share: {
      googlePlus: true
    },
    enableHover: false,
    enableTracking: true,
    click: function(api, options){
      api.simulateClick();
      api.openPopup('googlePlus');
    }
  });
  jQuery('.linkedin').sharrre({
    share: {
      linkedin: true
    },
    enableHover: false,
    enableTracking: true,
    click: function(api, options){
      api.simulateClick();
      api.openPopup('Linkedin');
    }
  });

</script>
<!-- end sharrre -->

<div id="page" class="hfeed">
  <header id="branding" role="banner" class="row">
    <!-- logo and icons -->

    <div class="span2 pull-left logo">
      <a href="http://www.circlesurrogacy.com"><img alt="Logo" src="http://www.circlesurrogacy.com/assets/logo.png"></a>
    </div>
    <div class="locations pull-right">
      <h6>Boston - Denver - United Kingdom - Sweden</h6>
    </div>
    <div class="header-extras">
      <nav>
        <li class="user-header no-user"><a href="/users/sign_in">User Login</a></li>
        <li id="main-phone"><span class="fa fa-phone"></span><span>(617) 439-9900</span></li>
        <li class="social-links">
          <a href="/parents/gay-parenting">
            <span class="link gay"></span>
          </a>
        </li>
        <li class="social-links">
          <span class="connect">Follow us:</span>
          <a href="http://facebook.com/circlesurrogacy/" target="_blank">
            <span class="link facebook"></span>
          </a>
          <a href="http://twitter.com/circlesurrogacy/" target="_blank">
            <span class="link twitter"></span>
          </a>
          <a href="http://youtube.com/circlesurrogacy/" target="_blank">
            <span class="link youtube"></span>
          </a>
          <a href="http://pinterest.com/circlesurrogacy/" target="_blank">
            <span class="link pintrest"></span>
          </a>
        </li>
      </nav>
    </div>
    <div class="clearfix"></div>

      <!-- main menu -->
      <nav>
        <ul class="nav nav-pills" id="main-menu">
          <li><a href="http://www.circlesurrogacy.com">Home</a></li>
          <li><a href="http://www.circlesurrogacy.com/parents">Parents</a></li>
          <li><a href="http://www.circlesurrogacy.com/surrogates">Surrogates</a></li>
          <li><a href="http://www.circlesurrogacy.com/donors">Donors</a></li>
          <li><a href="http://www.circlesurrogacy.com/costs">Costs</a></li>
          <li><a href="http://www.circlesurrogacy.com">LGBT</a></li>
          <li><a href="http://www.circlesurrogacy.com/1-upcoming-events-consultations">Events</a></li>
          <li><a href="http://www.circlesurrogacy.com/about">About</a></li>
          <li><a href="http://www.circlesurrogacy.com/press">Press</a></li>
          <li class="active"><a href="http://blog.circlesurrogacy.com">Blog</a></li>
        </ul>
      </nav>

  </header><!-- #branding -->

<!--  <div id="tagline">
    <hgroup>
      <h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
      <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
    </hgroup>
  </div>
 -->
  <div id="main">
