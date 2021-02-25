<?php get_header();?>



<div id="page_home_container" class="d-flex align-items-center justify-content-center text-center">
    <div id="page_home_wrapper" class="flex-column">
        <div id="page_home_namaskara" class="row">
            <div class="col-12">Namaskara</div>
        </div>
        <div id="page_home_blr_logo" class="row">
            <div class="col-12">
                <img src="<?php bloginfo('template_url');?>/images/Bengaluru-01.png" />
            </div>
        </div>
        <div id="page_home_sponsors_container" class="">
            <?php /*
            <div id="page_home_sponsors_header" style="font-size:2em;" >
                Barcamp Bangalore Monsoon 2019 has been cancelled due to lack of participation from the community. Details about 
                reasons and what you can do to keep it alive are <font color="red"><a href="https://barcampbangalore.com/planning/barcamp-bangalore-monsoon-2019-stands-cancelled/">here</a></font>. 
            </div> */
                    
            ?>
            <div id="page_home_sponsors_header" style="font-size:2em;" >
                BCB is going virtual with Monthly talks!
            </div>

            <div id="home_venue_details_wrapper" class="row" >
                <div id="home_venue_date_wrapper" class="col-12 col-md-4">
                    <div class="home_venue_item_bg">
                        <div id="home_venue_when">NEXT</div>
                        <div id="home_venue_date">Saturday </div>
                        <div id="home_venue_year">20th March 2021</div>

                    </div>
                </div>
                <div id="home_venue_time_wrapper" class="col-12 col-md-4">
                    <div class="home_venue_item_bg">
                        <div id="home_venue_when">AT</div>
                        <div id="home_venue_time">1 PM to 3PM</div>
                        <!--<div id="home_venue_tod">in the morning</div>-->
                    </div>
                </div>
                <div id="home_venue_address_wrapper" class="col-12 col-md-4">
                    <div class="home_venue_item_bg">
                        <div id="home_venue_when"> 
                                LOCATION </div>
                        <div id="home_venue_address_line1">Airmeet</div>
                        <!--<div id="home_venue_address_line2">(Links will be posted 2 days before the talks)</div>-->
                    </div>
                </div>
            </div>
            
            
            
            
            <div id="page_home_chosen_container" class="row flex-column"  >
            <div class="sessions_page_list_header row">
                <div class="col-12">
                    Sessions For Upcoming Event
                </div>
            </div>
            
            <div class="row">                    

                <?php
                $tracks = get_current_cats(false);
                $chosen_post_ids = get_chosen_track_ids();
                $sessions_selection_done = sizeof($chosen_post_ids) > 0;
                $airmeet_links = get_airmeet_links();
                
                
                if ($sessions_selection_done) {
                    
                    $chosen_posts = new WP_Query(array('post__in' => $chosen_post_ids, 'nopaging' => true));   // BCB 2021 Virtual Dev

                    while ($chosen_posts->have_posts()) : $chosen_posts->the_post();

                        ?>

                        <?php
                        $post_cats = get_the_category();

                        foreach (get_the_category() as $c) {

                            $track_id = array_search($c->cat_ID, $tracks);

                            if ($track_id !== FALSE) {
                                break;
                            }
                        }
                        ?>

                        <div class="sessions_page_card_chosen col-12 col-md-6" data-track-id="<?php echo $track_id; ?>">
                            <div class="sessions_page_card_content container-fluid track_color_border_<?php echo $track_id; ?>">
                                <div class="row">
                                    <div class="sessions_page_card_avatar">
                                        <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_avatar(get_the_author_meta('ID'), 48) . '</a>'; ?>
                                    </div>
                                    <div class="sessions_page_card_right_column track_color_border_<?php echo $track_id ?> col">
                                        <div class="sessions_page_card_title">

                                            <?php
                                                $titlestr = get_the_title();
                                                $title_trimmed = false;
                                                if (strlen($titlestr) > 50) {
                                                    $titlestr = substr($titlestr, 0, 50)."...";
                                                    $title_trimmed = true;
                                                }
                                            ?>
                                            <a href="<?php echo get_permalink(); ?>" <?php if ($title_trimmed) {echo 'title="'.get_the_title().'"';} ?>>
                                                <?php echo $titlestr; ?>
                                            </a>
                                        </div>
                                        <div class="sessions_page_card_author">
                                            <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?>
                                        </div>
                                        <div class="sessions_page_card_bottomarea">

                                            <div class="sessions_page_card_comments_stats">
                                                <div class="sessions_page_card_comments_icon">
                                                    <img src="<?php echo get_bloginfo('template_url').'/images/icons-21.png' ?>" title="Comments" />
                                                </div>
                                                <div class="sessions_page_card_comments_count">
                                                    <?php comments_number('0', '1', '%'); ?>
                                                </div>
                                            </div>

                                            <div class="sessions_page_card_attendees_stats">
                                                <div class="sessions_page_card_attendees_icon">
                                                    <img src="<?php echo get_bloginfo('template_url').'/images/icons-20.png' ?>" title="Attendees" />
                                                </div>
                                                <div id="sessions_page_card_attendees_count_<?php echo get_the_ID();  ?>" class="sessions_page_card_attendees_count">
                                                    <?php echo attending_users_count(get_the_ID()) ?>
                                                </div>
                                            </div>

                                            <div class="sessions_page_card_attend_button" data-postid="<?php echo get_the_ID(); ?>">
                                                <?php echo get_my_attending_button(get_the_ID()); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    <?php endwhile; ?>
                
                    <div class="col-6">
                        <div class="airmeet_link_container">
                            Airmeet link - <a href="<?php echo $airmeet_links[0]; ?>">Session Slot 1</a>
                        </div>
                    </div>

                    <div class=" col-6">
                        <div class="airmeet_link_container">
                            Airmeet link - <a href="<?php echo $airmeet_links[1]; ?>">Session Slot 2</a>
                        </div>
                    </div>
                
                
                <?php } else { ?>
                
                
                    <div class="col-12">
                        <div id="page_home_session_unscheduled_msg">
                            Session topics will be decided 2 days before the event based on community interest. Feel free to register for Session Slots.
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="airmeet_link_container">
                            Airmeet link - <a href="<?php echo $airmeet_links[0]; ?>">Session Slot 1</a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="airmeet_link_container">
                            Airmeet link - <a href="<?php echo $airmeet_links[1]; ?>">Session Slot 2</a>
                        </div>
                    </div>
                
                
                <?php } ?>
            </div>

            
        </div>
            
       
            
            <div id="home_sharearea" class="row">
                <div class="col-12">
                    <strong>Spread the word :</strong>
                    <!-- Sharingbutton Facebook -->
                    <a class="resp-sharing-button__link"
                        href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fbarcampbangalore.com"
                        target="_blank" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z" />
                                    </svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton Twitter -->
                    <a class="resp-sharing-button__link"
                        href="https://twitter.com/intent/tweet/?text=<?php echo rawurlencode("I am attending Barcamp Bangalore Monsoon 2019 - you might find the topics discussed interesting. More info at " . get_permalink() . " #barcampblr @barcampbng") ?>"
                        target="_blank" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z" />
                                    </svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton LinkedIn -->
                    <a class="resp-sharing-button__link"
                        href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fbarcampbangalore.com&amp;title=I%20am%20attending%20Barcamp%20Bangalore%20Monsoon%202019%2C%20You%20too%20will%20find%20the%20topics%20discussed%20interesting.%20&amp;summary=I%20am%20attending%20Barcamp%20Bangalore%20Monsoon%202019%2C%20You%20too%20will%20find%20the%20topics%20discussed%20interesting.%20&amp;source=https%3A%2F%2Fbarcampbangalore.com"
                        target="_blank" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--small">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M6.5 21.5h-5v-13h5v13zM4 6.5C2.5 6.5 1.5 5.3 1.5 4s1-2.4 2.5-2.4c1.6 0 2.5 1 2.6 2.5 0 1.4-1 2.5-2.6 2.5zm11.5 6c-1 0-2 1-2 2v7h-5v-13h5V10s1.6-1.5 4-1.5c3 0 5 2.2 5 6.3v6.7h-5v-7c0-1-1-2-2-2z" />
                                    </svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton Reddit -->
                    <a class="resp-sharing-button__link"
                        href="https://reddit.com/submit/?url=https%3A%2F%2Fbarcampbangalore.com" target="_blank"
                        aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--reddit resp-sharing-button--small">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M24 11.5c0-1.65-1.35-3-3-3-.96 0-1.86.48-2.42 1.24-1.64-1-3.75-1.64-6.07-1.72.08-1.1.4-3.05 1.52-3.7.72-.4 1.73-.24 3 .5C17.2 6.3 18.46 7.5 20 7.5c1.65 0 3-1.35 3-3s-1.35-3-3-3c-1.38 0-2.54.94-2.88 2.22-1.43-.72-2.64-.8-3.6-.25-1.64.94-1.95 3.47-2 4.55-2.33.08-4.45.7-6.1 1.72C4.86 8.98 3.96 8.5 3 8.5c-1.65 0-3 1.35-3 3 0 1.32.84 2.44 2.05 2.84-.03.22-.05.44-.05.66 0 3.86 4.5 7 10 7s10-3.14 10-7c0-.22-.02-.44-.05-.66 1.2-.4 2.05-1.54 2.05-2.84zM2.3 13.37C1.5 13.07 1 12.35 1 11.5c0-1.1.9-2 2-2 .64 0 1.22.32 1.6.82-1.1.85-1.92 1.9-2.3 3.05zm3.7.13c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9.8 4.8c-1.08.63-2.42.96-3.8.96-1.4 0-2.74-.34-3.8-.95-.24-.13-.32-.44-.2-.68.15-.24.46-.32.7-.18 1.83 1.06 4.76 1.06 6.6 0 .23-.13.53-.05.67.2.14.23.06.54-.18.67zm.2-2.8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm5.7-2.13c-.38-1.16-1.2-2.2-2.3-3.05.38-.5.97-.82 1.6-.82 1.1 0 2 .9 2 2 0 .84-.53 1.57-1.3 1.87z" />
                                    </svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton WhatsApp -->
                    <a class="resp-sharing-button__link"
                        href="whatsapp://send?text=I%20am%20attending%20Barcamp%20Bangalore%20Monsoon%202019%2C%20You%20too%20will%20find%20the%20topics%20discussed%20interesting.%20%20https%3A%2F%2Fbarcampbangalore.com"
                        target="_blank" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--small">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z" />
                                    </svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton Telegram -->
                    <a class="resp-sharing-button__link"
                        href="https://telegram.me/share/url?text=I%20am%20attending%20Barcamp%20Bangalore%20Monsoon%202019%2C%20You%20too%20will%20find%20the%20topics%20discussed%20interesting.%20&amp;url=https%3A%2F%2Fbarcampbangalore.com"
                        target="_blank" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--telegram resp-sharing-button--small">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M.707 8.475C.275 8.64 0 9.508 0 9.508s.284.867.718 1.03l5.09 1.897 1.986 6.38a1.102 1.102 0 0 0 1.75.527l2.96-2.41a.405.405 0 0 1 .494-.013l5.34 3.87a1.1 1.1 0 0 0 1.046.135 1.1 1.1 0 0 0 .682-.803l3.91-18.795A1.102 1.102 0 0 0 22.5.075L.706 8.475z" />
                                    </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div id="page_home_sponsors_header" >
                Event Sponsors
            </div>
            <div id="page_home_sponsors_list" class="row">

                <div class="page_home_sponsors_type col-12 col-md-6">
                    <div class="page_home_sponsortype_header">
                        Venue Sponsor
                    </div>
                    <div class="page_home_sponsor">
                        <a target="_blank"
                            href="https://airmeet.com">
                            <div>
                                <img src="<?php echo get_bloginfo('template_url') . '/images/sponsors/airmeet-logo.svg' ?>" />
                            </div>
                            <div>Airmeet</div>
                        </a>
                    </div>
                </div>

                <div class="page_home_sponsors_type col-12 col-md-6">
                    <div class="page_home_sponsortype_header">
                        Friends of Barcamp
                    </div>
                    <div>
                        <div class="page_home_sponsor">
                            <a target="_blank" href="<?php echo get_permalink(get_page_by_path('about-janastu')); ?>">
                                <div>
                                    <img
                                        src="<?php echo get_bloginfo('template_url') . '/images/sponsors/janastu_logo.gif' ?>" />
                                </div>
                                <div>Janastu</div>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

        </div>
    </div>





    <?php get_footer();?>
