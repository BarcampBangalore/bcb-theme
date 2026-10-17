<?php
/**
 * Team page. Members, groups and copy come from data/event.json (team.*);
 * ported from planning.barcampbangalore.com/meet-the-team.
 */
get_header('bcb');
the_post();

$bcb_groups = bcb_cfg_list('team.groups');
$bcb_first  = bcb_cfg_list('team.first_planners');
$bcb_blog   = bcb_cfg_list('team.planners_blog');
?>

<section class="bcb-pagehead">
    <div class="bcb-section-label bcb-section-label--green"><?php echo bcb_text(bcb_cfg('team.label', 'The team')); ?></div>
    <h1 class="bcb-section-heading"><?php echo bcb_text(bcb_cfg('team.heading', get_the_title())); ?></h1>
    <p class="bcb-section-body">
        <?php echo bcb_text(bcb_cfg('team.intro')); ?>
        <?php if (!empty($bcb_blog['url'])) : ?>
        See the behind-the-scenes action on the <a href="<?php echo esc_url($bcb_blog['url']); ?>"><?php echo bcb_text($bcb_blog['label']); ?></a>.
        <?php endif; ?>
    </p>
</section>

<section class="bcb-listing">
    <div class="bcb-listing__inner">

        <?php foreach ($bcb_groups as $group) : ?>
        <h2 class="bcb-team__group"><?php echo bcb_text($group['heading']); ?></h2>
        <div class="bcb-team">
            <?php foreach (($group['members'] ?? array()) as $i => $member) : ?>
            <article class="bcb-member bcb-member--<?php echo $i % 2 ? 'green' : 'orange'; ?>">
                <?php if (!empty($member['photo'])) : ?>
                <img class="bcb-member__photo" src="<?php echo esc_url(bcb_asset($member['photo'])); ?>" alt="<?php echo esc_attr($member['name']); ?>" loading="lazy" width="96" height="96">
                <?php endif; ?>
                <div class="bcb-member__body">
                    <h3 class="bcb-member__name"><?php echo bcb_text($member['name']); ?></h3>
                    <?php if (!empty($member['links'])) : ?>
                    <ul class="bcb-member__links">
                        <?php foreach ($member['links'] as $link) : ?>
                        <li><a href="<?php echo esc_url($link['url']); ?>" target="_blank" rel="noopener"><?php echo bcb_text($link['label']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <?php foreach (($member['bio'] ?? array()) as $para) : ?>
                    <p class="bcb-member__bio"><?php echo bcb_text($para); ?></p>
                    <?php endforeach; ?>
                    <?php if (!empty($member['quote'])) : ?>
                    <blockquote class="bcb-member__quote"><?php echo bcb_text($member['quote']); ?></blockquote>
                    <?php endif; ?>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>

        <?php if (!empty($bcb_first['photo']['src'])) : ?>
        <figure class="bcb-team__first">
            <h2 class="bcb-team__group"><?php echo bcb_text($bcb_first['heading']); ?></h2>
            <img src="<?php echo esc_url(bcb_asset($bcb_first['photo']['src'])); ?>" alt="<?php echo esc_attr($bcb_first['photo']['alt']); ?>" loading="lazy">
            <?php if (!empty($bcb_first['credit_url'])) : ?>
            <figcaption><a href="<?php echo esc_url($bcb_first['credit_url']); ?>" target="_blank" rel="noopener"><?php echo bcb_text($bcb_first['credit_label']); ?></a></figcaption>
            <?php endif; ?>
        </figure>
        <?php endif; ?>

        <p class="bcb-team__footer"><?php echo bcb_prose(bcb_cfg('team.footer')); ?></p>
    </div>
</section>

<?php get_footer('bcb'); ?>
