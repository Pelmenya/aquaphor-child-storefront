<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>
  <?php wc_get_account_menu_items();?>

  <?php
      get_template_part('template-parts/footer/footer-desktop-tablet');
      get_template_part('template-parts/footer/footer-smart-phone');
  ?>

<!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>


</html>
