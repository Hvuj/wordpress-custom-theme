<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Description" content="<?php bloginfo('Description'); ?>">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">

  <title>
    <?php bloginfo('Name'); ?> |
    <?php is_front_page() ? bloginfo('Description') : wp_title(); ?>
  </title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
  <?php wp_head(); ?>
  <style>
    .showcase {
      background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/img/showcase.png') ?>) no-repeat center center;
    }
  </style>
</head>

<body>
  <div class="blog-masthead">
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-light nav-blog" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu(array(
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        ?>
      </nav>
    </div>
  </div>

  <div class="container">
    <div class="blog-header">
      <h1 class="blog-title"><?php bloginfo('Name') ?></h1>
      <p class="lead blog-description">
        <?php $tagline = bloginfo('description'); ?>
        <?php if ($tagline != '') { ?>
          <?php if (option('logo_type') == 'text_logo') { ?>
            <?php bloginfo('description'); ?>
          <?php } else { ?>
            <p class="lead blog-description"><?php bloginfo('description'); ?></p><!-- Site Tagline -->
          <?php } ?>
        <?php } ?></p>
    </div>