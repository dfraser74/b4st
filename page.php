<?php get_header(); ?>

<main class="container-responsive mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('loops/page-content'); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container-responsive -->

<?php get_footer(); ?>
