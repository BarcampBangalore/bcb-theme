
</main>

<div class="container">
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="<?php bloginfo('template_url'); ?>/images/BCB-LOGO-02.png" alt="" height="24">
        <small class="d-block mb-3 text-muted">
          <!--[if lte IE 8]><span style="filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2); display: inline-block;"><![endif]-->
          <span style="-webkit-transform: rotate(180deg); -moz-transform: rotate(180deg); -o-transform: rotate(180deg); -khtml-transform: rotate(180deg); -ms-transform: rotate(180deg); transform: rotate(180deg); display: inline-block;">
            &copy;
          </span>
          <!--[if lte IE 8]></span><![endif]-->
          Copyleft. All Wrongs Reserved <a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a> &bull;
          Awesomely Powered by <a href="http://www.wordpress.org">WordPress</a> and
          <?php
          $result = count_users();
          echo $result['total_users'];
          ?> humans.
        </small>
      </div>
      <div class="col-6 col-md">
        <h5>Reach us</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" target="_blank" href="https://discord.gg/SqYxgd45wD">Discord</a></li>
          <li><a class="text-muted" target="_blank" href="https://twitter.com/barcampbng">Twitter</a></li>
          <li><a class="text-muted" target="_blank" href="https://www.facebook.com/barcampbng">Facebook</a></li>
          <li><a class="text-muted" target="_blank" href="https://www.meetup.com/Barcamp-Bangalore/">Meetup</a></li>
          <li><a class="text-muted" target="_blank" href="mailto:contact@barcampbangalore.com">Mail us</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" target="_blank" href="https://planning.barcampbangalore.com/">Blog</a></li>
          <li><a class="text-muted" target="_blank" href="https://github.com/barcampbangalore">Our code</a></li>
          <li><a class="text-muted" target="_blank" href="https://planning.barcampbangalore.com/call-for-sponsors-for-barcamp-bangalore-2022/">Be a sponsor</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" target="_blank" href="/about">About BCB</a></li>
          <li><a class="text-muted" target="_blank" href="/faq">FAQ</a></li>
          <li><a class="text-muted" target="_blank" href="https://planning.barcampbangalore.com/meet-the-team/">Team behind BCB</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
    <?php wp_footer(); ?>
</body>

</html>
