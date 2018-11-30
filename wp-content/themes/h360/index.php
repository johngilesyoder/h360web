<?php get_header(); ?>

  <div class="container-fluid">
    <h1 class="page-title">Blog</h1>
    <div class="row">
      <div class="col-md-8">
        <main role="main">

    			<?php get_template_part('loop'); ?>

    			<?php get_template_part('pagination'); ?>

      	</main>
      </div>
      <div class="col-md-4">

        <?php get_sidebar(); ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
