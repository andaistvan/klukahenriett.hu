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
            Szülőként szeretnénk mindent megadni a gyerekünknek. Ugyanakkor tudjuk: egyszer majd el kell engednünk a kezét, hiszen mégiscsak ez az élet rendje.Ha alkalmassá tesszük őt arra, hogy boldoguljon és a legtöbbet hozza ki magából, akkor megtettünk érte mindent.
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

   </section><!-- konyv -->


   <section class="vasarlas">

      <div class="main-container">

         <h2>Vásárlás</h2>

<!-- form -->
         <div id="ninjaform-cont">

         </div>
<!-- form -->

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
               További információ a vásárlással kapcsolatban:<a href="mailto:info@klukahenriett.com"> <span>info@klukahenriett.com</span></a>
            </p>
         </div>



      </div><!-- main-container -->

   </section><!-- vasarlas -->


   <section class="hirek">
      <div class="brush-top"></div>
      <div class="brush-bottom"></div>
   </section><!-- hirek -->


   <section class="letoltes">

   </section><!-- letoltes -->


   <section class="bio">
      <div class="brush-top"></div>
   </section><!-- bio -->

</div><!-- page-content -->



<?php
get_footer();
?>
