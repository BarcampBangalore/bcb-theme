<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php echo wp_title('»', false, 'right') . " Barcamp Bangalore"; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png?v=PY4NNGXQPr">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png?v=PY4NNGXQPr">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png?v=PY4NNGXQPr">
<link rel="manifest" href="manifest.json?v=PY4NNGXQPr">
<link rel="mask-icon" href="safari-pinned-tab.svg?v=PY4NNGXQPr" color="#5bbad5">
<link rel="shortcut icon" href="favicon.ico?v=PY4NNGXQPr">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/add-to-calendar-button@1/assets/css/atcb.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body style="background-color: #fdfbf2;">
    <?php
    global $post;
    $post_slug = $post->post_name;
    ?>
    <script type="text/javascript">

        bcb_page_name = "<?php echo $post_slug; ?>";

    </script>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-12" style="text-align: center;">
          <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>"><img height="200px" src="<?php bloginfo('template_url'); ?>/images/BCB-LOGO-02.png" alt="test"></a>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #224b71;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav m-auto">
            <?php
            $menu_items = wp_get_nav_menu_items('menu-part-1');
            foreach ($menu_items as $item){
            ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $item->url ?>"><?php echo $item->title ?></a>
              </li>
            <?php } ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">About Us</a>
              <div class="dropdown-menu">
              <?php
                $menu_items = wp_get_nav_menu_items('menu-part-2');
                foreach ($menu_items as $item){
                ?>
                  <a class="dropdown-item" href="<?php echo $item->url ?>"><?php echo $item->title ?></a>
                <?php } ?>
              </div>
            </li>
          </ul>
          <?php
          function custom_search_form( $form ) {
            $form = '<form class="form-inline my-2 my-lg-0" action="' . home_url( '/' ) . '">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="'. esc_attr__( 'Search' ) .'" aria-label="'. esc_attr__( 'Search' ) .'">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
              </div>
            </form>';

            return $form;
          }
          add_filter( 'get_search_form', 'custom_search_form', 40 );
          get_search_form(true);
          ?>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <?php
            global $current_user;
            get_currentuserinfo();
            if (is_user_logged_in()) { ?>
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Hi <?php echo $current_user->user_login ?>!</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo admin_url('profile.php') ?>">Profile</a>
                  <a class="dropdown-item" href="<?php echo wp_logout_url(get_permalink()) ?>">Logout</a>
              </div>
            <?php } else { ?>
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Hi Guest!</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo wp_registration_url() ?>">Signup</a>
                  <a class="dropdown-item" href="<?php echo wp_login_url(get_permalink()) ?>">Login</a>
              </div>
            <?php } ?>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main role="main">

        <div id="background_icons_container" class="d-none d-md-block">
            <img id="hat_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-06.png" />
            <img id="ruler_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-07.png" />
            <img id="grid_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-08.png" />
            <img id="web_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-09.png" />
            <img id="cloud_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-10.png" />
            <img id="loopy_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-11.png" />
            <img id="mouse_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-12.png" />

        </div>

        <div id="background_icons_container_small" class="d-block d-md-none">
            <img id="hat_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-06.png" />
            <img id="ruler_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-07.png" />
            <img id="grid_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-08.png" />
            <img id="web_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-09.png" />
            <img id="cloud_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-10.png" />
            <img id="loopy_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-11.png" />
            <img id="mouse_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-12.png" />

        </div>