<?php get_header(); ?>
    
    

<div id="page_about_container" class="d-flex justify-content-center">
    
    <div id="page_about_wrapper" class="flex-column ">
        <?php the_post(); ?>
        <div id="page_about_title" class="d-flex">
            <?php echo get_the_title(); ?>
        </div>

        <div id="page_about_content" class="d-flex flex-column">
            
            <?php the_content(); ?>
        </div>
    </div>
    
</div>
        
        
    
    
<?php get_footer(); ?>
    
