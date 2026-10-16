<?php
/**
 * Template Name: Home
 */
global $current_user;
get_currentuserinfo();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo esc_html(bcb_cfg('event.name', 'BarCamp Bangalore')); ?></title>
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(bcb_asset(bcb_cfg('images.favicon_32', 'images/favicon-32x32.png'))); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(bcb_asset(bcb_cfg('images.favicon_16', 'images/favicon-16x16.png'))); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Space+Grotesk:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&family=Kalam:wght@400;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<style>
  /* Full reset for redesigned homepage */
  html, body { margin: 0; padding: 0; }
  body {
    background: oklch(96% 0.02 75) !important;
    color: oklch(18% 0.02 40) !important;
    font-family: 'Work Sans', sans-serif !important;
  }
  *, *::before, *::after { box-sizing: border-box; }

  .bcb-page { overflow-x: hidden; }

  /* Placeholder image blocks */
  .ph {
    background-image: repeating-linear-gradient(45deg, currentColor 0 2px, transparent 2px 12px);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-family: 'Space Grotesk', sans-serif;
    letter-spacing: 0.04em;
    text-transform: uppercase;
  }

  /* Marquee animation */
  @keyframes bcb-drift {
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
  }

  /* Nav */
  .bcb-nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 28px 56px;
    border-bottom: 3px solid oklch(18% 0.02 40);
    background: oklch(96% 0.02 75);
  }
  .bcb-nav__logo { height: 48px; width: auto; object-fit: contain; }
  .bcb-nav__links {
    display: flex;
    gap: 28px;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 500;
    font-size: 15px;
    list-style: none;
    margin: 0; padding: 0;
  }
  .bcb-nav__links a { color: inherit; text-decoration: none; }
  .bcb-nav__links a:hover { text-decoration: underline; }
  .bcb-nav__actions { display: flex; gap: 10px; }
  .bcb-btn-outline {
    border: 2px solid oklch(18% 0.02 40);
    padding: 9px 20px;
    border-radius: 100px;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 14px;
    text-decoration: none;
    color: oklch(18% 0.02 40);
    background: transparent;
    cursor: pointer;
  }
  .bcb-btn-green {
    background: oklch(52% 0.12 150);
    color: white;
    padding: 9px 20px;
    border-radius: 100px;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 14px;
    text-decoration: none;
    border: none;
    cursor: pointer;
  }

  /* Hero */
  .bcb-hero {
    position: relative;
    padding: 80px 0 100px;
    overflow: hidden;
    background: oklch(96% 0.02 75);
  }
  .bcb-hero__inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 56px 140px;
    position: relative;
  }
  /* badge sits above the photo, top-right of the content area */
  .bcb-hero__badge {
    position: absolute;
    top: -16px; right: 56px;
    background: oklch(64% 0.19 45);
    color: white;
    padding: 10px 18px;
    border-radius: 6px;
    transform: rotate(6deg);
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 14px;
    box-shadow: 4px 4px 0 oklch(18% 0.02 40);
    z-index: 3;
  }
  /* circle sits below the CTA row, left-aligned with content */
  .bcb-hero__circle {
    position: absolute;
    bottom: 50px; left: 16px;
    width: 110px; height: 110px;
    border: 3px solid oklch(52% 0.12 150);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: rotate(-8deg);
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 12px;
    color: oklch(52% 0.12 150);
    text-align: center;
    line-height: 1.3;
    z-index: 2;
  }
  .bcb-hero__content { max-width: 680px; position: relative; z-index: 1; }
  .bcb-hero__heading {
    font-family: 'Instrument Serif', serif;
    font-size: 72px;
    line-height: 1;
    margin: 0 0 24px;
    font-style: italic;
  }
  .bcb-hero__heading em { color: oklch(64% 0.19 45); font-style: inherit; }
  .bcb-hero__sub {
    font-size: 19px;
    line-height: 1.6;
    max-width: 520px;
    margin: 0 0 36px;
    color: oklch(30% 0.02 40);
  }
  .bcb-hero__cta { display: flex; gap: 16px; align-items: center; flex-wrap: wrap; }
  .bcb-btn-dark {
    background: oklch(18% 0.02 40);
    color: white;
    padding: 16px 32px;
    border-radius: 100px;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 16px;
    box-shadow: 5px 5px 0 oklch(64% 0.19 45);
    text-decoration: none;
    display: inline-block;
  }
  .bcb-hero__meta {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 15px;
    color: oklch(30% 0.02 40);
  }
  .bcb-hero__photo {
    position: absolute;
    right: 56px;
    top: 0;
    width: 320px;
    height: 400px;
    border-radius: 8px;
    transform: rotate(4deg);
    box-shadow: 0 20px 40px -10px rgba(0,0,0,0.25);
    overflow: hidden;
    z-index: 1;
  }
  .bcb-hero__photo img { width: 100%; height: 100%; object-fit: cover; }

  /* What is unconference */
  .bcb-what {
    padding: 70px 56px;
    background: oklch(18% 0.02 40);
    color: white;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
  }
  .bcb-what__label {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.1em;
    color: oklch(72% 0.15 45);
    margin-bottom: 16px;
    text-transform: uppercase;
  }
  .bcb-what__heading {
    font-family: 'Instrument Serif', serif;
    font-size: 48px;
    font-style: italic;
    line-height: 1.1;
    margin: 0 0 20px;
  }
  .bcb-what__body { font-size: 17px; line-height: 1.7; color: oklch(85% 0.01 90); max-width: 460px; margin: 0; }

  /* Who shows up */
  .bcb-who { padding: 80px 56px; text-align: center; }
  .bcb-section-label {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.1em;
    margin-bottom: 16px;
    text-transform: uppercase;
  }
  .bcb-section-label--green { color: oklch(52% 0.12 150); }
  .bcb-section-label--orange { color: oklch(64% 0.19 45); }
  .bcb-section-heading {
    font-family: 'Instrument Serif', serif;
    font-size: 44px;
    font-style: italic;
    margin: 0 0 20px;
  }
  .bcb-section-body {
    font-size: 17px;
    line-height: 1.7;
    max-width: 640px;
    margin: 0 auto 48px;
    color: oklch(30% 0.02 40);
  }
  .bcb-tags {
    display: flex;
    gap: 24px;
    justify-content: center;
    flex-wrap: wrap;
  }
  .bcb-tag {
    background: oklch(88% 0.04 60);
    padding: 14px 24px;
    border-radius: 100px;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 15px;
  }
  .bcb-tag--green { background: oklch(85% 0.06 150); }

  /* Marquee */
  .bcb-moments { padding: 70px 0; background: oklch(18% 0.02 40); overflow: hidden; }
  .bcb-moments__header { padding: 0 56px 36px; text-align: center; }
  .bcb-moments__label {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.1em;
    color: oklch(72% 0.15 45);
    text-transform: uppercase;
  }
  .bcb-moments__heading {
    font-family: 'Instrument Serif', serif;
    font-style: italic;
    font-size: 38px;
    color: white;
    margin: 12px 0 0;
  }
  .bcb-marquee { display: flex; width: max-content; gap: 28px; animation: bcb-drift 32s linear infinite; }
  .bcb-card {
    border-radius: 10px;
    font-size: 12px;
    font-weight: 600;
    flex-shrink: 0;
    width: 220px;
    height: 280px;
    overflow: hidden;
  }
  .bcb-card img { width: 100%; height: 100%; object-fit: cover; }

  /* Format */
  .bcb-format { padding: 80px 56px; background: oklch(92% 0.03 70); }
  .bcb-format__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 32px; }
  .bcb-format-card {
    background: oklch(96% 0.02 75);
    border: 3px solid oklch(18% 0.02 40);
    border-radius: 12px;
    padding: 36px;
  }
  .bcb-format-card--orange { box-shadow: 8px 8px 0 oklch(64% 0.19 45); }
  .bcb-format-card--green  { box-shadow: 8px 8px 0 oklch(52% 0.12 150); }
  .bcb-format-card__title {
    font-family: 'Instrument Serif', serif;
    font-size: 34px;
    font-style: italic;
    margin: 0 0 8px;
  }
  .bcb-format-card__meta {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 16px;
  }
  .bcb-format-card__meta--orange { color: oklch(64% 0.19 45); }
  .bcb-format-card__meta--green  { color: oklch(52% 0.12 150); }
  .bcb-format-card p { font-size: 16px; line-height: 1.6; margin: 0; }

  /* Board */
  .bcb-board-wrap { padding: 80px 56px; background: oklch(96% 0.02 75); }
  .bcb-board-frame {
    max-width: 520px;
    margin: 0 auto;
    background: white;
    border: 6px solid oklch(75% 0.01 90);
    border-radius: 6px;
    box-shadow: 0 20px 40px -18px rgba(0,0,0,0.3);
    position: relative;
    padding: 44px 40px;
    text-align: center;
  }
  .bcb-board-frame--wide { max-width: 820px; padding: 0; }
  .bcb-board-corner {
    position: absolute;
    width: 20px;
    height: 20px;
    background: oklch(20% 0 0);
    border-radius: 4px;
  }
  .bcb-board-corner--tl { top: -4px; left: -4px; }
  .bcb-board-corner--tr { top: -4px; right: -4px; }
  .bcb-board-corner--bl { bottom: -4px; left: -4px; }
  .bcb-board-corner--br { bottom: -4px; right: -4px; }
  .bcb-board-stickies { display: flex; justify-content: center; gap: 14px; margin-bottom: 20px; }
  .bcb-sticky-dot {
    width: 36px;
    height: 36px;
    background: oklch(75% 0.16 15);
    border-radius: 2px;
    box-shadow: 2px 3px 6px rgba(0,0,0,0.2);
  }
  .bcb-board-text { font-family: 'Kalam', cursive; font-size: 20px; margin-bottom: 24px; }
  .bcb-btn-reveal {
    display: inline-block;
    background: oklch(18% 0.02 40);
    color: white;
    padding: 14px 30px;
    border-radius: 100px;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 15px;
    cursor: pointer;
    box-shadow: 4px 4px 0 oklch(64% 0.19 45);
    border: none;
  }

  /* Board grid */
  .bcb-schedule-grid {
    display: grid;
    grid-template-columns: 70px repeat(3, 1fr);
  }
  .bcb-schedule-grid__time {
    padding: 10px;
    font-family: 'Space Grotesk', sans-serif;
    font-size: 11px;
    color: oklch(40% 0.02 40);
    border-bottom: 1px dashed oklch(85% 0.01 90);
  }
  .bcb-schedule-grid__time--thick { border-bottom: 2px solid oklch(20% 0 0); }
  .bcb-schedule-grid__cell {
    border-left: 2px solid oklch(85% 0.01 90);
    border-bottom: 1px dashed oklch(85% 0.01 90);
    padding: 12px;
    position: relative;
  }
  .bcb-schedule-grid__cell--thick { border-bottom: 2px solid oklch(20% 0 0); }
  .bcb-schedule-grid__cell--full {
    grid-column: 1 / -1;
    text-align: center;
    background: oklch(98% 0.01 90);
    border-bottom: 2px solid oklch(20% 0 0);
    padding: 20px 0;
  }
  .bcb-schedule-grid__cell--break {
    grid-column: 1 / -1;
    text-align: center;
    border-bottom: 1px solid oklch(85% 0.01 90);
    padding: 16px 0;
  }
  .bcb-schedule-grid__cell--header {
    border-left: 2px solid oklch(85% 0.01 90);
    border-bottom: 2px solid oklch(20% 0 0);
    padding: 14px;
    text-align: center;
  }
  .bcb-schedule-grid__cell--header-first { border-bottom: 2px solid oklch(20% 0 0); }
  .bcb-sticky-note {
    background: oklch(75% 0.16 15);
    color: oklch(20% 0.05 15);
    padding: 10px 12px;
    border-radius: 2px;
    box-shadow: 2px 3px 6px rgba(0,0,0,0.2);
    font-family: 'Kalam', cursive;
    font-size: 13px;
    line-height: 1.3;
    display: inline-block;
  }
  .bcb-kalam-big { font-family: 'Kalam', cursive; font-weight: 700; font-size: 32px; letter-spacing: 0.02em; }
  .bcb-kalam-room {
    font-family: 'Kalam', cursive;
    font-weight: 700;
    font-size: 22px;
  }
  .bcb-kalam-break { font-family: 'Kalam', cursive; font-weight: 700; font-size: 24px; }
  .bcb-kalam-techlash { font-family: 'Kalam', cursive; font-weight: 700; font-size: 28px; color: oklch(64% 0.19 45); }
  .bcb-kalam-feedback { font-family: 'Kalam', cursive; font-weight: 700; font-size: 26px; }
  .bcb-kalam-cell { font-family: 'Kalam', cursive; font-size: 14px; display: flex; align-items: center; }
  .bcb-board-hint {
    text-align: center;
    font-family: 'Space Grotesk', sans-serif;
    font-size: 13px;
    color: oklch(45% 0.02 40);
    margin: 28px 0 0;
  }
  .bcb-collapse-link {
    display: block;
    margin: 24px auto 0;
    text-align: center;
    cursor: pointer;
    background: none;
    border: none;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 14px;
    color: oklch(30% 0.02 40);
    border-bottom: 2px solid oklch(20% 0 0);
    padding: 0;
    text-decoration: none;
  }

  /* Talk types */
  .bcb-talks { padding: 80px 56px; }
  .bcb-talks__grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
  .bcb-talk-card {
    padding: 28px 0;
    border-top: 3px solid oklch(18% 0.02 40);
  }
  .bcb-talk-card__sub {
    font-family: 'Instrument Serif', serif;
    font-style: italic;
    font-size: 15px;
    color: oklch(64% 0.19 45);
    margin-bottom: 8px;
  }
  .bcb-talk-card__title {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 22px;
    margin: 0 0 10px;
    font-weight: 700;
  }
  .bcb-talk-card p { font-size: 15px; line-height: 1.6; color: oklch(30% 0.02 40); margin: 0; }

  /* RSVP banner */
  .bcb-rsvp {
    padding: 70px 56px;
    background: oklch(64% 0.19 45);
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    flex-wrap: wrap;
  }
  .bcb-rsvp__heading {
    font-family: 'Instrument Serif', serif;
    font-size: 42px;
    font-style: italic;
    margin: 0 0 10px;
  }
  .bcb-rsvp p { font-size: 16px; max-width: 460px; margin: 0; opacity: 0.9; }
  .bcb-btn-rsvp {
    background: oklch(18% 0.02 40);
    color: white;
    padding: 18px 40px;
    border-radius: 100px;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 17px;
    flex-shrink: 0;
    box-shadow: 5px 5px 0 white;
    text-decoration: none;
    display: inline-block;
  }

  /* Venue */
  .bcb-venue {
    padding: 80px 56px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
  }
  .bcb-venue__heading {
    font-family: 'Instrument Serif', serif;
    font-size: 38px;
    font-style: italic;
    margin: 0 0 16px;
  }
  .bcb-venue p { font-size: 16px; line-height: 1.7; margin: 0 0 12px; }
  .bcb-venue p:last-child { margin: 0; }
  .bcb-map-embed { width: 100%; height: 260px; border-radius: 8px; border: none; }

  /* Sponsors */
  .bcb-sponsors { padding: 80px 56px; background: oklch(92% 0.03 70); }
  .bcb-sponsors__label {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.1em;
    color: oklch(64% 0.19 45);
    margin-bottom: 16px;
    text-align: center;
    text-transform: uppercase;
  }
  .bcb-sponsors__grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center; }
  .bcb-sponsor-card {
    background: oklch(96% 0.02 75);
    border-radius: 10px;
    padding: 28px 16px;
  }
  .bcb-sponsor-card__tier {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 14px;
    margin-bottom: 14px;
  }
  .bcb-sponsor-card__tier--orange { color: oklch(64% 0.19 45); }
  .bcb-sponsor-card__tier--green  { color: oklch(52% 0.12 150); }
  .bcb-sponsor-card--cta { display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 6px; }
  .bcb-sponsor-cta-text { font-family: 'Space Grotesk', sans-serif; font-size: 13px; color: oklch(45% 0.02 40); margin: 0; }
  .bcb-sponsor-cta-link {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: oklch(18% 0.02 40);
    text-decoration: none;
    border-bottom: 1.5px solid oklch(64% 0.19 45);
    padding-bottom: 1px;
  }
  .bcb-sponsor-cta-link:hover { opacity: 0.7; }

  /* Footer */
  .bcb-footer {
    padding: 56px;
    background: oklch(18% 0.02 40);
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    flex-wrap: wrap;
    gap: 30px;
  }
  .bcb-footer__logo { height: 36px; filter: brightness(0) invert(1); margin-bottom: 14px; display: block; }
  .bcb-footer__copy { font-family: 'Space Grotesk', sans-serif; font-size: 13px; opacity: 0.6; }
  .bcb-footer__social { display: flex; gap: 10px; flex-wrap: wrap; }
  .bcb-footer__social a {
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 100px;
    padding: 8px 16px;
    font-family: 'Space Grotesk', sans-serif;
    font-size: 13px;
    color: white;
    text-decoration: none;
  }
  .bcb-footer__social a:hover { border-color: rgba(255,255,255,0.7); }

  /* Responsive */
  @media (max-width: 900px) {
    .bcb-hero__heading { font-size: 56px; }
    .bcb-hero { padding: 48px 0 60px; }
    .bcb-hero__inner { padding: 0 24px 100px; }
    .bcb-hero__photo { display: none; }
    .bcb-hero__circle { display: none; }
    .bcb-hero__badge { right: 24px; }
    .bcb-nav { padding: 20px 24px; }
    .bcb-nav__links { display: none; }
    .bcb-what { grid-template-columns: 1fr; padding: 48px 24px; gap: 32px; }
    .bcb-who { padding: 48px 24px; }
    .bcb-format { padding: 48px 24px; }
    .bcb-format__grid { grid-template-columns: 1fr; }
    .bcb-board-wrap { padding: 48px 24px; }
    .bcb-talks { padding: 48px 24px; }
    .bcb-talks__grid { grid-template-columns: 1fr; }
    .bcb-rsvp { padding: 48px 24px; flex-direction: column; align-items: flex-start; }
    .bcb-venue { padding: 48px 24px; grid-template-columns: 1fr; }
    .bcb-sponsors { padding: 48px 24px; }
    .bcb-sponsors__grid { grid-template-columns: repeat(2, 1fr); }
    .bcb-footer { padding: 40px 24px; flex-direction: column; align-items: flex-start; }
  }
