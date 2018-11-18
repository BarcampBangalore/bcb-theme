<?php get_header(); ?>



<div id="page_home_container" class="d-flex flex-column align-items-center justify-content-center text-center h-md-100">
    <div id="page_home_wrapper" class="col">
        <div id="page_home_namaskara">
            Namaskara
        </div>
        <div id="page_home_blr_logo">
            <img src="<?php bloginfo('template_url'); ?>/images/Bengaluru-01.png" />
        </div>
    <div id="page_home_sponsors_container">
        <div id="page_home_sponsors_header">
            Barcamp Bangalore is back
        </div>

        <div id="home_venue_details_wrapper" class="row">
            <div id="home_venue_date_wrapper" class="col-12 col-md-4">
                <div id="venue_when">ON</div>
                <div id="venue_date">Saturday </div>
                <div id="venue_year">2nd Feb 2019</div>
            </div>
            <div id="home_venue_time_wrapper" class="col-12 col-md-4">
                <div id="venue_when">AT</div>
                <div id="venue_time">8:00</div>
                <div id="venue_tod">in the morning</div>
            </div>
            <div id="home_venue_address_wrapper" class="col-12 col-md-4">
                <div id="venue_when"> LOCATION: </div>
                <div id="venue_address_line1">Dayanand Sagar University</div>
                <div id="venue_address_line2">Kudlu Gate, Bangalore <strong>(Not Kumarswamy Layout)</strong></div>
            </div>
        </div>

        <div id="page_home_sponsors_header">
            Event Sponsors
        </div>
        <div id="page_home_sponsors_list" class="row">

            <div class="page_home_sponsors_type col-12 col-md-4">
                <div class="page_home_sponsortype_header">
                    Venue Sponsor
                </div>
                <div class="page_home_sponsor">
                    <a target="_blank" href="<?php echo get_permalink( get_page_by_path('about-dayanand-sagar-university'));  ?>">
                        <div>
                            <img src="<?php echo get_bloginfo('template_url').'/images/sponsors/dsu2.png' ?>"/>
                        </div>
                        <div>Dayananda Sagar University</div>
                    </a>
                </div>
            </div>

            <!-- <div class="page_home_sponsors_type col-6 col-md-4">
                <div class="page_home_sponsortype_header">
                    Gold Sponsor
                </div>
                <div id="sponsor_intuit" class="page_home_sponsor">
                    <a target="_blank" href="<?php echo get_permalink( get_page_by_path('about-intuit'));  ?>">
                        <div>
                            <img src="<?php echo get_bloginfo('template_url').'/images/sponsors/Intuit.JPG' ?>"/>
                        </div>
                        <div>Intuit</div>
                    </a>
                </div>
            </div> -->

            <div class="page_home_sponsors_type col-6 col-md-4">
                <div class="page_home_sponsortype_header">
                    Friends of Barcamp
                </div>
                <div>
                    <!-- <div class="page_home_sponsor">
                        <a target="_blank" href="<?php echo get_permalink( get_page_by_path('about-wandx'));  ?>">
                            <div>
                                <img src="<?php echo get_bloginfo('template_url').'/images/sponsors/WandX_logo.jpg' ?>"/>
                            </div>
                            <div>WandX</div>
                        </a>
                    </div> -->
                    <div class="page_home_sponsor">
                        <a target="_blank" href="<?php echo get_permalink( get_page_by_path('about-janastu'));  ?>">
                            <div>
                                <img src="<?php echo get_bloginfo('template_url').'/images/sponsors/janastu_logo.gif' ?>"/>
                            </div>
                            <div>Janastu</div>
                        </a>
                    </div>
                    <!-- <div class="page_home_sponsor">
                        <a target="_blank" href="<?php echo get_permalink( get_page_by_path('about-tinkerform'));  ?>">
                            <div>
                                <img src="<?php echo get_bloginfo('template_url').'/images/sponsors/Tinkerform-logo.png' ?>"/>
                            </div>
                            <div>Tinkerform</div>
                        </a>
                    </div> -->
                </div>
            </div>


        </div>

</div>





<?php get_footer(); ?>
