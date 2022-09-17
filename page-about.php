<?php get_header(); ?>



<div class="container">
  <div class="row">
    <div class="col-12">
        <?php the_post(); ?>
        <div id="page_about_title" class="d-flex fitted-title">
            <?php echo get_the_title(); ?>
        </div>

        <div id="page_about_content" class="d-flex flex-column">
            <?php echo get_the_content(); ?>
        </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>

