<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>



<?php wp_footer(); ?>

<!-- SIGN UP SECTION
	================================================== -->
	<section id="signup" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>If any of these projects interest you sign up, lets get to the <strong>next level</strong></h2>
					<p><a href="" class="btn btn-lg btn-block btn-success">Sign me up!</a></p>
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- signup -->


	<!-- FOOTER
	================================================== -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/keith11.png" alt="Keith Bentham"></a></p>
			</div><!-- end col -->
			<div class="col-sm-6">
				<?php
						wp_nav_menu(array(
			'theme_location'	=> 'primary',
			'container'			=> 'nav',
			'menu_class'		=> 'list-unstyled list-inline'
						));
						
						
					?>
			</div><!-- end col -->
			<div class="col-sm-3">
				<p class="pull-right"> <!-- <?php bloginfo('name'); ?> -->   <?php the_author(); ?> &copy;    <?php echo date('Y'); ?></p>
			</div><!-- end col -->
		</div><!-- container -->
	</footer>


		
		
		
		
	<!-- MODAL
	================================================== -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
				</div><!-- modal-header -->
				
				<div class="modal-body">
					<p>Simply enter your name and email!</em></p>
					
					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first name</label>
							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
						</div>
						<div class="form-group">
							<label class="sr-only" for="subscribe-email">and your email</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
						</div>
						<input type="submit" class="btn btn-danger" value="Subscribe!">
					</form>
					
					<hr>
					
					<p><small>By providing your email you consent to receiving occasional updates to my workspace. <br>No Spam. Just good stuff. I respect your privacy &amp; you may unsubscribe at any time.</small></p>
				</div><!-- modal-body -->
				
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>    
    <script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>
    
    <script src="//use.typekit.net/gla7wnd.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>


</body>
</html>
