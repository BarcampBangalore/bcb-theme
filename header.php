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
<body>
    <?php
    global $post;
    $post_slug = $post->post_name;
    ?>
    <script type="text/javascript">

        bcb_page_name = "<?php echo $post_slug; ?>";

    </script>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #a46d33;;">
    <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>"><img height="30px" src="<?php bloginfo('template_url'); ?>/images/BCB-LOGO-02.png" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
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
        <li class="nav-item">
          <a class="nav-link" href="<?php echo wp_registration_url() ?>">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php wp_login_url(get_permalink()) ?>">Login</a>
        </li>
      </ul>
    </div>
  </nav>
</header>


    <div id="master_container" class="container d-flex">

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

        <div id="master_row" class="row col d-md-flex flex-md-row align-items-stretch m-0 p-0">
<!--
            <div id="header_small" class="header_container container-fluid d-flex d-md-none m-0 p-0">
                <div class="row w-100 m-0">
                    <div id="menu_button_container" class="col-4"><i class="fa fa-bars" aria-hidden="true"></i> MENU</div>
                    <div class="col-4 p-0">
                        <div id="header_small_logo_container">
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/images/BCB-LOGO-02.png" />
                            </a>
                        </div>
                    </div>
                    <div id="venue_and_search_container" class="col-4">
                        <?php // <div id="when_where_container_small">When & Where</div> ?>
                        <div id="search_button_small"><i class="fa fa-search" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>


            <div id="header_large" class="header_container d-none d-md-flex col-md-3 flex-column justify-content-center">
                <div id="header_large_logo_container">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/images/BCB-LOGO-02.png" />
                    </a>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'menu_part1')); ?>
                <?php wp_nav_menu(array('theme_location' => 'menu_part2')); ?>
                <?php get_search_form(true); ?>

                <div id="logins">
                    <?php
                    global $current_user;
                    get_currentuserinfo();
                    if (is_user_logged_in()) {
                        echo '<a href="' . admin_url('profile.php') . '">Hi ' . $current_user->user_login . '</a>&nbsp; |&nbsp; ';
                         wp_loginout(get_permalink());
                    } else {
                        echo "<a href=\"" . wp_registration_url() . "\" title=\"Sign Up\"> SIGN-UP </a>&nbsp; |&nbsp;";
                        echo "<a href=\"" . wp_login_url(get_permalink()) . "\" title=\"Login\"> Login </a>";
                    }
                    ?>
                </div>

            </div> -->
            <div id="page_master_container" class="d-md-flex flex-md-column col-md-12 justify-content-center">
