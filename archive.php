<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

<div class="page-content">

   <section class="blogstyle">
      <div class="main-container2">
         <div class="brush-top-small"></div>

		<?php
        if (have_posts()) : ?>

			<header class="page-header">
				<?php
                    the_archive_title('<h1 class="page-title">', '</h1>');
                    the_archive_description('<div class="archive-description">', '</div>');
                ?>
			</header><!-- .page-header -->

			<?php
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
   </div><!-- main-container2 -->

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
