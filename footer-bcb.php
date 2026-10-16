<?php
/**
 * Footer for the revamped pages. Closes the .bcb-page wrapper opened in header-bcb.php.
 */
?>

  <!-- FOOTER -->
  <footer class="bcb-footer">
    <div>
      <img class="bcb-footer__logo" src="<?php echo esc_url(bcb_asset(bcb_cfg('images.logo', 'images/logo-bcb-no-year.png'))); ?>" alt="<?php echo esc_attr(bcb_cfg('event.name', 'BarCamp Bangalore')); ?>">
      <div class="bcb-footer__copy">
        <span style="display:inline-block; transform:rotate(180deg);">©</span>
        <?php echo bcb_text(bcb_cfg('footer.copy')); ?>
      </div>
    </div>
    <nav class="bcb-footer__social">
      <?php foreach (bcb_cfg_list('footer.social') as $social) : ?>
      <a href="<?php echo esc_url($social['url']); ?>" target="_blank" rel="noopener"><?php echo bcb_text($social['label']); ?></a>
      <?php endforeach; ?>
    </nav>
  </footer>

</div>
<?php wp_footer(); ?>
</body>
</html>
