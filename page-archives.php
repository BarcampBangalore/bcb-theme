<?php

function insertSponsors($bcbname)
{
    switch ($bcbname) {
        case "BCB 2021 Virtual":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Venue Sponsor</h3>
                    <a target="_blank" href="https://airmeet.com">
                        <div style="background-color: rgba(194, 194, 194, 1); padding: 10px;">
                            <img class="archive_sponsor_logo" src="<?php echo get_bloginfo('template_url') . '/images/sponsors/airmeet-logo.svg' ?>"/>
                        </div>
                        <div>Airmeet</div>
                    </a>

                </div>
                
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friends of Barcamp</h3>
                    
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/janastu_logo.gif" /></div>   
                    <div>Janastu</div>
                    

                </div>
            </div>

            <?php
break;
        case "BCB Spring 2019":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Venue Sponsor</h3>
                    <a target="_blank" href="<?php echo get_permalink(get_page_by_path('about-dayanand-sagar-university')); ?>">
                        <div>
                            <img class="archive_sponsor_logo" src="<?php echo get_bloginfo('template_url') . '/images/sponsors/dsu2.png' ?>"/>
                        </div>
                        <div>Dayananda Sagar University</div>
                    </a>

                </div>
                
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friends of Barcamp</h3>
                    
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/janastu_logo.gif" /></div>   
                    <div>Janastu</div>
                    

                </div>
            </div>

            <?php
break;
        case "BCB Spring 2018":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname; ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Gold Sponsor</h3>
                    <a target="_blank" href="<?php echo get_permalink(get_page_by_path('about-intuit')); ?>">
                        <div>
                            <img class="archive_sponsor_logo" src="<?php echo get_bloginfo('template_url') . '/images/sponsors/Intuit.JPG' ?>"/>
                        </div>
                        <div>Intuit</div>
                    </a>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Venue Sponsor</h3>
                    <a target="_blank" href="<?php echo get_permalink(get_page_by_path('about-dayanand-sagar-university')); ?>">
                        <div>
                            <img class="archive_sponsor_logo" src="<?php echo get_bloginfo('template_url') . '/images/sponsors/dsu2.png' ?>"/>
                        </div>
                        <div>Dayananda Sagar University</div>
                    </a>

                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friends of Barcamp</h3>
                    <a target="_blank" href="<?php echo get_permalink(get_page_by_path('about-wandx')); ?>">
                        <div>
                            <img class="archive_sponsor_logo" src="<?php echo get_bloginfo('template_url') . '/images/sponsors/WandX_logo.jpg' ?>"/>
                        </div>
                        <div>WandX</div>
                    </a>
                    <a target="_blank" href="<?php echo get_permalink(get_page_by_path('about-tinkerform')); ?>">
                            <div>
                                <img class="archive_sponsor_logo" src="<?php echo get_bloginfo('template_url') . '/images/sponsors/Tinkerform-logo.png' ?>"/>
                            </div>
                            <div>Tinkerform</div>
                        </a>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>
            </div>

            <?php
break;
        case "BCB Spring 2016":
            ?>

        <div class="archive_sponsors_wrapper">
            <h2>Sponsors for <?php echo $bcbname; ?></h2>

            <div class="archive_sponsor">
                <h3 class="archive_sponsor_title">Supported by</h3>
                <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/janastu_logo.gif" /></div>
            </div>
        </div>

        <?php
break;

        case "BCB Monsoon 2015":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>
            </div>

            <?php
break;

        case "bcbxah":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for BCBXAntHill</h2>
                <!-- <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/sap_logo.png" /></div>
                </div>
                -->
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>
            </div>

            <?php
break;
        case "bcb17":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname; ?></h2>
                <!-- <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/sap_logo.png" /></div>
                </div>
                -->
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>
            </div>

            <?php
break;

        case "bcb16":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname; ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/sap_logo.png" /></div>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>
            </div>

            <?php
break;

        case "bcb15":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/sap_logo.png" /></div>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>





            </div>

            <?php
break;

        case "bcb14":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/sap_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Silver Sponsor</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/intuit_blue.gif" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Community Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/mozilla-firefox.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Community Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/Ola_Cabs_Logo.png" /></div>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>





            </div>

            <?php
break;

        case "bcb13":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/sap_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Silver Sponsor</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/mowbly_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/coworkable_logo.jpg" /></div>
                </div>
            </div>

            <?php
break;

        case "bcb12":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/sap_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Gold Sponsor</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/microsoft_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/minjar_logo.png" /></div>
                </div>
            </div>

            <?php
break;

        case "bcb11":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/sap_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Gold Sponsor</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/microsoft_logo.png" /></div>
                </div>

            </div>

            <?php
break;

        case "bcb10":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/sap_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/fusioncharts_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/KRDS-Facecode.png" /></div>
                </div>
            </div>

            <?php
break;

        case "bcb9":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/intuit_logo.gif" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Gold Sponsor</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/orangescape_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/fusioncharts_logo.png" /></div>
                </div>
            </div>

            <?php
break;

        case "bcb8":
            ?>

            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')?>/images/sponz_logos/yahoo_logo_in.png" /></div>
                </div>

            </div>

            <?php
break;

        default:
            break;
    }
}

get_header();?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


