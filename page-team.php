<?php get_header(); ?>



<div class="container">
  <div class="row">
    <div class="col-12">
        <?php the_post(); ?>
        <div class="display-4 fitted-title text-center p-3">
            <?php echo get_the_title(); ?>
        </div>

        <div id="page_team_content" class="text-center">
            <div id="page_team_intro" >
                Meet the planners behind Barcamp Bangalore, and see behind the scenes action at <a href="https://planning.barcampbangalore.com/">BCB Planners Blog</a>.
            </div>

            <div id="page_team_memberlist" class="row">

                <div class="page_team_membercard col-6 col-md-3">
                    <div class="page_team_member_avatar">
                        <img src="<?php echo get_bloginfo('template_url').'/images/team/aman.jpg' ?>" />
                    </div>
                    <div class="page_team_member_name">Aman Manglik</div>
                    <div class="page_team_member_link"><a href="https://twitter.com/amanmanglik">@amanmanglik</a></div>
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
            </div>
        </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
