<?php get_header(); ?>

  <div class="row">
    <div class="col-sm-8 blog-main">
      <div class="container text-center">
            <h1 id="topper"><?php echo get_theme_mod('showcase_heading', 'Going Cloud-Native: The Future of Analytics'); ?></h1>
      <section class="showcase">
      </section>
      <p id="botter"><?php echo get_theme_mod('showcase_text', 'As you move your applications and data to the cloud, are you struggling with rigid monolithic analytic applications that cannot truly leverage the benefits of the cloud or fit into your deployment workflows? Whether it is scaling resources automatically, building fully automated deployment pipelines, or leveraging in-built redundancy, cloud-native analytics will allow you to rapidly deliver highly-scalable, resilient, and cost-efficient solutions on any cloud in ways you couldn’t before.'); ?></p>
      </div>

      <section class="boxes">
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <?php if (is_active_sidebar('box1')) : ?>
                <?php dynamic_sidebar('box1'); ?>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box">
              <?php if (is_active_sidebar('box2')) : ?>
                <?php dynamic_sidebar('box2'); ?>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box">
              <?php if (is_active_sidebar('box3')) : ?>
                <?php dynamic_sidebar('box3'); ?>
              <?php endif; ?>
            </div>
          </div>

        </div>
      </section>
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