<?php
/**
 * FAQ page. The questions and answers are the page content in WP admin, written as
 * [expand title="Question"]Answer[/expand]; they are rendered by bcb_expand_shortcode().
 * Label text comes from data/event.json (faq.label). Tokens like {date}, {venue}, {rsvp_url}
 * and {home} in the content are filled in from data/event.json (see bcb_tpl()).
 */
get_header('bcb');
the_post();

// Take over [expand] on this page only, whether or not the collapse-o-matic plugin is active.
remove_shortcode('expand');
add_shortcode('expand', 'bcb_expand_shortcode');
?>

<section class="bcb-pagehead">
    <div class="bcb-section-label bcb-section-label--green"><?php echo bcb_text(bcb_cfg('faq.label', 'FAQ')); ?></div>
    <h1 class="bcb-section-heading"><?php echo get_the_title(); ?></h1>
</section>

<section class="bcb-listing">
    <div class="bcb-listing__inner">
        <div class="bcb-faq">
            <?php echo apply_filters('the_content', bcb_tpl(get_the_content())); ?>
        </div>
    </div>
</section>

<?php get_footer('bcb'); ?>
