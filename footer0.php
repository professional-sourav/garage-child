<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>
	</div><!-- #content -->

	<!-- MAIN FOOTER -->
	<footer id="footer-garage" class="site-footer">

		<div class="logo-holder text-center pt-5">
			<img src="/wp-content/uploads/2019/06/LOGO.png" alt="">
		</div>


		<div class="container widgets_wrapper">

		   	<div class="row">
		      <div class="col-12 col-sm-12 col-md-4 col-lg-4">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {

						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-1" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					</aside><!-- #secondary -->


		      </div>
		      <div class="col-12 col-sm-12 col-md-4 col-lg-4">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {

						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-2" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
					</aside><!-- #secondary -->


		      </div>
		      <div class="col-12 col-sm-12 col-md-4 col-lg-4">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {

						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-3" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
					</aside>

		      </div>

		   	</div> <!-- END ROW -->

		   	<div class="row">



		   	</div>

		</div> <!-- END WIDGET WRAPPER -->

		<section class="site-info container">

			<div class="">

	   			<?php

					if ( ! is_active_sidebar( 'footer-sidebar-4' ) ) {

						echo "Please Insert A Widget";
					}
				?>

				<aside id="footer-widget-4" class="widget-area">
					<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
				</aside>

	   		</div>

			<div class="copyright">

				<div class="">

					<span class="copy-right-text">
						<?php the_field('theme_footer_text', 'option') ?>
					</span>


					<a class="float-right" target="_blank" href="<?php echo esc_url( __( 'https://cyberizegroup.com/', 'moose-framework-2' ) ); ?>"><?php
						printf( esc_html__( 'Premium support & maintenance by %s', 'moose-framework-2' ), 'CyberizeFramework' );
					?></a>

				</div>

			</div>

		</section>

				<!--==============================================================================
				=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
				===============================================================================-->

<!-- 				<div style="color: white"><strong>Current template:</strong>  -->
					<?php // echo get_current_template( true ); ?>
<!-- 				</div> -->

				<!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<div id="MG-flotted-get-a-quote">
	<button type="button" data-toggle="modal" data-target="#modalGetQuote" title="Get a Quote">
	  <img src="<?php echo get_template_directory_uri() . '/assets/img/form-button.png' ?>" alt="Get a Quote">
	</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modalGetQuote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="GARAGE-thrive-header-form" class="MG-quote-wrapper form-box">
			<?php echo do_shortcode( '[gravityform id="9" title="true" description="true"]' ); ?>
		</div>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

<!--===========================================
=            CUSTOM ANALYTICS TAGS - FOOTER     =
============================================-->

	<?php the_field('before_bottom_body_tag_default', 'option'); ?>

	<?php the_field('before_bottom_body_tag'); ?>

<!--====  End of CUSTOM ANALYTICS TAGS  ====-->

</body>
</html>
