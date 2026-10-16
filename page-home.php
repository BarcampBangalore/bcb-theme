<?php

/**
 * Template Name: Home
 *
 * Content comes from data/event.json (see bcb_cfg() and friends in functions.php).
 * Purely decorative values (rotations, tint colors) are cycled here by index.
 */
get_header('bcb');

$bcb_color = function ($color) {
  return $color === 'green' ? 'green' : 'orange';
};
$bcb_rsvp_on    = (bool) bcb_cfg('rsvp.enabled', true);
$bcb_rsvp_url   = bcb_link(bcb_cfg('rsvp.url', '/rsvp'));
$bcb_rsvp_label = bcb_cfg('rsvp.label', 'RSVP now →');
?>

<!-- HERO -->
<section class="bcb-hero">
  <div class="bcb-hero__inner">
    <div class="bcb-hero__badge"><?php echo bcb_text(bcb_cfg('event.hashtag')); ?></div>
    <div class="bcb-hero__circle"><?php echo implode('<br>', array_map('bcb_text', bcb_cfg_list('hero.circle'))); ?></div>

    <div class="bcb-hero__content">
      <h1 class="bcb-hero__heading"><?php echo bcb_rich(bcb_cfg('hero.heading')); ?></h1>
      <p class="bcb-hero__sub"><?php echo bcb_rich(bcb_cfg('hero.sub')); ?></p>
      <div class="bcb-hero__cta">
        <?php if ($bcb_rsvp_on) : ?>
          <a class="bcb-btn-dark" href="<?php echo esc_url($bcb_rsvp_url); ?>"><?php echo bcb_text($bcb_rsvp_label); ?></a>
        <?php endif; ?>
        <span class="bcb-hero__meta"><?php echo bcb_text(bcb_event_date('D, M j') . ' · ' . bcb_cfg('event.location_short')); ?></span>
      </div>
    </div>

    <div class="bcb-hero__photo">
      <img src="<?php echo esc_url(bcb_asset(bcb_cfg('images.hero.src'))); ?>" alt="<?php echo esc_attr(bcb_cfg('images.hero.alt')); ?>">
    </div>

  </div><!-- /.bcb-hero__inner -->
</section>

<!-- WHAT IS AN UNCONFERENCE -->
<section class="bcb-what">
  <div>
    <div class="bcb-what__label"><?php echo bcb_text(bcb_cfg('what.label')); ?></div>
    <h2 class="bcb-what__heading"><?php echo bcb_rich(bcb_cfg('what.heading')); ?></h2>
    <p class="bcb-what__body"><?php echo bcb_rich(bcb_cfg('what.body')); ?></p>
  </div>
  <?php if (bcb_cfg('what.photo.src')) : ?>
    <div style="height:280px; border-radius:8px; overflow:hidden; border:2px solid oklch(35% 0.03 40);">
      <img src="<?php echo esc_url(bcb_asset(bcb_cfg('what.photo.src'))); ?>" alt="<?php echo esc_attr(bcb_cfg('what.photo.alt')); ?>" style="width:100%; height:100%; object-fit:cover; display:block;">
    </div>
  <?php else : ?>
    <div class="ph" style="height:280px; color:oklch(52% 0.12 150); background-color:oklch(25% 0.03 40); border-radius:8px; font-size:13px; font-weight:600; border:2px solid oklch(35% 0.03 40);">
      <span><?php echo bcb_rich(bcb_cfg('what.photo_caption')); ?></span>
    </div>
  <?php endif; ?>
</section>

<!-- WHO SHOWS UP -->
<section class="bcb-who">
  <div class="bcb-section-label bcb-section-label--green"><?php echo bcb_text(bcb_cfg('who.label')); ?></div>
  <h2 class="bcb-section-heading"><?php echo bcb_rich(bcb_cfg('who.heading')); ?></h2>
  <p class="bcb-section-body"><?php echo bcb_rich(bcb_cfg('who.body')); ?></p>
  <div class="bcb-tags">
    <?php
    $tag_rotations = array(-2, 2, 1, -3, 2, -1);
    foreach (bcb_cfg_list('who.tags') as $i => $tag) :
    ?>
      <span class="bcb-tag<?php echo $i % 2 ? ' bcb-tag--green' : ''; ?>" style="transform:rotate(<?php echo $tag_rotations[$i % count($tag_rotations)]; ?>deg)"><?php echo bcb_text($tag); ?></span>
    <?php endforeach; ?>
  </div>
