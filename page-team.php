<?php get_header(); ?>
    
    

<div id="page_team_container" class="d-flex justify-content-center">
    
    <div id="page_team_wrapper" class="flex-column ">
        <?php the_post(); ?>
        <div id="page_team_title" class="d-flex fitted-title">
            <?php echo get_the_title(); ?>
        </div>

        <div id="page_team_content" class="">
            <div id="page_team_intro">
                Meet the planners behind Barcamp Bangalore, and see behind the scenes action at <a href="https://planning.barcampbangalore.com/">BCB Planners Blog</a>.
            </div>
            
            <div id="page_team_memberlist" class="row">
                
                <div class="page_team_membercard col-6 col-md-3">
                    <div class="page_team_member_avatar">
                        <img src="<?php echo get_bloginfo('template_url').'/images/team/aditya.png' ?>" />
                    </div>
                    <div class="page_team_member_name">Aditya Reddy</div>
                    <div class="page_team_member_link"><a href="https://twitter.com/thetallpants">@thetallpants</a></div>
                </div>
                
                <div class="page_team_membercard col-6 col-md-3">
                    <div class="page_team_member_avatar">
                        <img src="<?php echo get_bloginfo('template_url').'/images/team/aman.jpg' ?>" />
                    </div>
                    <div class="page_team_member_name">Aman Manglik</div>
                    <div class="page_team_member_link"><a href="https://twitter.com/amanmanglik">@amanmanglik</a></div>
                </div>
                
                <div class="page_team_membercard col-6 col-md-3">
                    <div class="page_team_member_avatar">
                        <img src="<?php echo get_bloginfo('template_url').'/images/team/arunteja.jpg' ?>" />
                    </div>
                    <div class="page_team_member_name">Arun Teja</div>
                    <div class="page_team_member_link"><a href="https://twitter.com/aruntejagod">@aruntejagod</a></div>
                </div>
                
                <div class="page_team_membercard col-6 col-md-3">
                    <div class="page_team_member_avatar">
                        <img src="<?php echo get_bloginfo('template_url').'/images/team/sathya.jpg' ?>" />
                    </div>
                    <div class="page_team_member_name">Sathyajith Bhat</div>
                    <div class="page_team_member_link"><a href="https://twitter.com/SathyaBhat">@SathyaBhat</a></div>
                </div>
                
                <div class="page_team_membercard col-6 col-md-3">
                    <div class="page_team_member_avatar">
                        <img src="<?php echo get_bloginfo('template_url').'/images/team/saurabh.jpg' ?>" />
                    </div>
                    <div class="page_team_member_name">Saurabh Minni</div>
                    <div class="page_team_member_link"><a href="https://twitter.com/the100rabh">@the100rabh</a></div>
                </div>
                
                <div class="page_team_membercard col-6 col-md-3">
                    <div class="page_team_member_avatar">
                        <img src="<?php echo get_bloginfo('template_url').'/images/team/fossil.jpg' ?>" />
                    </div>
                    <div class="page_team_member_name">Varun</div>
                    <div class="page_team_member_link"><a href="https://twitter.com/fossiloflife">@fossiloflife</a></div>
                </div>
                
                <div class="page_team_membercard col-6 col-md-3">
                    <div class="page_team_member_avatar">
                        <img src="<?php echo get_bloginfo('template_url').'/images/team/vivek.jpg' ?>" />
                    </div>
                    <div class="page_team_member_name">Vivek</div>
                    <div class="page_team_member_link"><a href="https://twitter.com/ivivekkm">@ivivekkm</a></div>
                </div>
                
            </div>
            
            
            
        </div>
    </div>
    
</div>
        
        
    
    
<?php get_footer(); ?>
    
