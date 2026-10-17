<?php
/**
 * Author (camper) page: sessions presented and attended, grouped by edition.
 * Editions come from data/event.json: the current one (event.category_id / edition_label)
 * plus archives.editions, newest first.
 */
get_header('bcb');
global $wpdb;

$bcb_author = get_queried_object();
if (!($bcb_author instanceof WP_User)) {
    $bcb_author = get_userdata(get_query_var('author'));
}

// edition category id => label, newest first
$bcb_editions = array();
if ((int) bcb_cfg('event.category_id', 0) > 0) {
    $bcb_editions[(int) bcb_cfg('event.category_id')] = bcb_cfg('event.edition_label', bcb_cfg('event.name'));
}
foreach (bcb_cfg_list('archives.editions') as $edition) {
    $bcb_editions[(int) $edition['category_id']] = $edition['label'];
}
krsort($bcb_editions);

$bcb_presented = array(); // edition id => WP_Post[]
$bcb_attended  = array();
$bcb_n_presented = 0;
$bcb_n_attended  = 0;

if ($bcb_author) {
    // Sessions presented (all of them, not just the first page of the author archive)
    $presented = get_posts(array(
        'author'           => $bcb_author->ID,
        'posts_per_page'   => -1,
        'post_status'      => 'publish',
        'suppress_filters' => false,
    ));
    foreach ($presented as $p) {
        $placed = false;
        foreach (get_the_category($p->ID) as $c) {
            if (isset($bcb_editions[(int) $c->cat_ID])) {
                $bcb_presented[(int) $c->cat_ID][] = $p;
                $placed = true;
            }
        }
        $bcb_n_presented += $placed ? 1 : 0;
    }

    // Sessions attended (marked "interested")
    $ids = $wpdb->get_col($wpdb->prepare(
        "SELECT post_id FROM {$wpdb->postmeta} WHERE meta_key = 'user_attending' AND meta_value = %s ORDER BY meta_id DESC",
        $bcb_author->user_login
    ));
    $ids = array_values(array_unique(array_map('intval', $ids)));
    $attended = $ids ? get_posts(array(
        'post__in'       => $ids,
        'orderby'        => 'post__in',
        'posts_per_page' => -1,
        'post_type'      => 'any',
        'post_status'    => 'publish',
    )) : array();
    foreach ($attended as $p) {
        $placed = false;
        foreach (get_the_category($p->ID) as $c) {
            if (isset($bcb_editions[(int) $c->cat_ID])) {
                $bcb_attended[(int) $c->cat_ID][] = $p;
                $placed = true;
            }
        }
        $bcb_n_attended += $placed ? 1 : 0;
    }
}

$bcb_name = $bcb_author ? ($bcb_author->display_name ? $bcb_author->display_name : $bcb_author->user_nicename) : '';
?>

<section class="bcb-session-hero">
    <div class="bcb-session-hero__inner">
        <a class="bcb-back" href="<?php echo esc_url(home_url('/sessions')); ?>" onclick="if (history.length > 1) { history.back(); return false; }">← Back</a>

        <div class="bcb-section-label bcb-section-label--orange">Camper</div>
        <h1 class="bcb-session-hero__title"><?php echo esc_html($bcb_name); ?></h1>

        <?php if ($bcb_author) : ?>
        <div class="bcb-session-hero__by">
            <?php echo get_avatar($bcb_author->ID, 56); ?>
            <div>
                <div class="bcb-session-hero__presenter">Camper since <?php echo esc_html(date_i18n('F Y', strtotime($bcb_author->user_registered))); ?></div>
                <div class="bcb-session-hero__time">
                    <?php echo (int) $bcb_n_presented; ?> presented · <?php echo (int) $bcb_n_attended; ?> attended
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<section class="bcb-listing">
    <div class="bcb-article">
        <?php
        $bcb_shown = 0;
        foreach ($bcb_editions as $edition_id => $edition_label) :
            $p_list = isset($bcb_presented[$edition_id]) ? $bcb_presented[$edition_id] : array();
            $a_list = isset($bcb_attended[$edition_id]) ? $bcb_attended[$edition_id] : array();
            if (!$p_list && !$a_list) {
                continue;
            }
        ?>
        <div class="bcb-box bcb-box--<?php echo $bcb_shown++ % 2 ? 'green' : 'orange'; ?> bcb-edition-card">
            <h2 class="bcb-edition-card__title"><?php echo esc_html($edition_label); ?></h2>
            <div class="bcb-edition-card__cols">
                <?php if ($p_list) : ?>
                <div>
                    <div class="bcb-box__title">Sessions proposed / presented</div>
                    <ul class="bcb-session-list">
                        <?php foreach ($p_list as $p) : ?>
                        <li><a href="<?php echo esc_url(get_permalink($p->ID)); ?>"><?php echo esc_html(get_the_title($p->ID)); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if ($a_list) : ?>
                <div>
                    <div class="bcb-box__title">Sessions attended</div>
                    <ul class="bcb-session-list">
                        <?php foreach ($a_list as $p) : ?>
                        <li><a href="<?php echo esc_url(get_permalink($p->ID)); ?>"><?php echo esc_html(get_the_title($p->ID)); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>

        <?php if ($bcb_shown === 0) : ?>
        <div class="bcb-empty">No sessions yet.</div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer('bcb'); ?>
