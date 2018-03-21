<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caldera
 */

?>

</div><!-- #content -->

<footer id="colophon" <?php caldera_footer_class() ?> role="contentinfo">
	<?php get_template_part( 'template-parts/footer/layout', get_theme_mod( 'footer_layout_type' ) ); ?>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<script>
jQuery(document).ready(function() {
var placeholders = ["firstname", "lastname"];
var elements = jQuery(".owner-field-text"); //document.getElementsByClassName("input_text");
for (var i = 0; i < elements.length; i++) {
elements[i].setAttribute("data-field", placeholders[i]);
}
var placeholders = ["email"];
var elements = jQuery(".tc_owner_email"); //document.getElementsByClassName("input_text");
for (var i = 0; i < elements.length; i++) {
elements[i].setAttribute("data-field", placeholders[i]);
}
jQuery("input[name='buyer_data_first_name_post_meta']").blur(function(){
var first_name = jQuery("input[name='buyer_data_first_name_post_meta']").val();
jQuery("input[data-field='firstname']").val(first_name);
});
jQuery("input[name='buyer_data_last_name_post_meta']").blur(function(){
var last_name = jQuery("input[name='buyer_data_last_name_post_meta']").val();
jQuery("input[data-field='lastname']").val(last_name);
});
jQuery("input[name='buyer_data_email_post_meta']").blur(function(){
var email = jQuery("input[name='buyer_data_email_post_meta']").val();
jQuery("input[data-field='email']").val(email);
});
 });
 </script>
