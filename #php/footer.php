<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Visaid
 */

?>

<footer class="footer">
    <div class="footer__bg"></div>
    <div class="container footer__container">
        <div class="footer__wrapper">
            <div class="footer__title">Your data is is proteced</div>
            <div class="footer__divider"></div>
            <div class="footer__subtitle">We know the importance of privacy and make securing your data our top priority. So you can create with peace of mind.</div>
        </div>
    </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>


<?php wp_footer(); ?>

</body>
</html>
