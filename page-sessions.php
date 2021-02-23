<?php get_header(); ?>
    
    

<div id="page_sessions_container" class="d-flex justify-content-center">
    
    <div id="page_sessions_wrapper" class="d-flex flex-row-reverse flex-md-column">
        
        
        
        <script type="text/javascript">
            
            
            jQuery(function($) {
  
                $(".sessions_page_card_attend_button").on("click", ".neo_attend_button", function() {
                    
                    var card = $(this);
                    card.html('<img src="<?php bloginfo('template_url') ?>/images/ajaxloader.gif" />');
                    $.post("<?php echo admin_url('admin-ajax.php?' . http_build_query(array("action" => "toggle_attend"))); ?>", {post_id: $(this).data("postid")}, function(data) {
                        if (data.status != 'OK')
                        {
                            var r = confirm(data.status);
                            if (r == true)
                            {
                                window.location.href = "<?php echo wp_login_url(get_permalink()); ?>";
                            }
                            card.parent().html(data.button_text);
                        }
                        else
                        {
                            $("#sessions_page_card_attendees_count_" + card.data("postid")).html(data.attendees_count );
                            card.parent().html(data.button_text);
                        }
                    }, 'json');
                });
                
//                $(".sessions_page_track_button").hover(function(){
//                    
//                    $(this).animate({width: '200px'}, 300);
//                    $(this).find(".sessions_page_track_icon_name").show(300);
//                
//                }, function(){
//                    
//                    $(this).animate({width: '50px'}, 300);
//                    $(this).find(".sessions_page_track_icon_name").hide(300);
//                    
//                });
                
            });
            
            
            
            
            
            function showOnly(trackid){
            
                trackid = "" + trackid;
            
                console.log(trackid);
                var $ = jQuery.noConflict();
                var allSessionCards = document.getElementsByClassName("sessions_page_card");
                console.log("cards - " + allSessionCards.length)
                var lastSelected = false;
                if(document.lastselected === trackid){
                    lastSelected = true;
                    document.lastselected = 0;
                }
                else{
                    document.lastselected = trackid;
                }
                var showCards = new Array();
                for (var i = 0; i < allSessionCards.length; i++) {
                    var sessionCard = allSessionCards[i];
                    //console.log(sessionCard.getAttribute("data-track-id"));
                    $(sessionCard).fadeOut(500, function () {
                        $(this).css({display:"none"});});
                    if(lastSelected === true){
                        //  setTimeout(function(sessionCard){$(sessionCard).fadeIn(1500, function (sessionCard) {
                        //     $(sessionCard).css({display:""});
                        // });}, 1000);
                        showCards.push(sessionCard);
                    }
                    else{
                        if(sessionCard.getAttribute("data-track-id") !== trackid){
                            // $(sessionCard).fadeOut(500, function () {
                            //     $(this).css({display:"none"});
                            // });
                            // sessionCard.style.display='none' ;
                        }
                        else{
                            // setTimeout(function(sessionCard){$(sessionCard).fadeIn(1500, function (sessionCard) {
                            //     $(sessionCard).css({display:""});
                            // });}, 1000);
                            showCards.push(sessionCard);
                        }
                    }
                }
                
                console.log("showCards - " + showCards.length)
                if(showCards.length > 0 ){
                    setTimeout(function(){
                            for(var i =0; i < showCards.length; i++){
                                var sessionCard = showCards[i];
                                $(sessionCard).fadeIn(1000, function () {
                                    $(this).css({display:""});});
                            }
                    }, 400);
                }
                
                
                
                var  showButton = new Array();
                var allButtons = document.getElementsByClassName("sessions_page_track_button");
                for (var i = 0; i < allButtons.length; i++) {
                    var button = allButtons[i];
                    $(button).fadeIn(500, function () {
                        $(this).css({opacity:0.3});
                    });
                    if(lastSelected === true){
                        // setTimeout(function(button){$(button).fadeIn(1500, function (button) {
                        //     $(button).css({opacity:1});
                        // });}, 1000);
                        showButton.push(button);
                    }
                    else{
                        if(button.getAttribute("data-track-id") !== trackid){
                            $(button).fadeIn(500, function () {
                                $(this).css({opacity:0.3});
                            });
                        }
                        else{
                            // setTimeout(function(button){$(button).fadeIn(1500, function (button) {
                            //     $(button).css({opacity:1});
                            // });}, 1000);
                            showButton.push(button);
                        }
                    }
                }
                if(showButton.length > 0 ){
                    setTimeout(function(){
                            for(var i =0; i < showButton.length; i++){
                                var button = showButton[i];
                                $(button).fadeIn(500, function () {
                                    $(this).css({opacity:1});});
                            }
                    }, 400);
                }
            }
        </script>
        
        <?php
            
            $tracks = get_current_cats(false);
            
            $track_counter = 0;
            
            
        ?>

        
        
        <div id="sessions_page_track_buttons_container"  class="row flex-column flex-md-row">
            <div class="sessions_page_track_button col-md" onclick="showOnly(<?php echo $track_counter; ?>)" data-tooltip="Technology" data-track-id="<?php echo $track_counter++; ?>">
                <img src="<?php echo get_bloginfo('template_url').'/images/ICONS/web-icons-19.png' ?>" />
                <div class="sessions_page_track_icon_name">Technology</div>
            </div>
            <div class="sessions_page_track_button col-md" onclick="showOnly(<?php echo $track_counter; ?>)" data-tooltip="Design" data-track-id="<?php echo $track_counter++; ?>">
                <img src="<?php echo get_bloginfo('template_url').'/images/ICONS/web-icons-15.png' ?>" />
                <div class="sessions_page_track_icon_name">Design</div>
            </div>
            <div class="sessions_page_track_button col-md" onclick="showOnly(<?php echo $track_counter; ?>)" data-tooltip="Mobile Web" data-track-id="<?php echo $track_counter++; ?>">
                <img src="<?php echo get_bloginfo('template_url').'/images/ICONS/web-icons-16.png' ?>" />
                <div class="sessions_page_track_icon_name">Mobile & Web</div>
            </div>
            <div class="sessions_page_track_button col-md" onclick="showOnly(<?php echo $track_counter; ?>)" data-tooltip="Bangalore & Lifestyle" data-track-id="<?php echo $track_counter++; ?>">
                <img class="" src="<?php echo get_bloginfo('template_url').'/images/ICONS/web-icons-13.png' ?>" />
                <div class="sessions_page_track_icon_name">Bangalore & Lifestyle</div>
            </div>
            <div class="sessions_page_track_button col-md" onclick="showOnly(<?php echo $track_counter; ?>)" data-tooltip="Scaling  Infrastructure" data-track-id="<?php echo $track_counter++; ?>">
                <img src="<?php echo get_bloginfo('template_url').'/images/ICONS/web-icons-14.png' ?>" />
                <div class="sessions_page_track_icon_name">Scaling & Infrastructure</div>
            </div>
            <div class="sessions_page_track_button col-md" onclick="showOnly(<?php echo $track_counter; ?>)" data-tooltip="Entrepreneurship" data-track-id="<?php echo $track_counter++; ?>">
                <img src="<?php echo get_bloginfo('template_url').'/images/ICONS/web-icons-17.png' ?>" />
                <div class="sessions_page_track_icon_name">Entrepreneurship</div>
            </div>
            <div class="sessions_page_track_button col-md" onclick="showOnly(<?php echo $track_counter; ?>)" data-tooltip="Rest of the World" data-track-id="<?php echo $track_counter++; ?>">
                <img src="<?php echo get_bloginfo('template_url').'/images/ICONS/web-icons-18.png' ?>" />
                <div class="sessions_page_track_icon_name">Rest of the world</div>
            </div>
            
            
        </div>

        
        
        
        
        
        
        <div id="sessions_page_list_container" >
            <div class="">
                <div class="row">                    

                    <?php
                    $sessionsloop = new WP_Query(array('cat' => get_current_cats(true), 'nopaging' => true));  
                    
                    
                    if (!$sessionsloop->have_posts()) {
                        echo '<div class="sessioncard_no_session_message">No sessions in this track yet :)</div>';
                    }
                    
                    while ($sessionsloop->have_posts()) : $sessionsloop->the_post();
                    
                        ?>

                        <?php
                        
                        // Do not show chosen or archived posts
                        
                        if (array_search(get_the_ID(), array_merge(get_chosen_track_ids(), get_archived_track_ids())) !== false) {
                            
                            continue;
                        }
                        
                        
                        $post_cats = get_the_category();
                        
                        foreach (get_the_category() as $c) {
                            
                            $track_id = array_search($c->cat_ID, $tracks);
                            
                            if ($track_id !== FALSE) {
                                break;
                            }
                        }
                        ?>

                        <div class="sessions_page_card col-12 col-md-6" data-track-id="<?php echo $track_id; ?>">
                            <div class="sessions_page_card_content container-fluid track_color_border_<?php echo $track_id; ?>">
                                <div class="row">
                                    <div class="sessions_page_card_avatar">
                                        <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_avatar(get_the_author_meta('ID'), 48) . '</a>'; ?>
                                    </div>
                                    <div class="sessions_page_card_right_column track_color_border_<?php echo $track_id ?> col">
                                        <div class="sessions_page_card_title">

                                            <?php
                                                $titlestr = get_the_title();
                                                $title_trimmed = false;
                                                if (strlen($titlestr) > 50) {
                                                    $titlestr = substr($titlestr, 0, 50)."...";
                                                    $title_trimmed = true;
                                                }
                                            ?>
                                            <a href="<?php echo get_permalink(); ?>" <?php if ($title_trimmed) {echo 'title="'.get_the_title().'"';} ?>>
                                                <?php echo $titlestr; ?>
                                            </a>
                                        </div>
                                        <div class="sessions_page_card_author">
                                            <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?>
                                        </div>
                                        <div class="sessions_page_card_bottomarea">

                                            <div class="sessions_page_card_comments_stats">
                                                <div class="sessions_page_card_comments_icon">
                                                    <img src="<?php echo get_bloginfo('template_url').'/images/icons-21.png' ?>" title="Comments" />
                                                </div>
                                                <div class="sessions_page_card_comments_count">
                                                    <?php comments_number('0', '1', '%'); ?>
                                                </div>
                                            </div>

                                            <div class="sessions_page_card_attendees_stats">
                                                <div class="sessions_page_card_attendees_icon">
                                                    <img src="<?php echo get_bloginfo('template_url').'/images/icons-20.png' ?>" title="Attendees" />
                                                </div>
                                                <div id="sessions_page_card_attendees_count_<?php echo get_the_ID();  ?>" class="sessions_page_card_attendees_count">
                                                    <?php echo attending_users_count(get_the_ID()) ?>
                                                </div>
                                            </div>

                                            <div class="sessions_page_card_attend_button" data-postid="<?php echo get_the_ID(); ?>">
                                                <?php echo get_my_attending_button(get_the_ID()); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    <?php endwhile; ?>
                </div>
            </div>

        </div>

        
        
        
        
    </div>
    
</div>
        
        
    
    
<?php get_footer(); ?>
    
