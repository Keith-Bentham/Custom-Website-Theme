<?php

/*
	Template Name:Home Page
*/
/*
 	Advanced custom fields
 */
 //subscribe content field

$youtube_feature_title		= get_field('youtube_feature_title');
$youtube_feature			= get_field('youtube_feature');
	


get_header(); ?>

<!--==================== End of custom fields ======================== -->


<?php get_template_part('content','hero'); ?>
	
	
<?php get_template_part('content', 'optin'); ?>	

<?php get_template_part('content', 'instructor'); ?>			 
			
<?php get_template_part('content', 'features');?>
			
<?php get_template_part('content', 'projectfeatures');?>	

<?php get_template_part('content', 'benefits'); ?> 

<?php get_template_part('content', 'testimonals'); ?>


<!--
VIDEO FEATURETTE
=================================================  
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2><?php echo $youtube_feature_title; ?></h2>
					
					<?php echo $youtube_feature; ?>
					
				</div> 
			</div> 			
		</div> 
	</section> 
==================================================
-->



<?php
get_footer();
?>
