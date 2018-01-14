<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

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
    
    <div id="master_container" class="container-fluid d-flex">
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

            <div id="header_small" class="header_container container-fluid d-flex d-md-none m-0 p-0">
                <div class="row w-100 m-0">
                    <div id="menu_button_container" class="col-4"><i class="fa fa-bars" aria-hidden="true"></i> MENU</div>
                    <div class="col-4 p-0">
                        <div id="header_small_logo_container">
                            <img src="<?php bloginfo('template_url'); ?>/images/BCB-LOGO-02.png" />
                        </div>
                    </div>
                    <div id="venue_and_search_container" class="col-4">
                        <div id="when_where_container_small">When & Where</div>
                        <div id="search_button_small"><i class="fa fa-search" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>


            <div id="header_large" class="header_container d-none d-md-flex col-md-3 flex-column justify-content-center">
                <?php wp_nav_menu(array('theme_location' => 'menu_part1')); ?>
                <div id="header_large_logo_container">
                    <img src="<?php bloginfo('template_url'); ?>/images/BCB-LOGO-02.png" />
                </div>
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

                


            </div>
            <div id="page_master_container" class="d-md-flex flex-md-columns col-md-9 justify-content-center">