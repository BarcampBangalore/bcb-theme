<?php
/**
 * Techlash page. Hero, facts, steps, copy, category id and closing call to action
 * all come from data/event.json (techlash.*). Hero, facts and CTA reuse the About page styles.
 */
get_header('bcb');

$bcb_photos  = bcb_cfg_list('techlash.photos');
$bcb_facts   = bcb_cfg_list('techlash.facts');
$bcb_steps   = bcb_cfg_list('techlash.steps');
$bcb_cta     = bcb_cfg('techlash.cta', array());
$bcb_submit  = esc_url(bcb_link(bcb_cfg('techlash.submit_url', '/add-a-session')));
$bcb_rotate  = array(-3, 4);
$bcb_cat_id  = (int) bcb_cfg('techlash.category_id', 0);
?>

<section class="bcb-about-hero bcb-tl-hero">
    <div class="bcb-about-hero__inner">
        <div class="bcb-about-hero__text">
            <div class="bcb-section-label bcb-section-label--orange"><?php echo bcb_text(bcb_cfg('techlash.label')); ?></div>
            <h1 class="bcb-about-hero__title"><?php echo bcb_rich(bcb_tpl(bcb_cfg('techlash.title'))); ?></h1>
            <?php if (bcb_cfg('techlash.lead')) : ?>
            <p class="bcb-about-hero__lead"><?php echo bcb_rich(bcb_tpl(bcb_cfg('techlash.lead'))); ?></p>
            <?php endif; ?>
            <div class="bcb-tl-hero__actions">
                <a class="bcb-btn-rsvp bcb-btn-rsvp--green" href="<?php echo $bcb_submit; ?>"><?php echo bcb_text(bcb_cfg('techlash.submit_label')); ?></a>
            </div>
        </div>
        <?php if ($bcb_photos) : ?>
        <div class="bcb-tl-photos">
            <?php foreach ($bcb_photos as $i => $photo) : ?>
            <figure class="bcb-polaroid bcb-tl-photo bcb-tl-photo--<?php echo $i === 0 ? 'lead' : 'second'; ?>" style="--r: <?php echo $bcb_rotate[$i % count($bcb_rotate)]; ?>deg">
                <img src="<?php echo esc_url(bcb_asset($photo['src'])); ?>" alt="<?php echo esc_attr($photo['alt']); ?>"<?php echo $i === 0 ? '' : ' loading="lazy"'; ?>>
                <?php if (!empty($photo['caption'])) : ?>
                <figcaption><?php echo bcb_text($photo['caption']); ?></figcaption>
                <?php endif; ?>
            </figure>
            <?php endforeach; ?>
            <?php if (bcb_cfg('techlash.sticker')) : ?>
            <span class="bcb-about-sticker bcb-tl-sticker"><?php echo bcb_text(bcb_cfg('techlash.sticker')); ?></span>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php if ($bcb_facts) : ?>
<section class="bcb-about-facts">
    <?php foreach ($bcb_facts as $i => $fact) : ?>
    <div class="bcb-about-fact bcb-about-fact--<?php echo $i % 2 ? 'green' : 'orange'; ?>">
        <div class="bcb-about-fact__value"><?php echo bcb_text($fact['value']); ?></div>
        <div class="bcb-about-fact__label"><?php echo bcb_text($fact['label']); ?></div>
    </div>
    <?php endforeach; ?>
</section>
<?php endif; ?>

<section class="bcb-listing bcb-tl-body">
    <div class="bcb-listing__inner">

        <div class="bcb-prose bcb-prose--page">
            <?php foreach (bcb_cfg_list('techlash.intro') as $paragraph) : ?>
            <p><?php echo bcb_prose(bcb_tpl($paragraph)); ?></p>
            <?php endforeach; ?>
        </div>

        <?php if ($bcb_steps) : ?>
        <h2 class="bcb-section-heading bcb-listing__heading"><?php echo bcb_rich(bcb_tpl(bcb_cfg('techlash.steps_heading'))); ?></h2>
        <ol class="bcb-tl-steps">
            <?php foreach ($bcb_steps as $i => $step) : ?>
            <li class="bcb-tl-step bcb-tl-step--<?php echo $i % 2 ? 'green' : 'orange'; ?>">
                <span class="bcb-tl-step__num"><?php echo (int) $i + 1; ?></span>
                <h3 class="bcb-tl-step__title"><?php echo bcb_text($step['title']); ?></h3>
                <p class="bcb-tl-step__text"><?php echo bcb_prose(bcb_tpl($step['text'])); ?></p>
            </li>
            <?php endforeach; ?>
        </ol>
        <?php endif; ?>

        <h2 class="bcb-section-heading bcb-listing__heading"><?php echo bcb_rich(bcb_tpl(bcb_cfg('techlash.list_heading'))); ?></h2>

        <div class="bcb-session-grid">
            <?php
            $techlash_loop = new WP_Query(array('cat' => $bcb_cat_id, 'nopaging' => true));
            $bcb_i = 0;

            if ($bcb_cat_id > 0 && $techlash_loop->have_posts()) {
                while ($techlash_loop->have_posts()) {
                    $techlash_loop->the_post();
                    bcb_render_session_card(null, $bcb_i++);
                }
                wp_reset_postdata();
            } else {
            ?>
            <div class="bcb-empty">
                <?php echo bcb_text(bcb_cfg('techlash.empty_text')); ?>
                <a href="<?php echo $bcb_submit; ?>"><?php echo bcb_text(bcb_cfg('techlash.submit_label')); ?></a>
            </div>
            <?php } ?>
        </div>

    </div>
</section>

<?php if ($bcb_cta) : ?>
<section class="bcb-about-cta">
    <div class="bcb-about-cta__inner">
        <h2 class="bcb-about-cta__heading"><?php echo bcb_rich(bcb_tpl($bcb_cta['heading'])); ?></h2>
        <p class="bcb-about-cta__text"><?php echo bcb_rich(bcb_tpl($bcb_cta['text'])); ?></p>
        <div class="bcb-about-cta__buttons">
            <a class="bcb-btn-rsvp" href="<?php echo $bcb_submit; ?>"><?php echo bcb_text($bcb_cta['button_label']); ?></a>
            <?php foreach (($bcb_cta['links'] ?? array()) as $link) : ?>
            <a class="bcb-about-cta__link" href="<?php echo esc_url(bcb_link($link['url'])); ?>"><?php echo bcb_text($link['label']); ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer('bcb'); ?>
