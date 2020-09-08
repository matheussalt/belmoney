<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<div class="newsletter">
  <div class="container">
    <h4>Newsletter</h4>
    <?php echo do_shortcode('[contact-form-7 id="58" title="Newsletter"]'); ?>
  </div>
</div>

<footer class="footer">
  <div class="container">
    <div class="footer-header">
      <img class="logo-footer" src="<?=get_template_directory_URI()?>/img/src/logo.svg" alt="Logotipo Belmoney" />

      <ul class="footer-social">
        <!-- <li>
          <a href="https://facebook.com" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#facebook"></use>
            </svg>
          </a>
        </li>

        <li>
          <a href="https://twitter.com" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#twitter"></use>
            </svg>
          </a>
        </li>

        <li>
          <a href="https://youtube.com" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#youtube"></use>
            </svg>
          </a>
        </li>

        <li>
          <a href="https://instagram.com" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#instagram"></use>
            </svg>
          </a>
        </li> -->

        <li>
          <a href="https://www.linkedin.com/company/belmoney.be/about/" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#linkedin"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>

    <nav class="sitemap">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'Sitemap' ) ); ?>
    </nav>
  </div>
</footer>

<div style="display: none;">
  <?php include 'svg.php'; ?>
</div>

<script src="<?=get_template_directory_URI()?>/app/app.js"></script>

<?php wp_footer(); ?>

</body>

</html>