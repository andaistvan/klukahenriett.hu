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
</footer><!-- #colophon -->

</div><!-- #page -->

<!-- **********  off canvas  *************-->
   </div><!-- off-canvas-content -->
</div><!-- off-canvas-wrapper-inner -->
</div><!-- off-canvas-wrapper -->
<!-- **********  off canvas  *************-->
<?php wp_footer(); ?>
<!-- sticky menu -->


<script type="text/javascript">
$(document).foundation();
</script>
<!--
<script type="text/javascript">
        $(document).ready(function () {
            $(document).foundation();
        });

        $(window)
        .load(function() {
            SetOffCanvasHeight();
        })
        .resize(function() {
            SetOffCanvasHeight();
        });

        function SetOffCanvasHeight() {
            var height = $(window).height();
            var contentHeight = $(".off-canvas-content").height();
            if (contentHeight > height) { height = contentHeight; }

            $(".off-canvas-wrapper").height(height);
            $(".off-canvas-wrapper-inner").height(height);
            $(".off-canvas").height(height);
        }
    </script>  -->

<script type="text/javascript">
var menu = document.querySelector('nav#site-navigation.main-navigation');
var menuPosition = menu.getBoundingClientRect();
var placeholder = document.createElement('div');
placeholder.style.width = menuPosition.width + 'px';
placeholder.style.height = menuPosition.height + 'px';
var isAdded = false;

window.addEventListener('scroll', function() {
if (window.pageYOffset >= menuPosition.top && !isAdded) {
     menu.classList.add('sticky');
     menu.parentNode.insertBefore(placeholder, menu);
     isAdded = true;
} else if (window.pageYOffset < menuPosition.top && isAdded) {
     menu.classList.remove('sticky');
     menu.parentNode.removeChild(placeholder);
     isAdded = false;
}
});
</script>


</body>
</html>
