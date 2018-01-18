<?php get_header(); ?>
    
    
<div id="page_techlash_contaiiner">
    <div id="page_techlash_wrapper" class="d-flex flex-column">
        <div class="row">
            <div id="page_techlash_header" class="col">
                SIX minute brew
            </div>
        </div>
        
        <div class="row">
            <div id="page_techlash_description" class="col">
                <p><font size="3">Represent your company in the latest edition of Barcamp Bangalore Techlash.</font></p><font size="3">
                <p>
                    Talk about your latest tech smartness in front of hundreds of techies.</p>
                <p style="font-weight: bold; font-size: 20px;">6 Min per session and a total of 10 speakers.</p>
                <!-- 
                <p>To add your techlash session <a href="https://barcampbangalore.com/bcb/add-a-session"> click here.</a></p><br><br>
                -->
                </font>
                <p>
                    <font size="3">
                        PS: These ideas will undergo a filtering process. Remember to put in your phone number in the right field while you adding your session, we might require some clarifications from you.
                    </font>
                </p>

            </div>
        </div>

        <div class="row">
            <h2 id="page_techlash_sessionheading" class="col">Techlash sessions for BCB Spring 2018</h2>
        </div>
        
        <div id="page_techlash_post_parent" class="row">
            <?php
            $args = 'cat=1706';
            query_posts($args);
            while (have_posts()) : the_post();
                ?>
            
            <div class="col-12 col-md-6">
                <div id="page_techlash_card" class="">
                    <div class="page_techlash_postname">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="page_techlash_author">
                        <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?>
                    </div>
                </div>
            </div>


            <?php endwhile; ?>

        </div>


        
        
    </div>
</div>
    
    
<?php get_footer(); ?>
    
