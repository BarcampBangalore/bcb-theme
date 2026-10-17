<?php

show_admin_bar(false);

function neobcb21_enqueue_scripts()
{

    wp_enqueue_script("jquery");
    wp_enqueue_script("fittext", get_bloginfo('template_url') . "/scripts/FitText/jquery.fittext.js");

    wp_enqueue_script("my_script", get_bloginfo('template_url') . "/scripts/script.js");
    wp_enqueue_script("bootstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js");

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
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>" class="comment-body">
            <?php echo get_avatar($comment->comment_author_email, 48); ?>
            <div class="comment-body-inner">
                <div class="comment-author vcard">


                    <cite class="fn"><a href="<?php echo get_author_posts_url(get_user_by('email', get_comment_author_email())->ID); ?>"><?php echo get_user_by('email', get_comment_author_email())->data->user_nicename; ?></a></cite>
                </div>
                <?php if ($comment->comment_approved == '0'): ?>
                    <em><?php _e('Your comment is awaiting moderation.') ?></em>
                    <br>
                <?php endif; ?>

                <?php comment_text() ?>
                <div class="comment_footer">
                    <span class="comment-meta commentmetadata"><a href="<?php echo esc_url(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a><?php edit_comment_link(__('Edit'), ' &SmallCircle; ', '') ?></span>
                    &SmallCircle;
                    <span class="reply">
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
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

add_action('rest_api_init', function () {
    register_rest_route('custom', '/sessions', array(
        'methods' => 'GET',
        'callback' => 'getSessions'
    ));
});

function getSessions($data)
{
    $post = get_posts(array(
        'name' => $data->get_param('slug'),
        'post_status' => 'any'
    ));
    return $post;
}


/**************************************************************
 *
 * Functions for Active Category and tracks management
 *
 **************************************************************/



/**
 * Category ids of the session tracks, in the same order as the track
 * chips on the sessions page. Configured in data/event.json (sessions.tracks).
 */
function get_current_cats(bool $get_as_string)
{
    $tracks = array();

    foreach (bcb_cfg_list('sessions.tracks') as $track) {
        $tracks[] = (int) $track['category_id'];
    }

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
function get_chosen_track_ids()
{
    return array_map('intval', bcb_cfg_list('sessions.chosen_post_ids'));
}



function get_archived_track_ids()
{
    return array_map('intval', bcb_cfg_list('sessions.archived_post_ids'));
}

/**
 * One session card, for use inside the loop (sessions + techlash pages).
 *
 * @param int|null $track_index Index into sessions.tracks, for the track filter.
 * @param int      $variant     Position in the list; alternates the card's shadow color.
 */
function bcb_render_session_card($track_index = null, $variant = 0)
{
    $author_id  = get_the_author_meta('ID');
    $author_url = get_author_posts_url($author_id);
    $color      = $variant % 2 ? 'green' : 'orange';
    $attendees  = attending_users_count(get_the_ID());
?>
    <article class="bcb-session-card bcb-session-card--<?php echo $color; ?>"<?php echo $track_index !== null ? ' data-track-id="' . (int) $track_index . '"' : ''; ?>>
        <a class="bcb-session-card__avatar" href="<?php echo esc_url($author_url); ?>"><?php echo get_avatar($author_id, 64); ?></a>
        <p class="bcb-session-card__author"><a href="<?php echo esc_url($author_url); ?>"><?php echo esc_html(get_the_author_meta('display_name')); ?></a></p>
        <h3 class="bcb-session-card__title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h3>
        <div class="bcb-session-card__meta">
            <?php echo (int) $attendees; ?> <?php echo $attendees === 1 ? 'attendee' : 'attendees'; ?> ·
            <?php comments_number('0 comments', '1 comment', '% comments'); ?>
        </div>
    </article>
<?php
}


/**************************************************************
 *
 * Event config (data/event.json) helpers
 *
 * Event-specific content (dates, images, venue, sponsors, schedule
 * board, copy) lives in data/event.json so a new edition is a JSON edit.
 *
 **************************************************************/

/**
 * Decoded contents of data/event.json. Cached per request.
 * Returns an empty array (and logs) if the file is missing or invalid,
 * so a bad edit never takes the site down.
 */
function bcb_config()
{
    static $config = null;

    if ($config !== null) {
        return $config;
    }

    $config = array();
    $file = get_template_directory() . '/data/event.json';

    if (!is_readable($file)) {
        error_log('bcb_config: cannot read ' . $file);
        return $config;
    }

    $decoded = json_decode(file_get_contents($file), true);

    if (!is_array($decoded)) {
        error_log('bcb_config: invalid JSON in ' . $file . ' (' . json_last_error_msg() . ')');
        return $config;
    }

    $config = $decoded;
    return $config;
}

/**
 * Dot-path getter, e.g. bcb_cfg('venue.name') or bcb_cfg('board.items.0.start').
 */
function bcb_cfg($path, $default = '')
{
    $node = bcb_config();

    foreach (explode('.', $path) as $key) {
        if (is_array($node) && array_key_exists($key, $node)) {
            $node = $node[$key];
        } else {
            return $default;
        }
    }

    return $node;
}

/**
 * Same as bcb_cfg() but always returns an array (for loops).
 */
function bcb_cfg_list($path)
{
    $value = bcb_cfg($path, array());
    return is_array($value) ? $value : array();
}

/**
 * URL for an image/file. Absolute http(s) URLs are returned as-is,
 * anything else is treated as relative to the theme directory.
 */
function bcb_asset($path)
{
    if (preg_match('#^(https?:)?//#', $path)) {
        return $path;
    }

    return get_template_directory_uri() . '/' . ltrim($path, '/');
}

/**
 * Site-relative ("/rsvp") or absolute URL for a link.
 */
function bcb_link($url)
{
    if (preg_match('#^(https?:)?//#', $url)) {
        return $url;
    }

    return home_url($url);
}

/**
 * Plain text, escaped.
 */
function bcb_text($text)
{
    return esc_html($text);
}

/**
 * Text that may contain a little inline markup (<em>, <strong>, <br>).
 */
function bcb_rich($text)
{
    return wp_kses($text, array(
        'em' => array(),
        'strong' => array(),
        'br' => array(),
    ));
}

/**
 * Renders [expand title="..."]answer[/expand] (the shortcode the FAQ page content
 * is written with) as a native <details> accordion. Used only by page-faq.php,
 * so it doesn't depend on the collapse-o-matic plugin and looks the same everywhere.
 */
function bcb_expand_shortcode($atts, $content = '')
{
    $atts = shortcode_atts(array('title' => ''), $atts, 'expand');

    return '<details class="bcb-faq__item">'
        . '<summary class="bcb-faq__question">' . esc_html(trim($atts['title'])) . '</summary>'
        . '<div class="bcb-faq__answer">' . wpautop(do_shortcode(trim($content))) . '</div>'
        . '</details>';
}

/**
 * Marks the top-level lists of a content block as a vertical stepper (class "bcb-steps").
 * A list qualifies when it has 2+ items and the heading above it doesn't contain any of
 * $skip_headings (e.g. "FAQ"). Content is untouched if DOM support is missing.
 */
function bcb_mark_steps($html, $skip_headings = array())
{
    if (!class_exists('DOMDocument') || trim($html) === '') {
        return $html;
    }

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="utf-8" ?><div>' . $html . '</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();

    $root = $dom->getElementsByTagName('div')->item(0);
    if (!$root) {
        return $html;
    }

    $heading = '';
    $out = '';

    foreach ($root->childNodes as $node) {
        if ($node->nodeType === XML_ELEMENT_NODE) {
            $tag = strtolower($node->nodeName);

            if (preg_match('/^h[1-6]$/', $tag)) {
                $heading = $node->textContent;
            } elseif ($tag === 'ol' || $tag === 'ul') {
                $items = 0;
                foreach ($node->childNodes as $child) {
                    if ($child->nodeType === XML_ELEMENT_NODE && strtolower($child->nodeName) === 'li') {
                        $items++;
                    }
                }

                $skip = false;
                foreach ($skip_headings as $needle) {
                    if ($needle !== '' && stripos($heading, $needle) !== false) {
                        $skip = true;
                    }
                }

                if ($items >= 2 && !$skip) {
                    $class = trim($node->getAttribute('class') . ' bcb-steps');
                    $node->setAttribute('class', $class);
                }
            }
        }
        $out .= $dom->saveHTML($node);
    }

    return $out;
}

/**
 * Replace {year} (event year), {date} (full event date, e.g. "Saturday, April 18, 2026"),
 * {event} (event name), {venue} (venue name), {rsvp_url} (RSVP link) and {home} (site URL)
 * in a config string or in WP page content (FAQ, How to register).
 */
function bcb_tpl($text)
{
    return strtr($text, array(
        '{year}'     => bcb_event_date('Y'),
        '{date}'     => bcb_event_date('l, F j, Y'),
        '{event}'    => bcb_cfg('event.name', 'BarCamp Bangalore'),
        '{venue}'    => bcb_cfg('venue.name'),
        '{rsvp_url}' => bcb_cfg('rsvp.url'),
        '{home}'     => untrailingslashit(home_url()),
    ));
}

/**
 * Paragraph-level text with links, from config. Run bcb_tpl() first if it uses tokens.
 */
function bcb_prose($text)
{
    return wp_kses($text, array(
        'a'      => array('href' => array(), 'target' => array(), 'rel' => array()),
        'em'     => array(),
        'strong' => array(),
        'br'     => array(),
    ));
}

/**
 * Event start date formatted in the configured timezone,
 * e.g. bcb_event_date('D, M j') => "Sat, Apr 18".
 */
function bcb_event_date($format = 'D, M j')
{
    $start = bcb_cfg('event.start_date', '');

    if ($start === '') {
        return '';
    }

    try {
        $tz = new DateTimeZone(bcb_cfg('event.timezone', 'Asia/Kolkata'));
        $date = new DateTime($start, $tz);
    } catch (Exception $e) {
        error_log('bcb_event_date: ' . $e->getMessage());
        return '';
    }

    return $date->format($format);
}
