<?php
/**
 * Header for the revamped pages (home, sessions, techlash).
 * Use with get_header('bcb'); pair with get_footer('bcb').
 * Content and links come from data/event.json.
 */
global $current_user;
get_currentuserinfo();

$bcb_event_name = bcb_cfg('event.name', 'BarCamp Bangalore');
$bcb_is_home    = is_front_page() || is_page('home') || is_page_template('page-home.php');
$bcb_title      = $bcb_is_home ? $bcb_event_name : trim(wp_title('»', false, 'right')) . ' ' . $bcb_event_name;

wp_enqueue_script(
    'bcb-nav',
    get_template_directory_uri() . '/scripts/nav.js',
    array(),
    filemtime(get_template_directory() . '/scripts/nav.js'),
    true
);
wp_enqueue_style(
    'bcb-revamp',
    get_template_directory_uri() . '/css/bcb-revamp.css',
    array('bootstrap', 'style'),
    filemtime(get_template_directory() . '/css/bcb-revamp.css')
);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo esc_html($bcb_title); ?></title>
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(bcb_asset(bcb_cfg('images.favicon_32', 'images/favicon-32x32.png'))); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(bcb_asset(bcb_cfg('images.favicon_16', 'images/favicon-16x16.png'))); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Space+Grotesk:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&family=Kalam:wght@400;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
<div class="bcb-page">

  <!-- NAV -->
  <nav class="bcb-nav" id="bcb-nav" aria-label="Main">
    <a class="bcb-nav__brand" href="<?php echo home_url('/'); ?>">
      <img class="bcb-nav__logo" src="<?php echo esc_url(bcb_asset(bcb_cfg('images.logo', 'images/logo-bcb-no-year.png'))); ?>" alt="<?php echo esc_attr($bcb_event_name); ?>">
    </a>
    <button type="button" class="bcb-nav__toggle" aria-expanded="false" aria-controls="bcb-nav-menu" aria-label="Open menu">
      <span class="bcb-nav__bars" aria-hidden="true"></span>
    </button>
    <div class="bcb-nav__menu" id="bcb-nav-menu">
      <ul class="bcb-nav__links">
        <?php foreach (bcb_cfg_list('nav.links') as $link) : ?>
        <?php $bcb_active = is_page(trim($link['url'], '/')); ?>
        <li><a<?php echo $bcb_active ? ' class="is-active" aria-current="page"' : ''; ?> href="<?php echo esc_url(bcb_link($link['url'])); ?>"><?php echo bcb_text($link['label']); ?></a></li>
        <?php endforeach; ?>
      </ul>
      <div class="bcb-nav__actions">
        <?php if (is_user_logged_in()) : ?>
          <a class="btn bcb-btn-outline" href="<?php echo admin_url('profile.php'); ?>">Hi, <?php echo $current_user->user_login; ?></a>
          <a class="btn bcb-btn-green" href="<?php echo wp_logout_url(home_url('/')); ?>">Logout</a>
        <?php else : ?>
          <a class="btn bcb-btn-outline" href="<?php echo wp_login_url(get_permalink()); ?>">Login</a>
          <a class="btn bcb-btn-green" href="<?php echo wp_registration_url(); ?>">Sign up</a>
        <?php endif; ?>
      </div>
    </div>
  </nav>
