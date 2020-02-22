<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Description" content="<?php bloginfo('Description'); ?>">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php wp_enqueue_style('style', get_stylesheet_uri()); ?>">

  <title>
    <?php bloginfo('Name'); ?> |
    <?php is_front_page() ? bloginfo('Description') : wp_title(); ?>
  </title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
  <?php wp_head(); ?>
  <style>
    .showcase {
      background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/img/showcase.png') ?>) no-repeat center center;
      width:570px;
      height:298px;

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

  <div class="covermain">
    <style>
      .covermain {
        background: url(<?php echo get_theme_mod('cover_image', get_bloginfo('template_url') . '/img/pic.png') ?>) no-repeat center center;
      }
    </style>
    <div>
      <h1 class="card-title" id="maincover"><?php echo get_theme_mod('cover_heading', 'Deploy Your Analytics Across All of Your Cloud & On-Premises Environments'); ?></h1>
    </div>
    <p class="card-text"><?php echo get_theme_mod('cover_text', 'Complete your digital transformation with Sisense — the only cloud-native analytics platform that delivers scalable, flexible, and robust analytics on any cloud or on-premises environment.'); ?></p>
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
    