<?php
/**
 * How to register. Content is the page content in WP admin; its step lists are shown
 * as a vertical progress stepper (see bcb_mark_steps() and the .bcb-steps styles).
 * Tokens like {date}, {rsvp_url} and {home} are filled in from data/event.json (see bcb_tpl()).
 * Lists under headings listed in data/event.json (how_to_register.non_step_headings), e.g. FAQ, stay plain.
 */
get_header('bcb');
the_post();

$bcb_content = apply_filters('the_content', bcb_tpl(get_the_content()));
$bcb_content = bcb_mark_steps($bcb_content, bcb_cfg_list('how_to_register.non_step_headings'));
?>

<section class="bcb-pagehead">
    <h1 class="bcb-section-heading"><?php echo get_the_title(); ?></h1>
</section>

<section class="bcb-listing">
    <div class="bcb-listing__inner">
        <div class="bcb-prose bcb-prose--page">
            <?php echo $bcb_content; ?>
        </div>
    </div>
</section>

<script>
(function () {
    var lists = document.querySelectorAll('.bcb-steps');
    if (!lists.length) { return; }

    function update() {
        var line = window.innerHeight * 0.6;
        var atBottom = window.innerHeight + window.pageYOffset >= document.documentElement.scrollHeight - 2;

        Array.prototype.forEach.call(lists, function (list) {
            var items = list.children;
            var last = -1, i;

            for (i = 0; i < items.length; i++) {
                var reached = atBottom || items[i].getBoundingClientRect().top < line;
                items[i].classList.toggle('is-reached', reached);
                if (reached) { last = i; }
            }
            for (i = 0; i < items.length; i++) {
                items[i].classList.toggle('is-current', i === last && !atBottom);
                // connector to the next step fills once that step is reached
                items[i].classList.toggle('is-linked', i < items.length - 1 && i + 1 <= last);
            }
        });
    }

    var queued = false;
    function onScroll() {
        if (queued) { return; }
        queued = true;
        window.requestAnimationFrame(function () { queued = false; update(); });
    }

    Array.prototype.forEach.call(lists, function (list) { list.classList.add('bcb-steps--live'); });
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll);
    update();
})();
</script>

<?php get_footer('bcb'); ?>
