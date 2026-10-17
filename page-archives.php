<?php

function insertSponsors($bcbname)
{
    switch ($bcbname) {
        case "BCB 2025":
?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Spark Sponsor</h3>
                    <div>
                        <img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponsors/logo-fossunited.png" />
                    </div>
                    <div>
                        <a href="https://fossunited.org/">FOSS United</a>
                    </div>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Venue Sponsor</h3>

                    <div style="display: flex; justify-content: center; align-items: center; gap: 40px; flex-wrap: wrap;">

                        <a href="https://takshashila.org.in/" target="_blank" rel="noopener noreferrer" style="text-align: center;">
                            <div>
                                <img height="60px" src="<?php bloginfo('template_url'); ?>/images/sponsors/2025/takshashila.png" />
                            </div>
                            <div style="margin-top: 10px">The Takshashila Institution</div>
                        </a>

                        <a href="https://samagata.org/" target="_blank" rel="noopener noreferrer" style="text-align: center;">
                            <div>
                                <img height="55px" src="<?php bloginfo('template_url'); ?>/images/sponsors/2025/samagata.svg" />
                            </div>
                            <div style="margin-top: 10px">Samagata Foundation</div>
                        </a>

                    </div>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friends of Barcamp</h3>
                    <div>
                        <img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" />
                    </div>
                    <div>Janastu</div>
                </div>

            </div>

        <?php
            break;
        case "BCB 2025 Autumn":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Venue Sponsor</h3>
                    <a target="_blank" href="https://www.reva.edu.in/">
                        <div>
                            <img class="archive_sponsor_logo"
                                src="<?php echo get_bloginfo('template_url') . '/images/sponsors/2025/revaLogo.png' ?>" />
                        </div>
                        <div>Reva University</div>
                    </a>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friends of Barcamp</h3>
                    <div>
                        <img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" />
                    </div>
                    <div>Janastu</div>
                </div>

            </div>

        <?php
            break;
        case "BCB 2022":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Venue Sponsor</h3>
                    <a target="_blank" href="https://rvu.edu.in/">
                        <div><img class="archive_sponsor_logo"
                                src="<?php echo get_bloginfo('template_url') . '/images/sponsors/logo-rvu.svg' ?>" /></div>
                        <div>RV University</div>
                    </a>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Silver Sponsor</h3>

                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponsors/logo-fossunited.png" /></div>
                    <div>FOSS United</div>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Silver Sponsor</h3>

                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponsors/logo-hoochat.svg" /></div>
                    <div>HooChat</div>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friends of Barcamp</h3>

                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                    <div>Janastu</div>
                </div>
            </div>
        <?php
            break;
        case "BCB 2024":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Venue Sponsor</h3>
                    <a target="_blank" href="https://rvu.edu.in/">
                        <div><img class="archive_sponsor_logo"
                                src="<?php echo get_bloginfo('template_url') . '/images/sponsors/logo-rvu.svg' ?>" /></div>
                        <div>RV University</div>
                    </a>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friends of Barcamp</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                    <div>Janastu</div>
                </div>
            </div>

        <?php
            break;
        case "BCB 2023":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Venue Sponsor</h3>
                    <a target="_blank" href="https://rvu.edu.in/">
                        <div><img class="archive_sponsor_logo"
                                src="<?php echo get_bloginfo('template_url') . '/images/sponsors/logo-rvu.svg' ?>" /></div>
                        <div>RV University</div>
                    </a>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friends of Barcamp</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                    <div>Janastu</div>
                </div>
            </div>


        <?php
            break;
        case "BCB 2021 Virtual":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Venue Sponsor</h3>
                    <a target="_blank" href="https://airmeet.com">
                        <div style="background-color: rgba(194, 194, 194, 1); padding: 10px;">
                            <img class="archive_sponsor_logo"
                                src="<?php echo get_bloginfo('template_url') . '/images/sponsors/airmeet-logo.svg' ?>" />
                        </div>
                        <div>Airmeet</div>
                    </a>

                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friends of Barcamp</h3>

                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                    <div>Janastu</div>


                </div>
            </div>

        <?php
            break;
        case "BCB Spring 2019":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Venue Sponsor</h3>
                    <a target="_blank" href="<?php echo get_permalink(get_page_by_path('about-dayanand-sagar-university')); ?>">
                        <div>
                            <img class="archive_sponsor_logo"
                                src="<?php echo get_bloginfo('template_url') . '/images/sponsors/dsu2.png' ?>" />
                        </div>
                        <div>Dayananda Sagar University</div>
                    </a>

                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friends of Barcamp</h3>

                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                    <div>Janastu</div>


                </div>
            </div>

        <?php
            break;
        case "BCB Spring 2018":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Gold Sponsor</h3>
                    <a target="_blank" href="<?php echo get_permalink(get_page_by_path('about-intuit')); ?>">
                        <div>
                            <img class="archive_sponsor_logo"
                                src="<?php echo get_bloginfo('template_url') . '/images/sponsors/Intuit.JPG' ?>" />
                        </div>
                        <div>Intuit</div>
                    </a>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Venue Sponsor</h3>
                    <a target="_blank" href="<?php echo get_permalink(get_page_by_path('about-dayanand-sagar-university')); ?>">
                        <div>
                            <img class="archive_sponsor_logo"
                                src="<?php echo get_bloginfo('template_url') . '/images/sponsors/dsu2.png' ?>" />
                        </div>
                        <div>Dayananda Sagar University</div>
                    </a>

                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friends of Barcamp</h3>
                    <a target="_blank" href="<?php echo get_permalink(get_page_by_path('about-wandx')); ?>">
                        <div>
                            <img class="archive_sponsor_logo"
                                src="<?php echo get_bloginfo('template_url') . '/images/sponsors/WandX_logo.jpg' ?>" />
                        </div>
                        <div>WandX</div>
                    </a>
                    <a target="_blank" href="<?php echo get_permalink(get_page_by_path('about-tinkerform')); ?>">
                        <div>
                            <img class="archive_sponsor_logo"
                                src="<?php echo get_bloginfo('template_url') . '/images/sponsors/Tinkerform-logo.png' ?>" />
                        </div>
                        <div>Tinkerform</div>
                    </a>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>
            </div>

        <?php
            break;
        case "BCB Spring 2016":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>
            </div>

        <?php
            break;

        case "BCB Monsoon 2015":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>
            </div>

        <?php
            break;

        case "bcbxah":
        ?>

            <div>
                <h2>Sponsors for BCBXAntHill</h2>
                <!-- <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url') ?>/images/sponz_logos/sap_logo.png" /></div>
                </div>
                -->
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>
            </div>

        <?php
            break;
        case "bcb17":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>
                <!-- <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url') ?>/images/sponz_logos/sap_logo.png" /></div>
                </div>
                -->
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>
            </div>

        <?php
            break;

        case "bcb16":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname; ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/sap_logo.png" />
                    </div>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>
            </div>

        <?php
            break;

        case "bcb15":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/sap_logo.png" />
                    </div>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>





            </div>

        <?php
            break;

        case "bcb14":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/sap_logo.png" />
                    </div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Silver Sponsor</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/intuit_blue.gif" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Community Partner</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/mozilla-firefox.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Community Partner</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/Ola_Cabs_Logo.png" /></div>
                </div>

                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Supported by</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/janastu_logo.gif" /></div>
                </div>





            </div>

        <?php
            break;

        case "bcb13":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/sap_logo.png" />
                    </div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Silver Sponsor</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/mowbly_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/coworkable_logo.jpg" /></div>
                </div>
            </div>

        <?php
            break;

        case "bcb12":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/sap_logo.png" />
                    </div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Gold Sponsor</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/microsoft_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/minjar_logo.png" /></div>
                </div>
            </div>

        <?php
            break;

        case "bcb11":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/sap_logo.png" />
                    </div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Gold Sponsor</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/microsoft_logo.png" /></div>
                </div>

            </div>

        <?php
            break;

        case "bcb10":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/sap_logo.png" />
                    </div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/fusioncharts_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/KRDS-Facecode.png" /></div>
                </div>
            </div>

        <?php
            break;

        case "bcb9":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/intuit_logo.gif" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Gold Sponsor</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/orangescape_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/fusioncharts_logo.png" /></div>
                </div>
            </div>

        <?php
            break;

        case "bcb8":
        ?>

            <div>
                <h2>Sponsors for <?php echo $bcbname ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo"
                            src="<?php bloginfo('template_url') ?>/images/sponz_logos/yahoo_logo_in.png" /></div>
                </div>

            </div>

<?php
            break;

        default:
            break;
    }
}

