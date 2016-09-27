<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

   <div class="page-content">

      <section class="blogstyle">
         <div class="main-container2">
            <div class="brush-top-small"></div>
         		<?php
                 if (have_posts()) :

                     if (is_home() && !is_front_page()) : ?>
         				<!-- <header>
         					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
         				</header> -->

         			<?php
                     endif;

                     /* Start the Loop */
                     while (have_posts()) : the_post();

                         /*
                          * Include the Post-Format-specific template for the content.
                          * If you want to override this in a child theme, then include a file
                          * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                          */
                         get_template_part('template-parts/content-hirek', get_post_format());

                     endwhile;

                     the_posts_navigation();

                 else :

                     get_template_part('template-parts/content', 'none');

                 endif; ?>

               <div class="brush-bottom-small"></div>
           </div><!-- main-container -->

           <section class="footer2">
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
           </section><!-- section footer2 -->


      </section><!-- section blogstyle -->
   </div><!-- page-content -->

<?php
get_footer();
