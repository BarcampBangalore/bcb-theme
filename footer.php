
        </div>
          
        <?php
//        <div id="when_where_container" class="col d-none d-md-block">
//            When & Where
//        </div>
        ?>
    </div>


    <div id="sidebar" class="d-md-none">
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
        <?php wp_nav_menu(array('theme_location' => 'menu_part1')); ?>
        <?php wp_nav_menu(array('theme_location' => 'menu_part2')); ?>
    </div>

    <?php /*
    <div id="venue_container" class="d-none flex-column col-md-9">
        <div id="venue_details_wrapper" class="d-flex">
            <div id="venue_date_wrapper">
                <div id="venue_date">SEPT 21</div>
                <div id="venue_year">TWO THOUSAND AND NINETEEN</div>
            </div>
            <div id="venue_time_wrapper">
                <div id="venue_time">8:00</div>
                <div id="venue_tod">IN THE MORNING</div>
            </div>
            <div id="venue_address_wrapper">
            <div id="venue_address_line1">DAYANAND SAGAR UNIVERSITY, SCHOOL OF ENGINEERING</div>
            <div id="venue_address_line2">HOSUR ROAD, KUDLU GATE, BANGALORE <strong>(NOT KUMARSWAMY LAYOUT)</strong></div>
            </div>
        </div>
        <div id="venue_map" class="d-flex col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1635.2579710026564!2d77.64227583727812!3d12.887079977334546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x35272e55303bd711!2sDayananda+Sagar+University!5e0!3m2!1sen!2sin!4v1562423604911!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div id="close_button"><i class="fa fa-times-circle-o" aria-hidden="true"></i></div>
    </div> */
    ?>        


    <div id="search_slider_mobile" class="d-none">
        <?php get_search_form(true); ?>
        <div id="close_button"><i class="fa fa-times-circle-o" aria-hidden="true"></i></div>
    </div>

</div>




<div id="footer_container" class="row col-1">
    <div id="social_bar_container" class="container-fluid">
        <div class="row">
<!--            <div class="col text-center">
                <a href="https://barcampbangalore.com/bcb/sponsorship/sponsorship.pdf">
                    <img class="social_bar_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-01.png"/>
                    <span class="d-none d-md-inline">SPONSORSHIP PDF</span>
                </a>
            </div>-->

            <div class="col d-md-none"> </div>

            <div class="col text-center">
                <a href="https://discord.gg/SqYxgd45wD">
                    <i class="fab fa-discord social_bar_icon"></i>
                    <span class="d-none d-md-inline">JOIN US ON DISCORD</span>
                </a>
            </div>
            
            <div class="col text-center">
                <a href="https://twitter.com/barcampbng">
                    <i class="fab fa-twitter social_bar_icon"></i>
                    <span class="d-none d-md-inline">TWITTER</span>
                </a>
            </div>
            <div class="col text-center">
                <a href="https://www.facebook.com/barcampbng">
                    <img class="social_bar_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-04.png"/>
                    <span class="d-none d-md-inline">FACEBOOK</span>
                </a>
            </div>
            <div class="col text-center">
                <a href="https://www.meetup.com/Barcamp-Bangalore/">
                    <img class="social_bar_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-02.png"/>
                    <span class="d-none d-md-inline">MEETUP</span>
                </a>
            </div>
<!--            <div class="col text-center">
                <a href="http://slack.barcampbangalore.com/">
                    <i class="fab fa-slack social_bar_icon" aria-hidden="true"></i>
                    <span class="d-none d-md-inline">JOIN US ON SLACK</span>
                </a>
            </div>-->
            <div class="col d-md-none"> </div>


        </div>
    </div>
</div>


<?php /*
<div id="venue_container_small" class="d-none d-md-none flex-column col-md-9">
    <div id="venue_details_wrapper_row1" class="d-flex">
        <div id="venue_date_wrapper" class="justify-content-around">
            <div id="venue_date">SPET 21</div>
            <div id="venue_year">TWO THOUSAND AND NINETEEN</div>
        </div>
        <div id="venue_time_wrapper">
            <div id="venue_time">8:00</div>
            <div id="venue_tod">IN THE MORNING</div>
        </div>
    </div>
    <div id="venue_details_wrapper_row2" class="d-flex">
        <div id="venue_address_wrapper">
            <div id="venue_address_line1">DAYANAND SAGAR UNIVERSITY, SCHOOL OF ENGINEERING</div>
            <div id="venue_address_line2">HOSUR ROAD, KUDLU GATE, BANGALORE <strong>(NOT KUMARSWAMY LAYOUT)</strong></div>
        </div>
    </div>
    <div id="venue_map" class="d-flex col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1635.2579710026564!2d77.64227583727812!3d12.887079977334546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x35272e55303bd711!2sDayananda+Sagar+University!5e0!3m2!1sen!2sin!4v1562423604911!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    </div>
    <div id="close_button"><i class="fa fa-times-circle-o" aria-hidden="true"></i></div>
</div> */
?>


    <?php wp_footer(); ?>
</body>

</html>