</section>

<!-- MOMENTS MARQUEE -->
<section class="bcb-moments">
  <div class="bcb-moments__header">
    <div class="bcb-moments__label"><?php echo bcb_text(bcb_cfg('moments.label')); ?></div>
    <h2 class="bcb-moments__heading"><?php echo bcb_rich(bcb_cfg('moments.heading')); ?></h2>
  </div>
  <div class="bcb-marquee">
    <?php
    $moment_rotations = array(-4, 3, 2, -3, 4, -2);
    $moment_offsets   = array(0, 18, 0, 12, 0, 20);
    $moment_colors    = array(
      'color:oklch(70% 0.14 45); background-color:oklch(88% 0.04 60);',
      'color:oklch(60% 0.13 150); background-color:oklch(85% 0.06 150);',
    );
    $moments = bcb_cfg_list('images.moments');
    // The list is rendered twice so the CSS marquee can loop seamlessly.
    foreach (array_merge($moments, $moments) as $i => $moment) :
      $i = $i % max(count($moments), 1);
      $rotate = $moment_rotations[$i % count($moment_rotations)];
      $offset = $moment_offsets[$i % count($moment_offsets)];
    ?>
      <div class="bcb-card ph" style="transform:rotate(<?php echo $rotate; ?>deg)<?php echo $offset ? ' translateY(' . $offset . 'px)' : ''; ?>; <?php echo $moment_colors[$i % 2]; ?>">
        <img src="<?php echo esc_url(bcb_asset($moment['src'])); ?>" alt="<?php echo esc_attr($moment['alt']); ?>">
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- EVENT FORMAT -->
<section class="bcb-format">
  <div class="bcb-section-label bcb-section-label--orange" style="margin-bottom:16px;"><?php echo bcb_text(bcb_cfg('format.label')); ?></div>
  <div class="bcb-format__grid">
    <?php foreach (bcb_cfg_list('format.cards') as $card) : $color = $bcb_color(isset($card['color']) ? $card['color'] : ''); ?>
      <div class="bcb-format-card bcb-format-card--<?php echo $color; ?>">
        <h3 class="bcb-format-card__title"><?php echo bcb_rich($card['title']); ?></h3>
        <div class="bcb-format-card__meta bcb-format-card__meta--<?php echo $color; ?>"><?php echo bcb_text($card['meta']); ?></div>
        <p><?php echo bcb_rich($card['text']); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- THE BOARD -->
