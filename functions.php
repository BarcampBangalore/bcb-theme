<?php

show_admin_bar(false);

function neobcb21_enqueue_scripts()
{

    wp_enqueue_script("jquery");
    wp_enqueue_script("fittext", get_bloginfo('template_url') . "/scripts/FitText/jquery.fittext.js");

    wp_enqueue_script("my_script", get_bloginfo('template_url') . "/scripts/script.js");

    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css');
//    wp_enqueue_style('font-awesome', get_bloginfo('template_url') . "/font-awesome-4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('font-awesome', get_bloginfo('template_url') . "/fontawesome-free-5.15.2-web/css/all.css");
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lato');

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'neobcb21_enqueue_scripts');

// register menu

function register_my_menus()
{

    register_nav_menu('menu_part1', "Menu Part 1");
    register_nav_menu('menu_part2', "Menu Part 2");
    register_nav_menu('menu_part3', "Menu Part 3");

}
add_action('after_setup_theme', 'register_my_menus');

function mytheme_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;

    ?>
    <li <?php comment_class();?> id="li-comment-<?php comment_ID()?>">
        <div id="comment-<?php comment_ID();?>" class="comment-body">
            <?php echo get_avatar($comment->comment_author_email, 48); ?>
            <div class="comment-body-inner">
                <div class="comment-author vcard">


                    <cite class="fn"><a href="<?php echo get_author_posts_url(get_user_by('email', get_comment_author_email())->ID); ?>"><?php echo get_user_by('email', get_comment_author_email())->data->user_nicename; ?></a></cite>
                </div>
                <?php if ($comment->comment_approved == '0'): ?>
                    <em><?php _e('Your comment is awaiting moderation.')?></em>
                    <br>
                <?php endif;?>

                <?php comment_text()?>
                <div class="comment_footer">
                    <span class="comment-meta commentmetadata"><a href="<?php echo esc_url(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time())?></a><?php edit_comment_link(__('Edit'), ' &SmallCircle; ', '')?></span>
                    &SmallCircle;
                    <span class="reply">
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'])))?>
                    </span>
                </div>
            </div>
            <div style="clear: both"></div>
        </div>
    </li>
    <?php
}

/**************************************************************
 *
 * Functions for the Attending System
 *
 **************************************************************/

add_action("wp_ajax_toggle_attend", "neo_attend_toggle_attend");
add_action("wp_ajax_nopriv_toggle_attend", "neo_attend_toggle_attend_nologin");

function neo_attend_toggle_attend()
{

    global $current_user;
    $result = array();
//        if ( !wp_verify_nonce( $_REQUEST['nonce'], "neo_attend_nonce")) {
    //        exit("No naughty business please");
    //     }
    if (is_user_logged_in()) {
        $attendingusers = attending_users($_REQUEST['post_id']);
        if (array_search($current_user->user_login, $attendingusers) !== false) {
            delete_post_meta($_REQUEST['post_id'], 'user_attending', $current_user->user_login);
        } else {
            add_post_meta($_REQUEST['post_id'], 'user_attending', $current_user->user_login);
        }
        $result['status'] = "OK";
        $result['button_text'] = get_my_attending_button($_REQUEST['post_id']);
        $result['attendees_list'] = get_attending_users_links($_REQUEST['post_id'], "", "&bull;");
        $result['attendees_count'] = attending_users_count($_REQUEST['post_id']);

    } else {
        $result['status'] = 'ERROR! User must be logged in';
    }
    echo json_encode($result);
    die();

}

function neo_attend_toggle_attend_nologin()
{
    $result = array();
    $result['status'] = 'Please log in to mark your preferences';
    $result['button_text'] = get_my_attending_button($_REQUEST['post_id']);
    echo json_encode($result);
    die;
}

function attending_users($postid)
{
    return get_post_meta($postid, 'user_attending');
}

function attending_users_count($postid)
{
    return count(attending_users($postid));
}

