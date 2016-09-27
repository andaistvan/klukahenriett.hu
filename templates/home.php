<?php
/*
Template Name: home
*/

 /**
  * The template for displaying all pages.
  *
  * This is the template that displays all pages by default.
  * Please note that this is the WordPress construct of pages
  * and that other 'pages' on your WordPress site may use a
  * different template.
  *
  * @link https://codex.wordpress.org/Template_Hierarchy
  */
 get_header();
?>


<div class="page-content">

   <section class="konyv">
      <div class="brush-bottom"></div>

      <div class="main-container">

         <!-- logo -->
         <a href="<?php echo esc_url(home_url('/'));  ?>" rel="home">
               <div class="logo-cont"></div>
         </a>
         <!-- logo -->
         <h1>KLUKA HENRIETT</h1>
         <h2>Szemedbe rejtve</h2>
         <p>
            Szülőként szeretnénk mindent megadni a gyerekünknek. Ugyanakkor tudjuk: egyszer majd el kell engednünk a kezét, hiszen mégiscsak ez az élet rendje. Ha alkalmassá tesszük őt arra, hogy boldoguljon és a legtöbbet hozza ki magából, akkor megtettünk érte mindent.
         </p>

         <div class="book-container">
            <div class="cell">
               <img src="<?php bloginfo('template_url'); ?>/dev/img/szemedbe-rejtve-cover.jpg" alt="Szemedbe rejtve borító" />
            </div>
            <div class="cell">
               <img src="<?php bloginfo('template_url'); ?>/dev/img/szemedbe-rejtve-back.jpg" alt="Szemedbe rejtve hátlap" />
            </div>
         </div>

         <p class="margin-bottom">
            Szemedbe rejtve<br>
            Ifjúsági kisregény<br>
            Füles, kartonált<br>
            128 oldal<br>
            ISBN 978-963-12-6390-9
         </p>

      </div><!-- main-container -->

   </section><!-- konyv **************************************** -->


   <section class="vasarlas">
      <a id="vasarlas-section"></a>

      <div class="main-container">
         <h2>Vásárlás</h2>

         <!-- form -->
         <div id="ninjaform-cont">
            <?php echo do_shortcode('[ninja_form id=2]') ?>
         </div>
         <!-- form -->

         <!-- vasarlasi-infok -->
         <div class="vasarlasi-infok">
            <h3>Ár: 2500,-</h3>
            <p>
               A kiszállítás díja 1-5 darab rendelése esetén bruttó 590 forint/ csomag. Kérjük, vedd figyelembe, hogy rendelésed elküldésével, elfogadod hatályos szerződési feltételeinket is.
            </p>
            <a href="#">
               <p>
                  <span>ÁSZF megtekintése</span>
               </p>
            </a>
            <p>
               További információ a vásárlással kapcsolatban:<a href="mailto:info@klukahenriett.com"><span>info@klukahenriett.com</span></a>
            </p>
         </div>
         <!-- vasarlasi-infok -->


         <!-- boltok -->
         <div class="placeholder40px"></div>
         <div class="placeholder40px"></div>
         <h2>Boltok</h2>

         <div class="bolt-lista">
            <div class="col1"><!-- left-col -->
               <div class="bolt-adat">
                  <p>
                     <span>Libri<br>Flórián Üzletközpont</span>
                     <br>1033 Budapest Flórián tér 5-9.
                  </p>
               </div><!-- bolt-adat -->
               <div class="bolt-adat">
                  <p>
                     <span>Libri<br>Flórián Üzletközpont</span>
                     <br>1033 Budapest Flórián tér 5-9.
                  </p>
               </div><!-- bolt-adat -->
            </div><!-- left-col -->

            <div class="col1"><!-- right-col -->
               <div class="bolt-adat">
                  <p>
                     <span>Libri<br>Flórián Üzletközpont</span>
                     <br>1033 Budapest Flórián tér 5-9.
                  </p>
               </div><!-- bolt-adat -->
               <div class="bolt-adat">
                  <p>
                     <span>Libri<br>Flórián Üzletközpont</span>
                     <br>1033 Budapest Flórián tér 5-9.
                  </p>
               </div><!-- bolt-adat -->
            </div><!-- right-col -->
         </div><!-- bolt-lista -->
         <!-- boltok -->


         <!-- e-book -->
         <div class="placeholder40px"></div>
         <h2>Ebook</h2>
         <div class="ebook">
            <p>
               A szemedbe rejtve hamarosan megvásárolható és letölthető e-könyv formátumban.
            </p>
            <div class="img-cont">
               <img src="<?php bloginfo('template_url'); ?>/dev/img/itunes-logo.png" alt="iTunes store logó" />
            </div>
            <div class="img-cont">
               <img src="<?php bloginfo('template_url'); ?>/dev/img/kobo-logo.png" alt="Kobo logó" />
            </div>

         </div><!-- ebook -->
         <!-- e-book -->

      </div><!-- main-container -->

   </section><!-- vasarlas ****************************************  -->


   <section class="hirek">
      <a id="hirek-section"></a>
      <div class="brush-top"></div>

      <div class="main-container">
         <div class="placeholder40px"></div>
         <h2>Hírek</h2>

         <ul id="recent-hirek">
            <?php query_posts('category_name=hirek&posts_per_page=2'); ?>

               <?php while (have_posts()) : the_post(); ?>
            <li class="post-container">
               <div class="layer1">
                  <div class="feat-img-cont">
                     <!-- check if the post or page has a Featured Image assigned to it. -->
                     <?php
                     if (has_post_thumbnail()) {
                         the_post_thumbnail();
                     }
                      ?>
                  </div>
               </div><!-- layer1 -->

               <div class="layer2">
                  <div class="excerpt-cont">
                     <div class="excerpt-inner">
                        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <p>
                            <?php the_excerpt() ?>
                        </p>
                        <a href="<?php echo get_permalink(); ?>"> Tovább...</a>
                     </div><!-- excerpt-inner -->
                  </div><!-- excerpt-cont -->
               </div><!-- layer2 -->
            </li><!-- post-container -->


            <?php endwhile; ?>
         </ul>


      </div><!-- main-container -->

      <div class="brush-bottom"></div>
   </section><!-- hirek **************************************** -->


   <section class="letoltes">
      <a id="letoltes-section"></a>
      <div class="main-container">
         <h2>Letöltések</h2>
         <?php dynamic_sidebar('offcanvas_widget'); ?><!-- off-canvas menu -->

      </div><!-- main-container -->
   </section><!-- letoltes **************************************** -->


   <section class="bio">
      <a id="bio-section"></a>
      <div class="brush-top"></div>

      <div class="main-container">
         <div class="placeholder40px"></div>
         <h2>Bio</h2>
         <div id="bio-cont">

            <div class="layer1">
               <div class="img-cont-outer">
                  <div class="bio-img-cont">
                     <img src="<?php bloginfo('template_url'); ?>/dev/img/heni-foto.jpg" alt="Kluka Henriett fotó" />
                  </div>
               </div><!-- img-cont-outer -->
            </div><!-- layer1 -->

            <div class="layer2">
               <div class="textbox-outer">
                  <div class="bio-text">
                     <p>
                        Kluka Henriett 1976-ban született Budapesten. Az ELTE BTK Olasz nyelv és irodalom szakán végzett, majd a BGE Külkereskedelmi Karán szerzett diplomát. Főként ezen a területen dolgozik a mai napig. Kislányával és férjével Budapest mellett él.
                     </p>
                     <p>
                        “Amikor közeledett az a bizonyos negyedik x, úgy éreztem legfőbb ideje abbahagyni a bohóckodást és elkezdeni végre írni”
                     </p>
                     <p>
                        Első könyve a <span>Szemedbe rejtve</span> 2016-ban jelent meg.
                     </p>
                  </div><!-- bio-text -->
               </div><!-- textbox-outer -->
            </div><!-- layer2 -->
            <h2>Bio</h2>


         </div><!-- bio-cont -->

      </div><!-- main-container -->



   </section><!-- bio **************************************** -->

</div><!-- page-content -->



<?php
get_footer();
?>
