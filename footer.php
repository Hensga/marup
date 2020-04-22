<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marup
 */

?>

	</div><!-- #content -->

	
		<!-- Footer -->
	<footer class="page-footer font-small mdb-color pt-4 container-fluid">

			<!-- Footer Links -->
			<div class="container text-center text-md-left">

			<!-- Footer links -->
			<div class="row text-center text-md-left mt-3 pb-3">

				<!-- Grid column -->
				<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
				<h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
				<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
					consectetur
					adipisicing elit.</p>
				</div>
				<!-- Grid column -->

				<hr class="w-100 clearfix d-md-none">

				<!-- Grid column -->
				<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 footer-menu-first">
				<h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
					<?php
								wp_nav_menu( array(
									'theme_location' 	=> 'menu-3',
									'menu' 			=> 'Footer-Left',
									'container'		=> 'ul',
									'items_wrap'		=> '<ul>%3$s</ul>'
									)
								);
											
					?>
				</div>
				<!-- Grid column -->

				<hr class="w-100 clearfix d-md-none">

				<!-- Grid column -->
				<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
				<h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
					<?php
									wp_nav_menu( array(
										'theme_location' 	=> 'menu-4',
										'menu' 			=> 'Footer-Right',
										'container'		=> 'ul',
										'items_wrap'		=> '<ul>%3$s</ul>'
										)
									);
												
						?>
				</div>

				<!-- Grid column -->
				<hr class="w-100 clearfix d-md-none">

				<!-- Grid column -->
				<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
				<h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
				<p>
					<i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
				<p>
					<i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
				<p>
					<i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
				<p>
					<i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
				</div>
				<!-- Grid column -->

			</div>
			<!-- Footer links -->

			<hr>

			<!-- Grid row -->
			<div class="row d-flex align-items-center">

				<!-- Grid column -->
				<div class="col-md-7 col-lg-8">

				<!--Copyright-->
				<p class="text-center text-md-left">
					<strong>
						<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'marup' ), 'Mårup', '<a href="https://henninghuth.com">Henning Huth</a>' );
						?>
					</strong>
				</p>

				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-5 col-lg-4 ml-lg-0">

				<!-- Social buttons -->
				<div class="text-center text-md-right">
					<ul class="list-unstyled list-inline">
					<li class="list-inline-item">
						<a class="btn-floating btn-sm rgba-white-slight mx-1">
						<i class="fab fa-facebook"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn-floating btn-sm rgba-white-slight mx-1">
						<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn-floating btn-sm rgba-white-slight mx-1">
						<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn-floating btn-sm rgba-white-slight mx-1">
						<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
					</ul>
				</div>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

			</div>
			<!-- Footer Links -->

			</footer>
	<!-- Footer -->
		
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