function get_attending_users_links($postid, $prev = 'Who is attending : ', $separator = ', ')
{
    $result = "";

    $attendingusers = attending_users($postid);

    $first_item_flag = true;
    if (count($attendingusers) > 0) {
        //$result.='<h2>'.count($attendingusers).' people are attending :</h2> ';

        $result .= '<div class="attending_users_wrapper">';
        foreach ($attendingusers as $user) {
            if ($first_item_flag) {
                $first_item_flag = false;
            } else {
                $result .= $separator;
            }
            $user = get_user_by('login', $user);
            $result .= '<a class="attending_user" href="' . get_author_posts_url($user->ID) . '">' . get_the_author_meta('user_nicename', $user->ID) . '</a>';
        }
        $result .= '</div>';
    } else {
        $result .= '<div class="attending_users_wrapper">(None Yet)</div>';
    }

    return $result;

}

function get_my_attending_button($postid)
{
    global $current_user;
    $result = "";
    $attendingusers = attending_users($postid);

    if (array_search($current_user->user_login, $attendingusers) !== false) {
        $result .= '<div class="neo_attend_button neo_button_attending" data-postid="' . $postid . '" >'
        . '<img src="' . get_bloginfo('template_url') . '/images/icons-19.png" title="I am Attending" /></div>';
    } else {
        $result .= '<div class="neo_attend_button neo_button_wanna_attend" data-postid="' . $postid . '" >'
        . '<img src="' . get_bloginfo('template_url') . '/images/icons-18.png" title="I wanna Attend" /></div>';
    }
    return $result;
}

function get_my_attending_button_single($postid)
{
    global $current_user;
    $result = "";
    $attendingusers = attending_users($postid);

    if (array_search($current_user->user_login, $attendingusers) !== false) {
        $result .= '<div class="neo_attend_button neo_button_attending" data-postid="' . $postid . '" >'
        . '<img src="' . get_bloginfo('template_url') . '/images/icons-19.png" title="I am Attending" /><div class="attend_text">Click to Cancel</div></div>';
    } else {
        $result .= '<div class="neo_attend_button neo_button_wanna_attend" data-postid="' . $postid . '" >'
        . '<img src="' . get_bloginfo('template_url') . '/images/icons-18.png" title="I wanna Attend" /><div class="attend_text">Click to Attend</div></div>';
    }
    return $result;
}

/**************************************************************
 *
 * END Functions for Attending System
 *
 **************************************************************/





/**************************************************************
 *
 * Functions for Active Category and tracks management
 *
 **************************************************************/



function get_current_cats(bool $get_as_string)
{


    // NOTE -  The Order of the categories matters! It has to be same as the icons on the sessions page.

    // Tech, Design, Mobile & Web, Bangalore LIfestyle, Scaling Infra, Entrepreneurship, Rest of world

    $tracks = array(1868, 1864, 1866, 1869, 1867, 1865, 1870);  // BCB 2021 Virtual
//    $tracks = array(1760, 1761, 1762, 1763, 1764, 1765, 1767);  // prod - bcb spring 2019
//    $tracks = array(1692, 1693, 1694, 1695, 1696, 1697, 1698);  // prod
//    $tracks = array(1694, 1695, 1696, 1697, 1698, 1699, 1700);  // staging
//    $tracks = array(5, 6, 7, 8, 9, 10, 11);   // dev

    if ($get_as_string) {
        return implode(", ", $tracks);
    } else {
        return $tracks;
    }

}


/**
 * Return array of post ids of 2 chosen tracks.
 * If tracks not chosen, return empty array
 */
function get_chosen_track_ids() {
    return array(7354, 7363);

//    return array(7300, 7302);
}



function get_archived_track_ids() {

    return array();
}


/**
 * Return links to 2 airmeet session slots
 *
 * @return type array
 */
function get_airmeet_links() {

    return array(
        "https://www.airmeet.com/e/1b53c000-774e-11eb-9356-e3ddd7103c02",
        "https://www.airmeet.com/e/1b53c000-774e-11eb-9356-e3ddd7103c02"
        );
}