<section class="bcb-board-wrap">
  <div class="bcb-section-label bcb-section-label--green" style="text-align:center; margin-bottom:16px;"><?php echo bcb_text(bcb_cfg('board.label')); ?></div>
  <h2 class="bcb-section-heading" style="text-align:center; margin-bottom:12px;"><?php echo bcb_rich(bcb_cfg('board.heading')); ?></h2>
  <p class="bcb-section-body" style="max-width:560px; margin:0 auto 48px; font-size:16px;"><?php echo bcb_rich(bcb_cfg('board.body')); ?></p>

  <!-- Collapsed view -->
  <div id="board-collapsed">
    <div class="bcb-board-frame">
      <div class="bcb-board-corner bcb-board-corner--tl"></div>
      <div class="bcb-board-corner bcb-board-corner--tr"></div>
      <div class="bcb-board-corner bcb-board-corner--bl"></div>
      <div class="bcb-board-corner bcb-board-corner--br"></div>
      <div class="bcb-board-stickies">
        <div class="bcb-sticky-dot" style="transform:rotate(-6deg)"></div>
        <div class="bcb-sticky-dot" style="transform:rotate(4deg)"></div>
        <div class="bcb-sticky-dot" style="transform:rotate(-3deg)"></div>
      </div>
      <p class="bcb-board-text"><?php echo bcb_text(bcb_cfg('board.collapsed_text')); ?></p>
      <button class="bcb-btn-reveal" onclick="document.getElementById('board-collapsed').style.display='none'; document.getElementById('board-expanded').style.display='block'"><?php echo bcb_text(bcb_cfg('board.reveal_label')); ?></button>
    </div>
  </div>

  <!-- Expanded view -->
  <div id="board-expanded" style="display:none">
    <div class="bcb-board-frame bcb-board-frame--wide">
      <div class="bcb-board-corner bcb-board-corner--tl"></div>
      <div class="bcb-board-corner bcb-board-corner--tr"></div>
      <div class="bcb-board-corner bcb-board-corner--bl"></div>
      <div class="bcb-board-corner bcb-board-corner--br"></div>

      <div class="bcb-schedule-grid">
        <!-- Header row -->
        <div class="bcb-schedule-grid__cell--header-first" style="border-bottom:2px solid oklch(20% 0 0);"></div>
        <?php foreach (bcb_cfg_list('board.rooms') as $i => $room) : ?>
          <div class="bcb-schedule-grid__cell--header"><span class="bcb-kalam-room" style="transform:rotate(<?php echo $i % 2 ? 1 : -1; ?>deg); display:inline-block;"><?php echo bcb_text($room); ?></span></div>
        <?php endforeach; ?>

        <?php
        $sticky_rotations = array(-4, 3, -3, 4, -2);
        $sticky_count = 0;
        foreach (bcb_cfg_list('board.items') as $item) :
          $type = isset($item['type']) ? $item['type'] : 'slot';
          $style = isset($item['style']) ? $item['style'] : 'break';
          $thick = !empty($item['thick']);
        ?>
          <?php if ($type === 'slot') : ?>
            <!-- <?php echo esc_html($item['start'] . '–' . $item['end']); ?> -->
            <div class="bcb-schedule-grid__time<?php echo $thick ? ' bcb-schedule-grid__time--thick' : ''; ?>"><?php echo bcb_text($item['start']); ?><br><?php echo bcb_text($item['end']); ?></div>
            <?php foreach ($item['cells'] as $cell) :
              $plain = is_array($cell) && isset($cell['plain']);
              $classes = 'bcb-schedule-grid__cell' . ($thick ? ' bcb-schedule-grid__cell--thick' : '') . ($plain ? ' bcb-kalam-cell' : '');
            ?>
              <div class="<?php echo $classes; ?>"><?php
                                                    if ($plain) {
                                                      echo bcb_rich($cell['plain']);
                                                    } elseif (is_string($cell) && $cell !== '') {
                                                      $rotate = $sticky_rotations[$sticky_count++ % count($sticky_rotations)];
                                                      echo '<span class="bcb-sticky-note" style="transform:rotate(' . $rotate . 'deg)">' . bcb_rich($cell) . '</span>';
                                                    }
                                                    ?></div>
            <?php endforeach; ?>
          <?php elseif ($type === 'break' && $style === 'big') : ?>
            <div class="bcb-schedule-grid__cell--full"><span class="bcb-kalam-big"><?php echo bcb_text($item['label']); ?></span></div>
          <?php elseif ($type === 'break' && $style === 'feedback') : ?>
            <div style="grid-column:1/-1; text-align:center; padding:20px 0 24px;"><span class="bcb-kalam-feedback"><?php echo bcb_text($item['label']); ?></span></div>
          <?php elseif ($type === 'break') : ?>
            <div class="bcb-schedule-grid__cell--break"><span class="bcb-kalam-<?php echo $style === 'techlash' ? 'techlash' : 'break'; ?>"><?php echo bcb_text($item['label']); ?></span></div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <button class="bcb-collapse-link" onclick="document.getElementById('board-expanded').style.display='none'; document.getElementById('board-collapsed').style.display='block'"><?php echo bcb_text(bcb_cfg('board.collapse_label')); ?></button>
  </div>

  <p class="bcb-board-hint"><?php echo bcb_text(bcb_cfg('board.hint')); ?></p>
</section>

<!-- TYPES OF TALKS -->
<section class="bcb-talks">
  <div class="bcb-section-label bcb-section-label--green" style="margin-bottom:16px;"><?php echo bcb_text(bcb_cfg('talks.label')); ?></div>
  <div class="bcb-talks__grid">
    <?php foreach (bcb_cfg_list('talks.cards') as $card) : ?>
      <div class="bcb-talk-card">
        <div class="bcb-talk-card__sub"><?php echo bcb_text($card['sub']); ?></div>
        <h4 class="bcb-talk-card__title"><?php echo bcb_rich($card['title']); ?></h4>
        <p><?php echo bcb_rich($card['text']); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php if ($bcb_rsvp_on) : ?>
  <!-- RSVP -->
  <section class="bcb-rsvp">
    <div>
      <h2 class="bcb-rsvp__heading"><?php echo bcb_rich(bcb_cfg('rsvp_section.heading')); ?></h2>
      <p><?php echo bcb_rich(bcb_cfg('rsvp_section.body')); ?></p>
    </div>
    <a class="bcb-btn-rsvp" href="<?php echo esc_url($bcb_rsvp_url); ?>"><?php echo bcb_text($bcb_rsvp_label); ?></a>
  </section>
