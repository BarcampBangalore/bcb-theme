<?php
/**
 * Techlash page. Copy and category id come from data/event.json (techlash.*).
 */
get_header('bcb');
?>

<section class="bcb-pagehead">
    <div class="bcb-section-label bcb-section-label--orange"><?php echo bcb_text(bcb_cfg('techlash.label')); ?></div>
    <h1 class="bcb-section-heading"><?php echo bcb_rich(bcb_tpl(bcb_cfg('techlash.heading'))); ?></h1>
</section>

<section class="bcb-listing">
    <div class="bcb-listing__inner">

        <div class="bcb-prose">
            <?php foreach (bcb_cfg_list('techlash.intro') as $paragraph) : ?>
            <p><?php echo bcb_prose(bcb_tpl($paragraph)); ?></p>
            <?php endforeach; ?>
        </div>

        <h2 class="bcb-section-heading bcb-listing__heading"><?php echo bcb_rich(bcb_tpl(bcb_cfg('techlash.list_heading'))); ?></h2>

        <div class="bcb-session-grid">
            <?php
            $techlash_loop = new WP_Query(array('cat' => (int) bcb_cfg('techlash.category_id', 0), 'nopaging' => true));
            $bcb_i = 0;

            if ((int) bcb_cfg('techlash.category_id', 0) > 0 && $techlash_loop->have_posts()) {
                while ($techlash_loop->have_posts()) {
                    $techlash_loop->the_post();
                    bcb_render_session_card(null, $bcb_i++);
                }
                wp_reset_postdata();
            } else {
            ?>
            <div class="bcb-empty">
                <?php echo bcb_text(bcb_cfg('techlash.empty_text')); ?>
                <a href="<?php echo esc_url(bcb_link(bcb_cfg('techlash.submit_url', '/add-a-session'))); ?>"><?php echo bcb_text(bcb_cfg('techlash.submit_label')); ?></a>
            </div>
            <?php } ?>
        </div>

    </div>
</section>

<?php get_footer('bcb'); ?>
