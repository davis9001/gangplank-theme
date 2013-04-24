<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _straps
 * @since _straps 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="#">Gangplank</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
        <?
            $args['theme_location'] = 'main_menu';
            $args['container'] = '';
            $args['container_class'] = '';
            $args['menu_class'] = 'main-menu';
            $args['items_wrap'] = '%3$s';
            $args['walker'] = new menu_walker();
            wp_nav_menu($args);
          ?>
          <li class="dropdown">
            <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Locations <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="/locations/avondale">Avondale, Arizona</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="/locations/chandler">Chandler, Arizona</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="/locations/richmond">Richmond, Virginia</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="/locations/sault">Sault Ste. Marie, Ontario</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="/locations/tucson">Tucson, Arizona</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
<div class="container-fluid">
  <header class="header">
    <div class="row-fluid">
      <div class="logo span4">
        &nbsp;
      </div>
      <div class="span8">
        <h1 class="slogan pull-right"><?php echo get_post_meta($post->ID, 'gp_slogan', true); ?></h1>
      </div>
    </div>
  </header>

  <?php if (get_post_meta($post->ID, 'gp_hero_title', true)) { ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="hero-unit featured">
        <h1><?php echo get_post_meta($post->ID, 'gp_hero_title', true); ?></h1>
        <p>
          <span class="promo">
            <?php echo get_post_meta($post->ID, 'gp_hero_subtitle', true); ?>
            <?php if (get_post_meta($post->ID, 'gp_hero_button_url', true)) { ?>
              <a class="btn btn-primary btn-large" href="<?php echo get_post_meta($post->ID, 'gp_hero_button_url', true); ?>"><?php echo get_post_meta($post->ID, 'gp_hero_button_title', true); ?></a>
            <?php } ?>
          </span>
        </p>
      </div>
    </div>
  </div>
  <?php } ?>
