<?php get_header(); ?>


<script type="text/javascript">
    
    bcb_page_name = "search";
    
    
</script>

<div id="page_search_container" class="d-flex justify-content-center">

    <div id="page_search_wrapper" class="flex-column ">

        <div id="page_search_title" class="d-flex">
            <span id="page_search_title_prefix">Search : </span> <?php echo get_search_query(); ?>
        </div>

        <div id="page_search_content" class="d-flex flex-column">
            <?php if (have_posts()) : ?>
                <ul>
                    <?php while (have_posts()) : the_post(); ?>
                        <li  class="search_result_item single_page_box">
                            <h2><a  class="search_result_item_title"  href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
                            <div class="search_result_item_details">Tags: <?php the_tags("", " | ", ""); ?> </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p id="tagpage_noresultmsg">Sorry, no results found for this query.</p>
            <?php endif; ?>
        </div>
    </div>

</div>



<?php get_footer(); ?>
    
