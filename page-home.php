<?php get_header();?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="<?php bloginfo('template_url');?>/images/header-1.jpg" alt="" height="100%">

      <div class="container">
        <div class="carousel-caption text-left">
          <h1>Creative thinking</h1>
          <p>Barcamp talks are usually about deeper meaning of things</p>
          <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item active carousel-item-left">
    <img src="<?php bloginfo('template_url');?>/images/header-2.jpg" alt="" height="100%">

      <div class="container">
        <div class="carousel-caption">
          <h1>Not your usual conference</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item carousel-item-next carousel-item-left">
    <img src="<?php bloginfo('template_url');?>/images/header-3.jpg" alt="" height="100%">

      <div class="container">
        <div class="carousel-caption text-right">
          <h1>Don't just listen, talk</h1>
          <p>Some representative placeholder content for the third slide of this carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<div class="container marketing">
  <!-- START THE FEATURETTES -->

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">What is BarCamp Bangalore? <span class="text-muted">#bcb22</span></h2>
      <p class="lead">BarCamp Bangalore is an unconference – an ad-hoc gathering born from the desire for people to share and learn in an open environment.</p>
      <p class="lead">BarCamp Bangalore is an opportunity for the Bangalore community to come together every year to learn, network, and discuss great ideas in person.</p>
      <p class="lead">We're coming back on <span id="page_home_hero_date">November 5, 2022, Saturday</span>, at the <a href="https://goo.gl/maps/m7ARhpVeEHAWxYYGA" target="_blank">RV University, Bangalore</a>.</p>
      <div class="calendar-options">
        <script src="https://cdn.jsdelivr.net/npm/add-to-calendar-button@1" async defer></script>
        <div class="atcb" >
            {
                "name":"Barcamp Bangalore",
                "description":"BarCamp Bangalore is an opportunity for the Bangalore community to come together every year to learn, network, and discuss great ideas in person.",
                "startDate":"2022-11-05",
                "endDate":"2022-11-05",
                "startTime":"09:00",
                "endTime":"17:00",
                "size": "5",
                "location":"RV University, near Pattanagere Metro, Bengaluru",
                "label":"Save a calendar reminder",
                "lightMode": "system",
                "options":[
                    "Apple",
                    "Google",
                    "iCal",
                    "Microsoft365",
                    "Outlook.com"
                ],
                "timeZone":"Asia/Kolkata",

                "inline":true,
                "listStyle":"modal",
                "iCalFileName":"bcb-2022-reminder"
            }
        </div>
      </div>
    </div>
    <div class="col-md-5">
    <img height="500px" src="<?php bloginfo('template_url');?>/images/hero-02.jpg" />
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">What is an Unconference? <span class="text-muted">Come and see for yourself.</span></h2>
      <p class="lead">Sessions are given on a variety of topics, and the day is created collaboratively – built by you and the other attendees who have a topic, story, knowledge, or experience to share with the rest of the community.</p>
    </div>
    <div class="col-md-5 order-md-1">
    <img height="500px" src="<?php bloginfo('template_url');?>/images/hero-01.jpg" />
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Meet the most outside-the-box thinkers in the city. <span class="text-muted">No, really.</span></h2>
      <p class="lead">Sessions include topics ranging from this, this, this, to that and that.</p>
    </div>
    <div class="col-md-5">
    <img height="500px" src="<?php bloginfo('template_url');?>/images/hero-03.jpg" />
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-12 text-center mb-10">
      <h1 class="display-3 pb-5">Sponsors</h1>
    </div>
    <div class="col-lg-4">
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
    <img height="100px" src="<?php bloginfo('template_url');?>/images/rvu_logo.svg" />

      <h2>Venue Sponsor</h2>
      <p>RV University, Bangalore</p>
      <p><a class="btn btn-primary" href="#">Sponsor us?</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

  <!-- /END THE FEATURETTES -->

</div>

<?php get_footer();?>
