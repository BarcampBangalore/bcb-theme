<?php
/**
 * About page. The text is the page content in WP admin; the logo hero, facts, photo
 * collage and closing call to action come from data/event.json (about.*).
 */
get_header('bcb');
the_post();

$bcb_photos   = bcb_cfg_list('about.photos');
$bcb_facts    = bcb_cfg_list('about.facts');
$bcb_cta      = bcb_cfg('about.cta', array());
$bcb_rotate   = array(-3, 2, -2, 3, -1.5);
$bcb_rsvp_on  = (bool) bcb_cfg('rsvp.enabled', true);
?>

<section class="bcb-about-hero">
    <div class="bcb-about-hero__inner">
        <div class="bcb-about-hero__text">
            <div class="bcb-section-label bcb-section-label--orange"><?php echo bcb_text(bcb_cfg('about.label', 'About')); ?></div>
            <h1 class="bcb-about-hero__title"><?php echo get_the_title(); ?></h1>
            <?php if (bcb_cfg('about.lead')) : ?>
            <p class="bcb-about-hero__lead"><?php echo bcb_rich(bcb_tpl(bcb_cfg('about.lead'))); ?></p>
            <?php endif; ?>
        </div>
        <div class="bcb-about-hero__logo">
            <img src="<?php echo esc_url(bcb_asset(bcb_cfg('images.logo', 'images/logo-bcb-no-year.png'))); ?>" alt="<?php echo esc_attr(bcb_cfg('event.name', 'BarCamp Bangalore')); ?>">
            <?php if (bcb_cfg('about.sticker')) : ?>
            <span class="bcb-about-sticker"><?php echo bcb_text(bcb_cfg('about.sticker')); ?></span>
            <?php endif; ?>
        </div>
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

<?php if ($bcb_photos) : ?>
<section class="bcb-about-photos">
    <?php foreach ($bcb_photos as $i => $photo) : ?>
    <figure class="bcb-polaroid<?php echo $i === 0 ? ' bcb-polaroid--lead' : ''; ?>" style="--r: <?php echo $bcb_rotate[$i % count($bcb_rotate)]; ?>deg">
        <img src="<?php echo esc_url(bcb_asset($photo['src'])); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" loading="lazy">
        <?php if (!empty($photo['caption'])) : ?>
        <figcaption>
            <?php echo bcb_text($photo['caption']); ?>
            <?php if (!empty($photo['credit_url'])) : ?>
            <a href="<?php echo esc_url($photo['credit_url']); ?>" target="_blank" rel="noopener"><?php echo bcb_text($photo['credit_label']); ?></a>
            <?php endif; ?>
        </figcaption>
        <?php endif; ?>
    </figure>
    <?php endforeach; ?>
</section>
<?php endif; ?>

<section class="bcb-listing bcb-about-body">
    <div class="bcb-listing__inner">
        <div class="bcb-prose bcb-prose--page">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php if ($bcb_cta) : ?>
<section class="bcb-about-cta">
    <div class="bcb-about-cta__inner">
        <h2 class="bcb-about-cta__heading"><?php echo bcb_rich(bcb_tpl($bcb_cta['heading'])); ?></h2>
        <p class="bcb-about-cta__text"><?php echo bcb_rich(bcb_tpl($bcb_cta['text'])); ?></p>
        <div class="bcb-about-cta__buttons">
            <?php if ($bcb_rsvp_on) : ?>
            <a class="bcb-btn-rsvp" href="<?php echo esc_url(bcb_link(bcb_cfg('rsvp.url', '/rsvp'))); ?>"><?php echo bcb_text(bcb_cfg('rsvp.label', 'RSVP now →')); ?></a>
            <?php endif; ?>
            <?php foreach (($bcb_cta['links'] ?? array()) as $link) : ?>
            <a class="bcb-about-cta__link" href="<?php echo esc_url(bcb_link($link['url'])); ?>"><?php echo bcb_text($link['label']); ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer('bcb'); ?>
