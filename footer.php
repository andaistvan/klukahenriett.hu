<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
   <div class="main-container">

      <p>
         ©<?php echo date('Y'); ?> Kluka Henriett
      </p>
      <div id="social-media">
         <a href="mailto:info@klukahenriett.com"><img src="<?php bloginfo('template_url'); ?>/dev/img/icon-mail.svg" alt="e-mail ikon" /></a>
         <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/icon-facebook.svg" alt="facebook ikon" /></a>
         <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/icon-twitter.svg" alt="twitter ikon" /></a>
         <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/icon-googleplus.svg" alt="google plus ikon" /></a>
         <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/icon-instagram.svg" alt="instagram ikon" /></a>

      </div>

   </div>

</footer><!-- #colophon -->

</div><!-- #page -->

<!-- **********  off canvas  *************-->
   </div><!-- off-canvas-content -->
</div><!-- off-canvas-wrapper-inner -->
</div><!-- off-canvas-wrapper -->
<!-- **********  off canvas  *************-->

<?php wp_footer(); ?>

<script type="text/javascript">
$(document).foundation();
</script>


</body>
</html>
