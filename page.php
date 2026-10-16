<?php
/**
 * Generic content page (About, How to register, Add a session, ...).
 * The page content comes from WP admin; layout is the shared revamp chrome.
 */
get_header('bcb');
the_post();
?>

<section class="bcb-pagehead">
    <h1 class="bcb-section-heading"><?php echo get_the_title(); ?></h1>
</section>

<section class="bcb-listing">
    <div class="bcb-listing__inner">
        <div class="bcb-prose bcb-prose--page">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer('bcb'); ?>
