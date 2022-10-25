<?php /* Template Name: SchedulePage */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php echo wp_title('»', false, 'right') . " Barcamp Bangalore"; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png?v=PY4NNGXQPr">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon-32x32.png?v=PY4NNGXQPr">
<link rel="icon" type="image/png" sizes="256x256" href="<?php bloginfo('template_url'); ?>/images/favicon-256x256.png?v=PY4NNGXQPr">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicon-16x16.png?v=PY4NNGXQPr">
<link rel="manifest" href="manifest.json?v=PY4NNGXQPr">
<link rel="mask-icon" href="safari-pinned-tab.svg?v=PY4NNGXQPr" color="#5bbad5">
<link rel="shortcut icon" href="favicon.ico?v=PY4NNGXQPr">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
<script type="text/javascript">
  bcb_page_name = "<?php echo $post_slug; ?>";
</script>
<?php wp_head(); ?>

<body style="background: var(--color4)">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 schedule-header text-center">
        <img height="50px" src="<?php bloginfo('template_url'); ?>/images/logo-bcb22.png" alt="">
        <div>Welcome to BarCamp Bangalore 2022</div>
      </div>
    </div>
    <div class="row schedule-body">
      <div class="schedule-content-card-wrapper">
        <div class="schedule-content-card">
          <div class="row">
            <div class="col-3 schedule-content-card-time align-middle">
              10:00 - 10:45
            </div>
            <div class="col-9">
              <div class="schedule-content-card-title">Test Title</div>
              <div class="schedule-content-card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempora, odit eveniet reiciendis aspernatur nostrum voluptatum deserunt. Saepe sint impedit totam, corrupti autem a nemo, blanditiis veritatis distinctio minima quam!</div>
              <div class="schedule-content-card-room"><i class="fa fa-map-marker-alt" aria-hidden="true"></i> Erebor</div>
              <div class="schedule-content-card-speaker"><i class="fa fa-user" aria-hidden="true"></i> Gandalf</div>
            </div>
          </div>
        </div>
        <div class="schedule-content-card">
          <div class="row">
            <div class="col-3 schedule-content-card-time align-middle">
              10:45 - 11:30
            </div>
            <div class="col-9">
              <div class="schedule-content-card-title">Test Title 2</div>
              <div class="schedule-content-card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempora, odit eveniet reiciendis aspernatur nostrum voluptatum deserunt. Saepe sint impedit totam, corrupti autem a nemo, blanditiis veritatis distinctio minima quam!</div>
              <div class="schedule-content-card-room"><i class="fa fa-map-marker-alt" aria-hidden="true"></i> Hobbiton</div>
              <div class="schedule-content-card-speaker"><i class="fa fa-user" aria-hidden="true"></i> Bilbo</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>