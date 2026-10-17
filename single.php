<?php
/**
 * Single session page. Layout and styles come from the shared revamp chrome
 * (css/bcb-revamp.css); share text comes from data/event.json (share.*).
 */
get_header('bcb');
the_post();

$bcb_user       = wp_get_current_user();
$bcb_attending  = attending_users(get_the_ID());
$bcb_is_going   = $bcb_user->ID && in_array($bcb_user->user_login, $bcb_attending, true);
$bcb_author_id  = get_the_author_meta('ID');
$bcb_author_url = get_author_posts_url($bcb_author_id);
$bcb_cats       = array();
foreach (get_the_category() as $c) {
    $bcb_cats[] = $c->name;
}

// Share links
$bcb_url      = get_permalink();
$bcb_message  = bcb_tpl(bcb_cfg('share.message'), array('{title}' => get_the_title(), '{url}' => $bcb_url));
$bcb_hashtag  = bcb_cfg('event.hashtag');
$bcb_handle   = bcb_cfg('share.handle');
$bcb_tweet    = trim($bcb_message . ' ' . $bcb_hashtag . ($bcb_handle ? ' @' . $bcb_handle : ''));
$bcb_shares   = array(
    'Facebook' => 'https://facebook.com/sharer/sharer.php?u=' . urlencode($bcb_url),
    'X'        => 'https://twitter.com/intent/tweet/?text=' . rawurlencode($bcb_tweet),
    'LinkedIn' => 'https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode($bcb_url) . '&title=' . rawurlencode(get_the_title()) . '&summary=' . rawurlencode($bcb_message) . '&source=' . urlencode($bcb_url),
    'Reddit'   => 'https://reddit.com/submit/?url=' . urlencode($bcb_url),
    'WhatsApp' => 'https://wa.me/?text=' . rawurlencode($bcb_message),
    'Telegram' => 'https://telegram.me/share/url?text=' . rawurlencode($bcb_message) . '&url=' . urlencode($bcb_url),
);
?>

<section class="bcb-session-hero">
    <div class="bcb-session-hero__inner">
        <a class="bcb-back" href="<?php echo esc_url(home_url('/sessions')); ?>" onclick="if (history.length > 1) { history.back(); return false; }">← Back</a>

        <?php if (!empty($bcb_cats)) : ?>
        <div class="bcb-section-label bcb-section-label--orange"><?php echo esc_html(implode(' · ', $bcb_cats)); ?></div>
        <?php endif; ?>

        <h1 class="bcb-session-hero__title"><?php the_title(); ?></h1>

        <div class="bcb-session-hero__by">
            <a href="<?php echo esc_url($bcb_author_url); ?>"><?php echo get_avatar($bcb_author_id, 56); ?></a>
            <div>
                <div class="bcb-session-hero__presenter">Presented by <a href="<?php echo esc_url($bcb_author_url); ?>"><?php echo esc_html(get_the_author_meta('display_name')); ?></a></div>
                <div class="bcb-session-hero__time"><?php echo esc_html(human_time_diff(get_post_time('U', true))); ?> ago</div>
            </div>
        </div>

        <div class="bcb-attend">
            <button type="button" class="bcb-btn-dark bcb-btn-dark--sm bcb-attend__btn<?php echo $bcb_is_going ? ' is-on' : ''; ?>"><?php echo $bcb_is_going ? '👍 Interesting!' : '👋 I am interested!'; ?></button>
            <div class="bcb-avatars">
                <?php foreach (array_slice($bcb_attending, 0, 10) as $login) :
                    $bcb_att_user = get_user_by('login', $login);
                    echo get_avatar($bcb_att_user ? $bcb_att_user->ID : $login, 28);
                endforeach; ?>
                <?php if (count($bcb_attending) > 10) : ?>
                    <span class="bcb-avatars__more">+<?php echo (int) (count($bcb_attending) - 10); ?></span>
                <?php endif; ?>
            </div>
            <span class="bcb-attend__count"><?php echo (int) count($bcb_attending); ?> interested</span>
        </div>
    </div>
</section>

<section class="bcb-listing">
    <div class="bcb-article">

        <div class="bcb-prose bcb-prose--page">
            <?php the_content(); ?>
            <?php edit_post_link('Edit session'); ?>
        </div>

        <div class="bcb-box-grid">
            <div class="bcb-box bcb-box--orange">
                <div class="bcb-box__title"><?php echo (int) count($bcb_attending); ?> interested</div>
                <div class="bcb-box__body bcb-box__body--scroll" id="bcb-attendees"><?php echo get_attending_users_links(get_the_ID(), '', ' · '); ?></div>
            </div>
            <div class="bcb-box bcb-box--green">
                <div class="bcb-box__title">Tags</div>
                <div class="bcb-box__body">
                    <?php $bcb_tags = get_the_tags(); ?>
                    <?php if ($bcb_tags) : foreach ($bcb_tags as $tag) : ?>
                        <a class="bcb-tag-link" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a>
                    <?php endforeach; else : ?>
                        <span class="bcb-muted">No tags</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="bcb-share">
            <span class="bcb-share__label"><?php echo bcb_text(bcb_cfg('share.label', 'Share this session')); ?></span>
            <?php foreach ($bcb_shares as $label => $href) : ?>
                <a class="bcb-chip bcb-chip--link" href="<?php echo esc_url($href); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($label); ?></a>
            <?php endforeach; ?>
        </div>

        <div class="bcb-prose bcb-prose--page bcb-comments">
            <?php comments_template(); ?>
        </div>

    </div>
</section>

<script>
jQuery(function ($) {
    $('.bcb-attend__btn').on('click', function () {
        var btn = $(this), original = btn.html();
        btn.prop('disabled', true).text('…');
        $.post("<?php echo esc_url_raw(admin_url('admin-ajax.php?' . http_build_query(array('action' => 'toggle_attend')))); ?>", {
            post_id: <?php echo (int) get_the_ID(); ?>
        }, function (data) {
            if (data.status !== 'OK') {
                if (confirm(data.status)) {
                    window.location.href = "<?php echo esc_url_raw(wp_login_url(get_permalink())); ?>";
                }
                btn.prop('disabled', false).html(original);
            } else {
                window.location.reload();
            }
        }, 'json').fail(function () {
            btn.prop('disabled', false).html(original);
        });
    });
});
</script>

<?php get_footer('bcb'); ?>