<div id="archives_page_wrapper" class="centered_background">
<script type="text/javascript" src="<?php bloginfo('template_url');?>/libs/jquery-2.1.0.js" ></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/libs/jquery.isotope.js" ></script>

    <script type="text/javascript">
        $(function(){
                $("#archives_page_bcb_selector a").click(function(){
                $("#archives_page_bcb_selector li").removeClass("archive_selected");
                $(".archives_parent").hide();
                var contentdiv = "#" + $(this).data("contentdiv");
                $(contentdiv).show()
                $(this).parent().addClass("archive_selected");

            });

            $(".archives_current").click();


        });

    </script>

    <div id="archives_page_content" class="d-flex justify-content-center">

        <div class="container">
            <div class="row">
                <div id="archives_page_header" class="col-xs-12 single_page_box">
                    <div id="archives_page_title"><?php the_title();?></div>
                    <div id="archives_page_bcb_selector_buttons">
                        <ul id="archives_page_bcb_selector">
                            <li class="archive_selected"><a class="archives_current" data-contentdiv="archive_1863">BCB 2021 Virtual</a></li>
                            <li><a data-contentdiv="archive_1759">BCB Spring 2019</a></li>
                            <li><a data-contentdiv="archive_1691">BCB Spring 2018</a></li>
                            <li><a data-contentdiv="archive_1556">BCB Spring 2016</a></li>
                            <li><a data-contentdiv="archive_1458">BCB Monsoon 2015</a></li>
                            <li><a data-contentdiv="archive_1366">BCBX AntHill</a></li>
                            <li><a data-contentdiv="archive_1224">BCB17</a></li>
                            <li><a data-contentdiv="archive_1057">BCB16</a></li>
                            <li><a data-contentdiv="archive_931">BCB15</a></li>
                            <li><a data-contentdiv="archive_785">BCB14</a></li>
                            <li><a data-contentdiv="archive_636">BCB13</a></li>
                            <li><a data-contentdiv="archive_479">BCB12</a></li>
                            <li><a data-contentdiv="archive_399">BCB11</a></li>
                            <li><a data-contentdiv="archive_324">BCB10</a></li>
                            <li><a data-contentdiv="archive_220">BCB9</a></li>
                            <li><a data-contentdiv="archive_3">BCB8</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <?php
$techlash_categories = array(639, 787, 933, 1065, 1232, 1465);
$archive_categories = array(
    1863 => "BCB 2021 Virtual",
    1759 => "BCB Spring 2019", 1691 => "BCB Spring 2018", 
    1556 => "BCB Spring 2016", 1458 => "BCB Monsoon 2015", 1366 => 'bcbxah',
    1224 => 'bcb17', 1057 => 'bcb16', 931 => 'bcb15',
    785 => 'bcb14', 636 => 'bcb13', 479 => 'bcb12',
    399 => 'bcb11', 324 => 'bcb10', 220 => 'bcb9', 3 => 'bcb8');
foreach ($archive_categories as $archive_cat => $archive_catname):
?>
            <div id="archive_<?php echo $archive_cat; ?>" class="archives_parent" >
                <div class="row">
                    <div class="single_page_box">
                        <?php insertSponsors($archive_catname);?>
                    </div>
                </div>

                <div class="row" id="archive_cards_row">

                        <?php
query_posts('cat=' . $archive_cat);
while (have_posts()): the_post();?>

	                        <div class="sessions_page_card col-12 col-md-6" data-track-id="<?php echo $track_id; ?>">
	                            <div class="sessions_page_card_content container-fluid track_color_border_0">
	                                <div class="row">
	                                    <div class="sessions_page_card_avatar">
	                                        <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_avatar(get_the_author_meta('ID'), 48) . '</a>'; ?>
	                                    </div>
	                                    <div class="sessions_page_card_right_column track_color_border_0 col">
	                                        <div class="sessions_page_card_title">

	                                            <?php
                                                    $titlestr = get_the_title();
                                                    $title_trimmed = false;
                                                    if (strlen($titlestr) > 50) {
                                                        $titlestr = substr($titlestr, 0, 50) . "...";
                                                        $title_trimmed = true;
                                                    }
                                                    ?>
	                                            <a href="<?php echo get_permalink(); ?>" <?php if ($title_trimmed) {echo 'title="' . get_the_title() . '"';}?>>
	                                                <?php echo $titlestr; ?>
	                                            </a>
	                                        </div>
	                                        <div class="sessions_page_card_author">
	                                            <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?>
	                                        </div>
	                                        <div class="sessions_page_card_bottomarea">

	                                            <div class="sessions_page_card_comments_stats">
	                                                <div class="sessions_page_card_comments_icon">
	                                                    <img src="<?php echo get_bloginfo('template_url') . '/images/icons-21.png' ?>" title="Comments" />
	                                                </div>
	                                                <div class="sessions_page_card_comments_count">
	                                                    <?php comments_number('0', '1', '%');?>
	                                                </div>
	                                            </div>

	                                            <div class="sessions_page_card_attendees_stats">
	                                                <div class="sessions_page_card_attendees_icon">
	                                                    <img src="<?php echo get_bloginfo('template_url') . '/images/icons-20.png' ?>" title="Attendees" />
	                                                </div>
	                                                <div id="sessions_page_card_attendees_count_<?php echo get_the_ID(); ?>" class="sessions_page_card_attendees_count">
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


		                        <?php endwhile;?>

                </div>
            </div>

            <?php endforeach;?>

        </div>

    </div>

</div>


<?php get_footer();?>

