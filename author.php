<?php get_header(); ?>

<?php 
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));


$cat_buckets = array(
    "1691" => array(array(), array()),
    "1556" => array(array(), array()),
    "1458" => array(array(), array()),
    "1366" => array(array(), array()),
    "1224" => array(array(), array()),
    "1057" => array(array(), array()),
    "931" => array(array(), array()),
    "785" => array(array(), array()),
    "636" => array(array(), array()),
    "479" => array(array(), array()),
    "399" => array(array(), array()),
    "324" => array(array(), array()),
    "220" => array(array(), array()),
    "3" => array(array(), array()),
);
$cat_names = array(
    200  => array("1691", "BCB Spring 2018"),
    190  => array("1556", "BCB Spring 2016"),
    180  => array("1458", "BCB Monsoon 2015"),
    175  => array("1366", "BCBX AntHill"),
    170  => array("1224", "BCB Spring 2015"),
    160  => array("1057", "BCB Monsoon 2014"),
    150  => array("931", "BCB Spring 2014"),
    140  => array("785", "BCB Monsoon 2013"),
    130  => array("636", "BCB13"),
    120  => array("479", "BCB12"),
    110  => array("399", "BCB11"),
    100  => array("324", "BCB10"),
    90   => array("220", "BCB9"),
    80   => array("3", "BCB8")
);


?>
    
<div id="page_author_container">
    
    <div id="page_author_wrapper" class="d-flex flex-column container-fluid">
        <div class="row">
            <div class="col-2">
                <div id="page_author_avatar" class=""><?php echo get_avatar(get_the_author_meta('ID'), 150); ?></div>
            </div>
            <div class="col-10">
                <div class="single_page_box">
                    <div id="page_author_name" class="">User : <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?></div>
                    <div id="page_author_sincedate">Camper since <?php echo date("F, Y", strtotime($curauth->user_registered)); ?></div>
                </div>
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-2"></div>
            <div class="col-10">
                
                    <?php
// find presented sessions
                    while (have_posts()) : the_post();
                        $cat = get_the_category();
                        for ($i = 0; $i < count($cat); $i++) {
                            if (array_key_exists((string) $cat[$i]->cat_ID, $cat_buckets)) {
                                $cat_buckets[$cat[$i]->cat_ID][0][] = '<h2><a href="' . get_permalink() . '" >' . get_the_title() . '</a></h2>';
                            }
                        }
                    endwhile;
// Find sessions attended
                    $sql = "SELECT * FROM $wpdb->postmeta WHERE meta_value = '$curauth->user_login' AND meta_key = 'user_attending' order by meta_id desc";
                    $attending_sessions = $wpdb->get_results($sql);
                    foreach ($attending_sessions as $session) {
                        $post_row = get_post($session->post_id);
                        $cat = get_the_category($session->post_id);
                        for ($i = 0; $i < count($cat); $i++) {
                            if (array_key_exists((string) $cat[$i]->cat_ID, $cat_buckets)) {
                                $cat_buckets[$cat[$i]->cat_ID][1][] = '<h2><a href="' . get_permalink($session->post_id) . '" >' . $post_row->post_title . '</a></h2>';
                            }
                        }
                    }
// Now render the sessions
                    ?>

                    <?php
                    foreach ($cat_names as $bcb) {
                        if (count($cat_buckets[$bcb[0]][0]) > 0 || count($cat_buckets[$bcb[0]][1]) > 0) {
                            ?>
                            <div class="single_page_box">
                                <div class="authorpage_bcb_title">
                                    <?php echo $bcb[1]; // BCB Title  ?>
                                </div>
                            
                            <div class="row">
                                <?php
                                
                                if (count($cat_buckets[$bcb[0]][1]) > 0) {
                                    ?>
                                    <div class="col-sm-6 authorpage_sessions_area">
                                        <div class="authorpage_sesstions_type">
                                            Sessions Attended
                                        </div>
                                        <?php 
                                            foreach ($cat_buckets[$bcb[0]][1] as $sess) {
                                                
                                                echo '<div class="authorpage_session_item">'.$sess.'</div>';
                                                
                                            }
                                        ?>
                                    </div>
                                <?php    
                                }
                                
                                
                                
                                if (count($cat_buckets[$bcb[0]][0]) > 0) {
                                    ?>
                                    <div class="col-sm-6 authorpage_sessions_area">
                                        <div class="authorpage_sesstions_type">
                                            Sessions Proposed/Presented
                                        </div>
                                        <?php 
                                            foreach ($cat_buckets[$bcb[0]][0] as $sess) {
                                                
                                                echo '<div class="authorpage_session_item">'.$sess.'</div>';
                                                
                                            }
                                        ?>
                                    </div>
                                <?php    
                                }
                                
                                
                                ?>
                                </div>
                            </div>

                            <?php
                        }
                    }
                    ?>

            </div>
            
        </div>
        
    </div>
    
    
</div>
    
    
<?php get_footer(); ?>
    