<?php endif; ?>

<!-- VENUE -->
<section class="bcb-venue">
  <div>
    <div class="bcb-section-label bcb-section-label--green" style="margin-bottom:16px;"><?php echo bcb_text(bcb_cfg('venue.label')); ?></div>
    <h2 class="bcb-venue__heading"><?php echo bcb_rich(bcb_cfg('venue.name')); ?></h2>
    <p style="color:oklch(30% 0.02 40);"><?php echo bcb_rich(bcb_cfg('venue.address')); ?></p>
    <p style="font-size:15px; color:oklch(40% 0.02 40);"><?php echo bcb_rich(bcb_cfg('venue.directions')); ?></p>
  </div>
  <?php if (bcb_cfg('venue.map_embed_url')) : ?>
    <iframe
      class="bcb-map-embed"
      src="<?php echo esc_url(bcb_cfg('venue.map_embed_url')); ?>"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      title="<?php echo esc_attr(bcb_cfg('venue.map_title')); ?>"></iframe>
  <?php endif; ?>
</section>

<!-- SPONSORS -->
<section class="bcb-sponsors">
  <div class="bcb-sponsors__label"><?php echo bcb_text(bcb_cfg('sponsors.label')); ?></div>
  <div class="bcb-sponsors__grid">
    <?php foreach (bcb_cfg_list('sponsors.items') as $sponsor) :
      $type = isset($sponsor['type']) ? $sponsor['type'] : 'text';
      $color = $bcb_color(isset($sponsor['color']) ? $sponsor['color'] : '');
    ?>
      <div class="bcb-sponsor-card<?php echo $type === 'cta' ? ' bcb-sponsor-card--cta' : ''; ?>">
        <div class="bcb-sponsor-card__tier bcb-sponsor-card__tier--<?php echo $color; ?>"><?php echo bcb_text($sponsor['tier']); ?></div>
        <?php if ($type === 'cta') : ?>
          <p class="bcb-sponsor-cta-text"><?php echo bcb_rich($sponsor['text']); ?></p>
          <a class="bcb-sponsor-cta-link" href="<?php echo esc_url(bcb_link($sponsor['link'])); ?>" target="_blank" rel="noopener"><?php echo bcb_text($sponsor['link_label']); ?></a>
        <?php elseif ($type === 'logos') : ?>
          <div style="display:flex; justify-content:center; align-items:flex-start; gap:16px; min-height:60px; flex-wrap:wrap;">
            <?php foreach ($sponsor['logos'] as $logo) :
              $logo_link = !empty($logo['link']) ? bcb_link($logo['link']) : '';
            ?>
              <<?php echo $logo_link ? 'a href="' . esc_url($logo_link) . '" target="_blank" rel="noopener noreferrer"' : 'div'; ?> style="display:flex; flex-direction:column; align-items:center; gap:6px; color:inherit; text-decoration:none;">
                <img src="<?php echo esc_url(bcb_asset($logo['src'])); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" style="height:40px; width:auto; max-width:100%; object-fit:contain;">
                <?php if (!empty($logo['name'])) : ?>
                  <span style="font-family:'Space Grotesk',sans-serif; font-size:11px; color:oklch(40% 0.02 40); text-align:center;"><?php echo bcb_text($logo['name']); ?></span>
                <?php endif; ?>
              </<?php echo $logo_link ? 'a' : 'div'; ?>>
            <?php endforeach; ?>
          </div>
        <?php else : ?>
          <div style="display:flex; justify-content:center; align-items:center; height:60px;">
            <span style="font-family:'Space Grotesk',sans-serif; font-size:12px; color:oklch(50% 0.02 40); text-align:center;"><?php echo bcb_text($sponsor['text']); ?></span>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php get_footer('bcb'); ?>