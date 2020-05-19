<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="icon" type="image/png" href="<?=get_template_directory_URI()?>/img/src/favicon.png" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?=get_template_directory_URI()?>/style.css" />

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>

  <script>
    var baseURL = '<?=site_url()?>';
  </script>

</head>

<body <?php body_class(); ?>>

  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=243085426048812";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <header class="header fadeDown" data-animar>
    <nav>
      <a href="<?=site_url()?>" class="logo-header">
        <img src="<?=get_template_directory_URI()?>/img/src/logo.svg" alt="Logotipo Belmoney" />
      </a>

      <div class="header-wrapper">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'MenuTopo', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
      </div>

      <div class="header-buttons">
        <div class="choose-language">
          <span class="current">PT <img src="<?=get_template_directory_URI()?>/img/src/dropdown.svg" /></span>

          <ul>
            <li><a href="<?=site_url()?>/">EN</a></li>
            <li><a href="<?=site_url()?>/pt">PT</a></li>
            <li><a href="<?=site_url()?>/es">ES</a></li>
            <li><a href="<?=site_url()?>/fr">FR</a></li>
          </ul>
        </div>

        <div class="menu-hamb">
          <span></span>
        </div>
      </div>
    </nav>
  </header>

  <div class="empurra"></div>