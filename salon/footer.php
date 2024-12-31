<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package salon
 */

?>

<footer class="footer">
    <div class="footer__content">
      <div class="footer__logo">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Owner’s Salon"></a>
      </div>
      <p class="copyright">Copyright &copy;2023 by <span>Owner’s SALON</span>, alright reserves</p>
      <div class="footer__links">
        <ul>
          <li><a href="#">会社概要</a></li>
          <li><a href="#">THE SALONSについて</a></li>
          <li><a href="#">店舗</a></li>
          <li><a href="#">不動産オーナーの方へ</a></li>
        </ul>
      </div>
      <div class="footer__social">
        <ul>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_fb.png" alt="facebook"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_it.png" alt="instagram"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_tw.png" alt="twitter"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_tt.png" alt="tiktok"></a></li>
        </ul>
      </div>
    </div>
  </footer>
<?php wp_footer(); ?>

</body>
</html>
