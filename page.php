<?php get_header(); ?>


<div class="row">

  <div class="col-sm-8 blog-main">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <div class="blog-post">
          <h2 class="blog-post-title">
              <?php the_title() ?>
          </h2>
        </div><!-- blog post -->

            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>
        </div>

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
        <?php get_sidebar(); ?>
          </div><!-- blog side bar -->
        </div>
        </div>
  </div>
</div>

<?php get_footer(); ?>