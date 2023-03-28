<?php get_header(); ?>


<div class="container">
  <div class="row">
    <div class="col-12">
        <div class="display-4 fitted-title text-center p-3">
            SIX minute brew
        </div>

        <div class="row">
            <div id="page_techlash_description" class="col">
                <p>Showcase your tech project in the latest edition of Barcamp Bangalore Techlash.</p>
                <p>Talk about your latest tech smartness in front of hundreds of techies.</p>
                <p style="font-weight: bold; font-size: 20px;">6 Min per session and a total of 10 speakers.</p>

                <p>PS: These ideas will undergo a filtering process. Remember to put in your phone number in the right field while you adding your session, we might require some clarifications from you.</p>

            </div>
        </div>

        <div class="row">
            <h2 id="page_techlash_sessionheading" class="col">Techlash sessions for BCB 2023</h2>
        </div>

        <div id="page_techlash_post_parent" class="row">
            <?php
            $args = 'cat=1882';
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

