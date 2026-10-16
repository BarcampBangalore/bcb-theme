<?php
/**
 * Sessions page. Tracks, category ids and hidden posts come from
 * data/event.json (sessions.*); see get_current_cats() in functions.php.
 */
get_header('bcb');

$bcb_tracks     = bcb_cfg_list('sessions.tracks');
$bcb_track_cats = get_current_cats(false);
$bcb_hidden_ids = array_merge(get_chosen_track_ids(), get_archived_track_ids());
?>

<section class="bcb-pagehead">
    <div class="bcb-section-label bcb-section-label--green"><?php echo bcb_text(bcb_cfg('sessions.label')); ?></div>
    <h1 class="bcb-section-heading"><?php echo bcb_rich(bcb_tpl(bcb_cfg('sessions.heading'))); ?></h1>
    <p class="bcb-section-body"><?php echo bcb_rich(bcb_tpl(bcb_cfg('sessions.body'))); ?></p>
</section>

<section class="bcb-listing">
    <div class="bcb-listing__inner">

        <div class="bcb-chips" id="bcb-track-chips">
            <button type="button" class="bcb-chip is-active" data-track-id="" aria-pressed="true"><?php echo bcb_text(bcb_cfg('sessions.all_label', 'All tracks')); ?></button>
            <?php foreach ($bcb_tracks as $i => $track) : ?>
            <button type="button" class="bcb-chip" data-track-id="<?php echo (int) $i; ?>" aria-pressed="false">
                <img src="<?php echo esc_url(bcb_asset($track['icon'])); ?>" alt="">
                <?php echo bcb_text($track['name']); ?>
            </button>
            <?php endforeach; ?>
        </div>

        <div class="bcb-session-grid" id="bcb-session-grid">
            <?php
            $bcb_shown = 0;

            if (!empty($bcb_track_cats)) {
                $sessionsloop = new WP_Query(array('cat' => get_current_cats(true), 'nopaging' => true));

                while ($sessionsloop->have_posts()) {
                    $sessionsloop->the_post();

                    // Do not show chosen or archived posts
                    if (in_array(get_the_ID(), $bcb_hidden_ids, true)) {
                        continue;
                    }

                    // Track = first of this post's categories that is a configured track
                    $track_index = null;
                    foreach (get_the_category() as $c) {
                        $found = array_search((int) $c->cat_ID, $bcb_track_cats, true);
                        if ($found !== false) {
                            $track_index = $found;
                            break;
                        }
                    }

                    bcb_render_session_card($track_index, $bcb_shown);
                    $bcb_shown++;
                }
                wp_reset_postdata();
            }
            ?>
            <div class="bcb-empty" id="bcb-session-empty"<?php echo $bcb_shown > 0 ? ' hidden' : ''; ?>><?php echo bcb_text(bcb_cfg('sessions.empty_text')); ?></div>
        </div>

    </div>
</section>

<script>
(function () {
    var chips = document.querySelectorAll('#bcb-track-chips .bcb-chip');
    var wrap = document.getElementById('bcb-track-chips');
    var cards = document.querySelectorAll('#bcb-session-grid .bcb-session-card');
    var empty = document.getElementById('bcb-session-empty');
    var active = '';

    function apply() {
        var shown = 0;
        Array.prototype.forEach.call(cards, function (card) {
            var show = active === '' || card.getAttribute('data-track-id') === active;
            card.classList.toggle('is-hidden', !show);
            if (show) { shown++; }
        });
        Array.prototype.forEach.call(chips, function (chip) {
            var on = chip.getAttribute('data-track-id') === active;
            chip.classList.toggle('is-active', on);
            chip.setAttribute('aria-pressed', on ? 'true' : 'false');
        });
        wrap.classList.toggle('has-active', active !== '');
        empty.hidden = shown > 0;
    }

    Array.prototype.forEach.call(chips, function (chip) {
        chip.addEventListener('click', function () {
            var id = chip.getAttribute('data-track-id');
            // clicking the active chip again goes back to "all"
            active = (id === active) ? '' : id;
            apply();
        });
    });
})();
</script>

<?php get_footer('bcb'); ?>
