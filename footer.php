<footer class="blog-footer">
        <p>Copyright &copy Made By Eli Sigal. All rights reserved. <?php echo Date('Y') ?> <?php bloginfo('Name'); ?></p>
        <p>
          <a href="#">Back to top</a>
        </p>
        <p>
          <a href="<?php echo get_theme_mod('btn_url', 'https://github.com/Hvuj/wordpress-custom-theme.git'); ?>" class="btn github btn-lg"><?php echo get_theme_mod('btn_text', 'github link'); ?></a>
        </p>
      </footer>
  <?php wp_footer(); ?>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
</html>