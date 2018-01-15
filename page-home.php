<?php get_header(); ?>
    
    

<div id="page_home_container" class="d-flex flex-column align-items-center justify-content-center text-center h-md-100">
    <div id="page_home_wrapper" class="col">
        <div id="page_home_namaskara">
            Namaskara
        </div>
        <div id="page_home_blr_logo">
            <img src="<?php bloginfo('template_url'); ?>/images/Bengaluru-01.png" />
        </div>
    </div>
    <div id="page_home_sponsors_container">
        <div id="page_home_sponsors_header">
            Event Sponsors
        </div>
        <div id="page_home_sponsors_list" class="row">
            
            <div class="page_home_sponsors_type col-12 col-md-4">
                <div class="page_home_sponsortype_header">
                    Venue Sponsor
                </div>
                <div class="page_home_sponsor">
                    <a target="_blank" href="https://www.dsu.edu.in/">
                        <div>
                            <img src="<?php echo get_bloginfo('template_url').'/images/sponsors/dsu2.png' ?>"/>
                        </div>
                        <div>Dayananda Sagar University</div>
                    </a>
                </div>
            </div>
            
            <div class="page_home_sponsors_type col-6 col-md-4">
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
            </div>
            
            <div class="page_home_sponsors_type col-6 col-md-4">
                <div class="page_home_sponsortype_header">
                    Friends of Barcamp
                </div>
                <div>
                    <div class="page_home_sponsor">
                        <a target="_blank" href="<?php echo get_permalink( get_page_by_path('about-wandx'));  ?>">
                            <div>
                                <img src="<?php echo get_bloginfo('template_url').'/images/sponsors/WandX_logo.jpg' ?>"/>
                            </div>
                            <div>WandX</div>
                        </a>
                    </div>
                    <div class="page_home_sponsor">
                        <a target="_blank" href="<?php echo get_permalink( get_page_by_path('about-janastu'));  ?>">
                            <div>
                                <img src="<?php echo get_bloginfo('template_url').'/images/sponsors/janastu_logo.gif' ?>"/>
                            </div>
                            <div>Janastu</div>
                        </a>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    
</div>

        
        
    
    
<?php get_footer(); ?>
    
