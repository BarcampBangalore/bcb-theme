<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-12 p-5">
        <?php the_post(); ?>
        <div class="display-4 fitted-title text-center pb-3">
            <?php echo get_the_title(); ?>
        </div>
        <div id="page_about_content" class="d-flex flex-column">
            <?php the_content(); ?>
        </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