/**
 * Archives page. Editions (tabs), their category ids and sponsor keys come from
 * data/event.json (archives.*). Sponsor blocks per edition are in insertSponsors() above.
 */
get_header('bcb');
the_post();

$bcb_editions = bcb_cfg_list('archives.editions');
?>

<section class="bcb-pagehead">
    <div class="bcb-section-label bcb-section-label--orange"><?php echo bcb_text(bcb_cfg('archives.label', 'Archives')); ?></div>
    <h1 class="bcb-section-heading"><?php echo get_the_title(); ?></h1>
    <p class="bcb-section-body"><?php echo bcb_rich(bcb_tpl(bcb_cfg('archives.body'))); ?></p>
</section>

<section class="bcb-listing">
    <div class="bcb-listing__inner">

        <div class="bcb-chips" id="bcb-edition-chips">
            <?php foreach ($bcb_editions as $i => $edition) : ?>
            <button type="button" class="bcb-chip<?php echo $i === 0 ? ' is-active' : ''; ?>" data-edition="<?php echo (int) $edition['category_id']; ?>" aria-pressed="<?php echo $i === 0 ? 'true' : 'false'; ?>"><?php echo bcb_text($edition['label']); ?></button>
            <?php endforeach; ?>
        </div>

        <?php foreach ($bcb_editions as $i => $edition) : ?>
        <div class="bcb-edition" id="edition-<?php echo (int) $edition['category_id']; ?>"<?php echo $i === 0 ? '' : ' hidden'; ?>>

            <div class="bcb-archive-sponsors">
                <?php
                // insertSponsors() titles its block with the sponsors key; show the edition label instead.
                $sponsors_key = isset($edition['sponsors_key']) ? $edition['sponsors_key'] : $edition['label'];
                ob_start();
                insertSponsors($sponsors_key);
                echo str_replace('Sponsors for ' . $sponsors_key, 'Sponsors for ' . esc_html($edition['label']), ob_get_clean());
                ?>
            </div>

            <h2 class="bcb-section-heading bcb-edition__sessions-heading"><?php echo bcb_text(bcb_cfg('archives.sessions_heading', 'Sessions')); ?></h2>
            <div class="bcb-session-grid">
                <?php
                $archive_loop = new WP_Query(array('cat' => (int) $edition['category_id'], 'nopaging' => true));
                $bcb_n = 0;
                while ($archive_loop->have_posts()) {
                    $archive_loop->the_post();
                    bcb_render_session_card(null, $bcb_n++);
                }
                wp_reset_postdata();
                if ($bcb_n === 0) :
                ?>
                <div class="bcb-empty"><?php echo bcb_text(bcb_cfg('archives.empty_text')); ?></div>
                <?php endif; ?>
            </div>

        </div>
        <?php endforeach; ?>

    </div>
</section>

<script>
(function () {
    var chips = document.querySelectorAll('#bcb-edition-chips .bcb-chip');
    var panels = document.querySelectorAll('.bcb-edition');

    function show(id) {
        Array.prototype.forEach.call(panels, function (panel) {
            panel.hidden = panel.id !== 'edition-' + id;
        });
        Array.prototype.forEach.call(chips, function (chip) {
            var on = chip.getAttribute('data-edition') === String(id);
            chip.classList.toggle('is-active', on);
            chip.setAttribute('aria-pressed', on ? 'true' : 'false');
        });
    }

    Array.prototype.forEach.call(chips, function (chip) {
        chip.addEventListener('click', function () {
            var id = chip.getAttribute('data-edition');
            show(id);
            if (history.replaceState) { history.replaceState(null, '', '#edition-' + id); }
        });
    });

    // deep link: /archives#edition-1970
    var m = /^#edition-(\d+)$/.exec(location.hash);
    if (m && document.getElementById('edition-' + m[1])) { show(m[1]); }
})();
</script>

<?php get_footer('bcb'); ?>
