<!DOCTYPE html>

<?php
  $layout_ = empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
  $layout_ = strtolower(trim(preg_replace('/[^a-zA-Z0-9]+/', '-', $layout_), '-'));

  if (is_home()){
    $pagename = "home";
  } else {
    $pagename = get_query_var('pagename');
  }

  $pageId = get_the_ID();
?>

<!--[if IE 8]><html class="lt-ie10 ie8" lang="pt-BR"><![endif]-->
<!--[if IE 9]><html class="lt-ie10 ie9" lang="pt-BR"><![endif]-->
<!--[if gt IE 9]><!-->
<html class="layout-<?php echo $layout_ ?>" id="html" lang="pt-BR">
<!--<![endif]-->
<head prefix="og: http://ogp.me/ns#">
  <meta charset="utf-8">
  <title>
    <?php if (is_home()){
      bloginfo('name');
    }elseif (is_category()){
      single_cat_title(); echo ' -  ' ; bloginfo('name');
    }elseif (is_single()){
      single_post_title();
    }elseif (is_page()){
      bloginfo('name'); echo ': '; single_post_title();
    }else {
      wp_title('',true);
    } ?>
  </title>

  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
  <meta content="True" name="HandheldFriendly">
  <meta content="320px" name="MobileOptimized">
  <meta content="pt-BR" name="language">
  <meta content="Tecmarques" name="author">
  <meta content="Tecmarques" name="publisher">
  <meta content="Tecmarques" name="copyright">

  <meta content="" property="og:title">
  <meta content="pt_BR" property="og:locale">
  <meta content="website" property="og:type">
  <meta content="" property="og:url">
  <meta content="Tecmarques" property="og:site_name">
  <meta content="" property="og:image">
  <meta content="description" property="og:description">

  <meta content="description" name="description">
  <meta content="keywords" name="keywords">

  <link href="<?php bloginfo('template_directory'); ?>/assets/css/style.min.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
  <!--<script charset="utf-8" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.cookie.js" type="text/javascript"></script>-->
  <!-- <script src="https://code.jquery.com/jquery-1.10.1.min.js" type="text/javascript"></script> -->
  <script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/assets/js/lib/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
  <?php //wp_head(); ?>
</head>
<body data-current-page="<?php echo $pagename; ?>" itemscope itemtype="http://schema.org/WebPage">
  <span class="invisible" id="pageInfo" data-layout="<?php echo $layout_; ?>" data-pagename="<?php echo $pagename; ?>" data-bloginfo="<?php echo bloginfo('template_directory'); ?>" data-pageid="<?php echo $pageId; ?>" hidden="hidden"></span>
  <header class="global-header" data-atomic="p-y-xl" id="globalHeader" itemscope itemtype="http://schema.org/WPHeader" role="banner">
    <div class="grid">
      <div class="grid-inline grid-va-m gutter-l">
        <div class="global-header--logo fade-in delay-s" data-atomic="p-r" data-grid="s-2 m-2 l-3">
          <div class="logo brand-holder" id="logo">
            <h2>
              <a href="<?php bloginfo('url'); ?>/" rel="nofollow">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png">
              </a>
            </h2>
          </div>
        </div>
        <div  data-grid="s-2 m-2 l-3x2">
          <a class="btn-toggle-menu" href="#mobileMenu" id="" role="button">
            <span class="invisible">Abrir o Menu Mobile</span>
            <span class="fa fa-bars c-white" role="img"></span>
          </a>
          <section class="main-nav mobile-menu bc-brand-contrast" id="mobileMenu" itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation">
            <header class="mobile-menu--header">
              <h3 class="invisible">Menu mobile</h3>
              <a class="btn-toggle-menu btn-toggle-menu-close" href="#mobileMenu" role="button"><i class="fa fa-times c-white" role="img"></i></a>
              <span class="mobile-menu--title truncate">Tecmarques</span>
            </header>

            <nav id="mobileMenuContainer" class="mobile-menu--container global-header--nav fade-in">
              <ul class="global-header--main-tab list-inline cf gutter-m">
                <li data-grid="s-1 m-1 l-3">
                  <form role="search" method="get" id="searchform" class="navbar-form navbar-left search-topo-input" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="global-header--search" data-atomic="p-r cf">
                      <input class="input input-search" data-atomic="br-m" name="s" id="s" placeholder="Buscar" type="text" value="<?php echo get_search_query(); ?>" />
                      <i class="fa fa-search c-black img-holder" data-atomic="p-a" style="right:0; top: 2px;"></i>
                    </div>
                  </form>
                </li>

                <li aria-haspopup="true" class="list-dropdown with-icon login-menu" data-grid="s-1 m-1 l-3" id='loginMenu' role="menuitem">
                  <a href="#AcessoRestrito" class="btn btn-block btn-black c-brand btn-lang" data-atomic="br-m"><i class="fa fa-lock" data-atomic="fs-l mr-s"></i>Acesso Restrito <i class="fa fa-angle-down" data-atomic="va-b fs-xl ml-xs"></i></a>
                  <ul id="AcessoRestrito" class="list dropdown bc-black shadow c-white" data-atomic="br-b-m p-m" role="menu">
                    <?php include 'form.login.php'; ?>
                  </ul>
                </li>

                <li aria-haspopup="true" class="list-dropdown with-icon lang-menu" data-grid="s-1 m-1 l-3" data-lang="pt" id='langMenu' role="menuitem">
                  <a href="#!Language" class="btn btn-block btn-black c-brand btn-lang" data-atomic="br-m">Language <i class="fa fa-angle-down" data-atomic="va-b fs-xl ml-xs"></i></a>
                  <?php //dynamic_sidebar( 'translate' ); ?>
                </li>
              </ul>
              <ul class="list list-table main-nav c-white" data-atomic="p-y-xl ta-r" role="menubar">
                <?php include '_nav.php'; ?>
              </ul>
            </nav>

            <footer class="mobile-menu--footer text-center">
              <ul class="list-social">
                <?php include '_nav.social.php'; ?>
              </ul>
            </footer>
          </section>
        </div>
      </div>
    </div>
  </header>
  <!-- @GlobalHeader-->

  <nav class="mobile-menu bc-brand" id="mobileMenu" itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation">
    <header class="mobile-menu--header">
      <a class="btn-toggle-menu btn-toggle-menu-close" href="#mobileMenu" role="button">
        <i class="fa fa-times c-white" role="img"></i>
      </a>
      <h3 class="mobile-menu--title text-bold c-brand-contrast truncate">Tecmarques</h3>
    </header>

    <div id="mobileMenuContainer" class="mobile-menu--container">

    </div>

    <footer class="mobile-menu--footer text-center">
      <ul class="list list-social">
        <li>
          <a class="fa fa-facebook-official" data-atomic="fs-xl br-50" href="https://pt-br.facebook.com/" rel="nofollow" target="_blank" title="facebook"></a>
        </li>
        <li>
          <a class="fa fa-instagram" data-atomic="fs-xl br-50" href="https://instagram.com/" rel="nofollow" target="_blank" title="instagram"></a>
        </li>
        <li>
          <a class="fa fa-youtube-play" data-atomic="fs-xl br-50" href="https://www.youtube.com/?hl=pt&gl=BR" rel="nofollow" target="_blank" title="youtube"></a>
        </li>
      </ul>
    </footer>
  </nav>
  <!-- @mobileMenu-->
