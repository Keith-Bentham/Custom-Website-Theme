<?php 
	
$youtube_feature_title		= get_field('youtube_feature_title');
$youtube_feature			= get_field('youtube_feature');
	
	
?>


	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2><?php echo $youtube_feature_title; ?></h2>
					
					<?php echo $youtube_feature; ?>
					
				</div><!-- end col -->
			</div><!-- row -->			
		</div><!-- container -->
	</section><!-- featurette -->