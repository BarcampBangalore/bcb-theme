<?php get_header(); ?>


<div class="container">
  <div class="row">
    <div class="col-12">
        <div class="display-4 fitted-title text-center p-3">
            SIX minute brew
        </div>

        <div class="row">
            <div id="page_techlash_description" class="col">
                <p>Are you an innovator looking to showcase your tech or product to a diverse and enthusiastic audience? 
                Look no further than our Techlash Showdown at Barcamp! This session is all about giving participants the opportunity to present their latest and greatest tech or product innovations in a 6-minute time limit.
                
                <p>This session is open to anyone who has a product they would like to demonstrate. Whether you're an entrepreneur, inventor, or hobbyist, this is your chance to showcase your innovation to an engaged and supportive audience.</p>

                <p>Simply <a href="how-to-register">register</a> for Barcamp and <a href="add-a-session">submit a session</a> under the "Techlash" category. 
                There are a limited number of spots available, so sign up early to ensure your spot.</p>

            </div>
        </div>

        <div class="row">
            <h2 id="page_techlash_sessionheading" class="col">Techlash sessions for BCB 2023</h2>
        </div>

        <div id="page_techlash_post_parent" class="row">
            <?php
            $args = 'cat=1929';
            query_posts($args);
            if ( have_posts() ) :
              while (have_posts()) : the_post();
                  ?>

                        <div class="col-xs-12 col-sm-6 col-md-4 mb-3">
                            <div class="card shadow-sm session-card">
                                <div class="card-body text-center">
                                    <p><?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_avatar(get_the_author_meta('ID'), 64) . '</a>'; ?></p>
                                    <p class="card-title"><?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('display_name') . '</a>'; ?></p>
                                    <h4 class="card-text"><a href="<?php echo get_permalink(); ?>" title=""><?php echo get_the_title(); ?></a></h4>
                                    <div class="mt-2">
                                        <div class="mt-2">
                                        <span class="card-meta"><?php echo attending_users_count(get_the_ID()) ?> attendees</span>,
                                        <span class="card-meta"><?php comments_number('0', '1', '%');?> comments</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
              endwhile;
            else :
              ?>
              <div class="col-12">Sorry no techlash session has been posted yet. <a href="<?php echo home_url() ?>/add-a-session">Showcase your project?</a></div>
              <?php
            endif;
          ?>

        </div>




    </div>
  </div>
</div>


<?php get_footer(); ?>