</style>
</head>
<body>
<?php
// Content comes from data/event.json (see bcb_cfg() and friends in functions.php).
// Purely decorative values (rotations, tint colors) are cycled here by index.
$bcb_color = function ($color) {
    return $color === 'green' ? 'green' : 'orange';
};
$bcb_rsvp_on    = (bool) bcb_cfg('rsvp.enabled', true);
$bcb_rsvp_url   = bcb_link(bcb_cfg('rsvp.url', '/rsvp'));
$bcb_rsvp_label = bcb_cfg('rsvp.label', 'RSVP now →');
$bcb_logo       = bcb_asset(bcb_cfg('images.logo', 'images/logo-bcb-no-year.png'));
$bcb_name       = bcb_cfg('event.name', 'BarCamp Bangalore');
?>
<div class="bcb-page">

  <!-- NAV -->
  <nav class="bcb-nav">
    <a href="<?php echo home_url('/'); ?>">
      <img class="bcb-nav__logo" src="<?php echo esc_url($bcb_logo); ?>" alt="<?php echo esc_attr($bcb_name); ?>">
    </a>
    <ul class="bcb-nav__links">
      <?php foreach (bcb_cfg_list('nav.links') as $link) : ?>
      <li><a href="<?php echo esc_url(bcb_link($link['url'])); ?>"><?php echo bcb_text($link['label']); ?></a></li>
      <?php endforeach; ?>
    </ul>
    <div class="bcb-nav__actions">
      <?php if (is_user_logged_in()) : ?>
        <a class="bcb-btn-outline" href="<?php echo admin_url('profile.php'); ?>">Hi, <?php echo $current_user->user_login; ?></a>
        <a class="bcb-btn-green" href="<?php echo wp_logout_url(home_url('/')); ?>">Logout</a>
      <?php else : ?>
        <a class="bcb-btn-outline" href="<?php echo wp_login_url(get_permalink()); ?>">Login</a>
        <a class="bcb-btn-green" href="<?php echo wp_registration_url(); ?>">Sign up</a>
      <?php endif; ?>
    </div>
  </nav>

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
        <div style="display:flex; justify-content:center; align-items:center; gap:12px; height:60px; flex-wrap:wrap;">
          <?php foreach ($sponsor['logos'] as $logo) : ?>
          <img src="<?php echo esc_url(bcb_asset($logo['src'])); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" style="height:32px; width:auto; object-fit:contain;">
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

  <!-- FOOTER -->
  <footer class="bcb-footer">
    <div>
      <img class="bcb-footer__logo" src="<?php echo esc_url($bcb_logo); ?>" alt="<?php echo esc_attr($bcb_name); ?>">
      <div class="bcb-footer__copy">
        <span style="display:inline-block; transform:rotate(180deg);">©</span>
        <?php echo bcb_text(bcb_cfg('footer.copy')); ?>
      </div>
    </div>
    <nav class="bcb-footer__social">
      <?php foreach (bcb_cfg_list('footer.social') as $social) : ?>
      <a href="<?php echo esc_url($social['url']); ?>" target="_blank" rel="noopener"><?php echo bcb_text($social['label']); ?></a>
      <?php endforeach; ?>
    </nav>
  </footer>

</div>
<?php wp_footer(); ?>
</body>
</html>
