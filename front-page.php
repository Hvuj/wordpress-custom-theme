<?php get_header(); ?>
<div class="container">


  <div class="row">

    <div class="col-sm-8 blog-main">

      <section class="showcase">

        <div class="container">
          <h1>Custom Bootstrap Wordpress Theme</h1>
          <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam</p>
        </div>
        <a class="btn btn-primary btn-lg mb-3" style="margin-left:41%;">Read More</a>
      </section>

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
    <?php get_sidebar(); ?>
  </div>
</div>
</div>
<?php get_footer(); ?>