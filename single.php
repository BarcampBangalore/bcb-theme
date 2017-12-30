<?php get_header(); ?>
<?php the_post(); ?>
    
    
<div id="page_single_container" class="">
    
    <script type="text/javascript">
    
        var $ = jQuery.noConflict();
        $(function(){
				
        	
            $("#single_page_attend_area").on("click", ".neo_attend_button", function(){
                
                var card = $(this);
                
                card.html('<img src="<?php bloginfo('template_url') ?>/images/ajaxloader.gif" />');
                
                $.post("<?php echo admin_url('admin-ajax.php?' . http_build_query(array("action" => "toggle_attend"))); ?>", {post_id: <?php the_ID(); ?> }, function(data){
                    
                    if(data.status != 'OK')
                    {
                        var r = confirm(data.status);
                        if (r == true)
                            {
                                window.location.href="<?php echo wp_login_url( get_permalink() ); ?>";
                            }
                        card.parent().html(data.button_text); 
                    }
                    else
                    {
                        
                        $("#single_page_attendees_count").html(data.attendees_count + " Attending");
                        $("#single_page_attendees_list").html(data.attendees_list);
                        card.parent().html(data.button_text); 
                    }
                }, 'json'); 
            });
            
            
        });
        
    </script>
    
    
    <div id="page_single_wrapper" class="d-flex flex-column container-fluid">
        <div class="row align-items-stretch">
            <div id="single_page_avatar_container" class="col-2">
                
                    <div id="single_page_avatar" class=""><?php echo get_avatar( get_the_author_meta('ID'), 96 ); ?></div>
                    <div id="single_page_attend_area" class="sessionpage_attend d-md-none">

                        <?php echo get_my_attending_button(get_the_ID());  ?>

                    </div>
                    
            </div>
            <div class="col-10">
                
                <div id="single_page_header" class="d-flex align-items-stretch">
                    <div class="col">
                        <div class="single_page_box">
                            <div id="single_page_title"><?php the_title(); ?></div>
                            <div id="single_page_author" class="">By : <?php echo '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'">'.get_the_author_meta('user_nicename').'</a>'; ?></div>
                        </div>
                    </div>
                    <div id="single_page_attend_area" class="sessionpage_attend d-none d-md-block">

                        <?php echo get_my_attending_button(get_the_ID());  ?>

                    </div>
                </div>
                
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-2 d-none d-md-block"></div>
            <div class="col">
                <div class="container-fluid">
                    <div class="row">
                        <div id="single_page_description" class="col">
                            <div class="single_page_box">
                                <?php the_content(); ?>
                                <div>
                                    <?php edit_post_link("Edit Session"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row align-items-stretch">
                        <div class="col-12 col-md-6">
                            <div class="single_page_box">
                                <div id="single_page_attendees_header">
                                    <img id="single_page_attendees_icon" src="<?php echo get_bloginfo('template_url').'/images/icons-20.png' ?>">
                                    <span id="single_page_attendees_count"><?php echo attending_users_count(get_the_ID()) ?> Attending</span>
                                </div>
                                <div id="single_page_attendees_list">
                                    <?php   echo get_attending_users_links(get_the_ID(), "", "&bull;");  ?>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-md-6">
                            <div class="single_page_box">

                                <div id="single_page_tags_header">
                                    <img id="single_page_tags_icon" src="<?php echo get_bloginfo('template_url').'/images/icons-23.png' ?>">
                                    Tags
                                </div>
                                <div id="single_page_tags_list">
                                    <?php the_tags("", " | ", ""); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div id="single_page_comments_area" class="col">
                            <div class="single_page_box">
                                <div id="sessionpage_commentsarea">
                                    <?php comments_template(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
        
    </div>
    
    
</div>
    
    
<?php get_footer(); ?>
    
