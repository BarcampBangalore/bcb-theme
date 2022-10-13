<?php get_header(); ?>


<div class="container">
  <div class="row">
    <div class="col-12">
        <div class="display-4 fitted-title text-center p-3">
            SIX minute brew
        </div>

        <div class="row">
            <div id="page_techlash_description" class="col">
                <p><font size="3">Showcase your tech project in the latest edition of Barcamp Bangalore Techlash.</font></p><font size="3">
                <p>
                    Talk about your latest tech smartness in front of hundreds of techies.</p>
                <p style="font-weight: bold; font-size: 20px;">6 Min per session and a total of 10 speakers.</p>

                </font>
                <p>
                    <font size="3">
                        PS: These ideas will undergo a filtering process. Remember to put in your phone number in the right field while you adding your session, we might require some clarifications from you.
                    </font>
                </p>

            </div>
        </div>

        <div class="row">
            <h2 id="page_techlash_sessionheading" class="col">Techlash sessions for BCB 2022</h2>
        </div>

        <div id="page_techlash_post_parent" class="row">
            <?php
            $args = 'cat=1882';
            query_posts($args);
            if ( have_posts() ) :
              while (have_posts()) : the_post();
                  ?>

                <div class="col-md-6 sessions-page-card" data-track-id="<?php echo $track_id; ?>">
                    <div class="card archive-session-card p-3 mb-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon"><?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_avatar(get_the_author_meta('ID'), 64) . '</a>'; ?></div>
                                <div class="ms-2 c-details">
                                    <h6 class="mb-0"><?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('display_name') . '</a>'; ?></h6>
                                </div>
                            </div>
                            <!-- <div class="badge"> <span>Design</span> </div> -->
                        </div>
                        <div class="mt-2">
                            <h5 class="heading"><a href="<?php echo get_permalink(); ?>" title=""><?php echo get_the_title(); ?></a></h5>
                            <div class="mt-2">
                                <div class="mt-2">
                                <span class="card-meta"><?php echo attending_users_count(get_the_ID()) ?> interested</span>,
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

