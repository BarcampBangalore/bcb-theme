<?php get_header();?>
<div class="container marketing">
  <!-- START THE FEATURETTES -->

  <div class="row featurette align-items-center first-featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">What is BarCamp Bangalore? <br/><span class="text-muted">#bcb2025</span></h2>
      <p class="lead">BarCamp Bangalore is an unconference – an ad hoc gathering born from the desire for people to share and learn in an open environment.</p>
      <p class="lead">It is an opportunity for people to come together to learn, network, and discuss great ideas in person.</p>
      <p class="lead">We're coming back on <span id="page_home_hero_date">March 8, 2025, Saturday</span>,
      at <a href="https://maps.app.goo.gl/xZ6D7B69bSLpjRmo8" target="_blank">The Takshashila Institution (2nd floor) and Samagata Foundation (4th floor), Cobalt Building, Church Street, Bengaluru - 560001</a></p>

      <div class="calendar-options">
        <script src="https://cdn.jsdelivr.net/npm/add-to-calendar-button@1" async defer></script>
        <div class="atcb" >
            {
                "name": "Barcamp Bangalore",
                "description": "BarCamp Bangalore is an opportunity for people to come together to learn, network, and discuss great ideas in person.",
                "startDate": "2025-03-08",
                "endDate": "2025-03-08",
                "startTime": "09:00",
                "endTime": "17:00",
                "size": "5",
                "location": "Cobalt Building, Church Street, Bangalore 560001",
                "label": "Save a calendar reminder",
                "lightMode": "system",
                "options":[
                    "Apple",
                    "Google",
                    "iCal",
                    "Microsoft365",
                    "Outlook.com"
                ],
                "timeZone": "Asia/Kolkata",

                "inline":true,
                "listStyle": "modal",
                "iCalFileName": "bcb-2025-reminder"
            }
        </div>
      </div>
    </div>
    <div class="col-md-5 mt-4">
    <img  style="width: inherit; height: inherit;" src="<?php bloginfo('template_url');?>/images/hero-02.jpg" />
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">
        What is an Unconference?
        <br/><span class="text-muted">
          You decide what to talk about and what talks to listen to. You're in control.
        </span>
      </h2>
      <p class="lead">
        Unconferences do not have speaker list or a fixed schedule until the actual event date. The
        discussions are around a variety of topics, and the day is created collaboratively – built by you
        and the other attendees who have a topic, story, knowledge, or experience to share with the rest of
        the community.
      </p>
    </div>
    <div class="col-md-5 order-md-1">
      <img style="width: inherit; height: inherit;" src="<?php bloginfo('template_url');?>/images/hero-01.jpg" />
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">
        Meet the most outside-the-box thinkers in the city. <br/>
        <span class="text-muted">No, really.</span>
      </h2>
      <p class="lead">
        Sessions include topics ranging from design, technology, creativity, to entrepreneurship, lifestyle, astronomy, music, and much more!.
        If you're doing something that crosses boundaries, steps on toes, improves someone's lives, or just spreads
        joy, we want to hear about it.
      </p>
    </div>
    <div class="col-md-5">
    <img  style="width: inherit; height: inherit;" src="<?php bloginfo('template_url');?>/images/hero-03.jpg" />
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette text-center">
    <div class="col-md-12 mb-4">
      <h2 class="section-heading">Event format</h2>
      <p class="lead">We start registration at 8:30AM, and end with feedback session at 5:30PM.</p>
    </div>
    <div class="col-md-6">
      <h3 class="">
        Talks <br/>
        <span class="text-muted">Duration: 45 minutes each, 6 parallel tracks</span>
      </h3>
      <p class="lead">
        We have 6 rooms to host 6 sessions in parallel. So that you can always find something you want to attend.
        Don't like a session? Walk out and into another session. You're encouraged to do that.
        We call it the <a href="https://planning.barcampbangalore.com/law-of-two-feet/">law of two feet</a>.
      </p>
    </div>
    <div class="col-md-6">
      <h3 class="">
        Techlash <br/>
        <span class="text-muted">Duration: 6 minutes each, 1 hour total</span>
      </h3>
      <p class="lead">
        Your 6 minutes to fame. Showcase your tech prowess by showcasing something you built and inspire the crowd.
        See the <a href="<?php echo get_settings('home'); ?>/techlash">submitted techlash sessions</a>.
      </p>
    </div>
    <div class="col-md-12 mt-3">
      <p>
        <a class="btn btn-bcb" href="https://barcampbangalore.com/bcb/schedule">Check out the detailed event schedule format</a>
      </p>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette text-center">
    <div class="col-md-12 mb-4">
      <h2 class="section-heading">Types of talks</h2>
    </div>
    <div class="col-md-4">
      <h3 class="">
        Introductory <br/>
        <span class="text-muted">Spark the flame</span>
      </h3>
      <p class="lead">
        Introduce an idea, a tool, or a lifestyle. If you think you're doing/know something that most people don't,
        and you want to bridge that gap, this session type is for your talk. Go ahead and start your cult.
      </p>
    </div>
    <div class="col-md-4">
      <h3 class="">
        Open discussion <br/>
        <span class="text-muted">Give and take</span>
      </h3>
      <p class="lead">
        Need feedback on something? Or looking for opinion from everyone in the room? Share your knowledge and gether
        more from others around you. This session type os perfect to get everyone talking.
      </p>
    </div>
    <div class="col-md-4">
      <h3 class="">
        Deep dive <br/>
        <span class="text-muted">Get your feet wet</span>
      </h3>
      <p class="lead">
        Take an idea and get your hands dirty while you dig deeper into it. This session type is perfect for
        intermediate/expert level talks.
      </p>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row">
    <div class="col-lg-12 text-center mb-10">
      <h1 class="pb-2 section-heading">Event venue</h1>
      <p class="pb-2">The Takshashila Institution (2nd floor) and Samagata Foundation (4th floor)<br>46/1, Cobalt Building<br>Church Street (above Church Street Social)<br>Bengaluru - 560001</p>
      <div class="pb-4">
        <h2>How to reach</h2>
        <p>Take the metro and get down at the MG Road station on the
          Purple line<br>
          Walk over to Church Street Social to find the venue</p>
      </div>
    </div>
    <div class="col-lg-12">
      <iframe class="home-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d903.7571911674339!2d77.60243193065465!3d12.975622873500768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae167c7b6919e9%3A0x86936959d24e13f5!2sCobalt%2C%20Museum%20Rd%2C%20Haridevpur%2C%20Shanthala%20Nagar%2C%20Ashok%20Nagar%2C%20Bengaluru%2C%20Karnataka%20560001!5e0!3m2!1sen!2sin!4v1734510391422!5m2!1sen!2sin" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div><!-- /.row -->

  <hr class="featurette-divider">

  <div class="row text-center">
    <div class="col-lg-12 mb-10">
      <h1 class="pb-5 section-heading">Sponsors</h1>
    </div>
    <div class="col-lg-6">
      <!-- <img height="100px" src="<?php bloginfo('template_url');?>/images/money.png" /> -->
      <img height="100px" src="<?php bloginfo('template_url');?>/images/new/sponsors/blaze.png" />
      <h2 style="margin: 15px 0;">Blaze Sponsors</h2>

      <!-- <p>Be the hero we need.</p> -->
      <p><a class="btn btn-bcb" href="https://planning.barcampbangalore.com/sponsorship-opportunities-for-barcamp-bangalore-2024/" target="_blank">Sponsor us</a></p>
    </div>
    <div class="col-lg-6">
      <!-- <img height="100px" src="<?php bloginfo('template_url');?>/images/money.png" /> -->
      <img height="100px" src="<?php bloginfo('template_url');?>/images/new/sponsors/ember.png" />
      <h2 style="margin: 15px 0;">Ember Sponsors</h2>

      <!-- <p>Be the hero we need.</p> -->
      <p><a class="btn btn-bcb" href="https://planning.barcampbangalore.com/sponsorship-opportunities-for-barcamp-bangalore-2024/" target="_blank">Sponsor us</a></p>
      <!-- <div class="row">
        <div class="col-lg-4">
          <a href="https://planning.barcampbangalore.com/announcing-foss-united-as-a-silver-sponsor-for-barcamp-bangalore-2022/">
            <img height="100px" src="<?php bloginfo('template_url');?>/images/sponsors/logo-fossunited.png" />
            <p>FOSS United</p>
          </a>
        </div>
        <div class="col-lg-8">
          <a href="https://planning.barcampbangalore.com/announcing-hoochat-as-a-silver-sponsor-for-barcamp-bangalore-2022/">
            <img width="250px" height="100px" src="<?php bloginfo('template_url');?>/images/sponsors/logo-hoochat.svg" />
            <p>HooChat</p>
          </a>
        </div>
      </div> -->
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-6">
      <img height="100px" src="<?php bloginfo('template_url');?>/images/new/sponsors/spark.png" />
      <h2 style="margin: 15px 0;">Spark Sponsors</h2>

      <a href="https://fossunited.org/" target="_blank" rel="noopener noreferrer">
        <img height="60px" src="<?php bloginfo('template_url');?>/images/sponsors/2025/foss-united.svg" />
        <p style="margin-top: 10px">Foss United</p>
      </a>

      <a href="https://barcampbangalore.com/bcb/about-janastu">
        <img height="60px" src="<?php bloginfo('template_url');?>/images/sponsors/janastu_logo.gif" />
        <p>Janastu</p>
      </a>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-6">
      <img height="100px" src="<?php bloginfo('template_url');?>/images/new/sponsors/venue.png" />
      <h2 style="margin: 15px 0;">Venue Sponsors</h2>

      <a href="https://takshashila.org.in/" target="_blank" rel="noopener noreferrer">
        <img height="60px" src="<?php bloginfo('template_url');?>/images/sponsors/2025/takshashila.png" />
        <p style="margin-top: 10px">The Takshashila Institution</p>
      </a>

      <a href="https://samagata.org/" target="_blank" rel="noopener noreferrer">
        <img height="55px" src="<?php bloginfo('template_url');?>/images/sponsors/2025/samagata.svg" />
        <p style="margin-top: 10px">Samagata Foundation</p>
      </a>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

  <!-- /END THE FEATURETTES -->

</div>

<?php get_footer();?>
