<?php /* Template Name: Splash */ get_header(); ?>

  <span class="beta-label">Private Beta</span>
  <main role="main" class="splash-body">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/splash-logo.svg" alt="H360 Logo">
    <h1><strong>H360</strong>. Empowering communities<br> to power the world.</h1>
    <?php gravity_form(1, false, false, false, '', true); ?>
  </main>

  <footer class="splash-footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> h360. All rights reserved.
    <nav>
      <a href="http://h360.io/privacy">Privacy Policy</a>
      <a href="http://h360.io/terms-of-use">Terms of Use</a>
    </nav>
  </footer>

  <?php wp_footer(); ?>

</body>
</html>
