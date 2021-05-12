<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package playneta
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<section class="single-block-wrapper section-padding">	
			<div class="container">
				<div class="post-header mb-5 text-center">

				    <h2 class="post-title mt-2">
				        <?php the_title() ?>
				    </h2>

				    <div class="post-featured-image mt-5">
				        <?php the_post_thumbnail( '', 'class=img-fluid' ) ?>
				    </div>
			    </div>

			    <div class="row">

					<div class="col-lg-6 col-md-6">
							<div class="sidebar-widget category mb-5">
								<h4 class="text-center widget-title">Навигация по статье</h4>
							 	<?php the_field('context_menu') ?>
							</div>
							
					</div>

					<div class="col-lg-6 col-md-6">
						<div class="mb-2 sidebar-widget about mb-5 text-center p-3 border-bottom">
							<?php the_field('social_approve') ?>
						</div>
						<div class="mb-6"> 

							<div class="sidebar-widget about mb-5 text-center p-3">
								<div class="about-author">
									<?php echo get_avatar( get_the_author_email() ); ?>
								</div>
								<h4 class="mb-0 mt-4"><?php echo the_author_posts_link(); ?></h4>

								<p><?php echo get_the_author_description(); ?></p>
								<img src="images/liammason.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>

		<?php
		the_content();
		?>

				 <div class="row">


					<?php 
						$query = new WP_Query( [
							'post_type' => 'post',
							'author' => get_the_author_nickname(),
							'posts_per_page' => 1
						] );

						if ($query->have_posts()) {
							while ($query->have_posts()) {

								$query->the_post();
					?>

						<div class="col-lg-4 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="<?php the_permalink() ?>">
									<?php the_post_thumbnail( '', 'class=img-fluid' ) ?>
								</a>
								<h3 class="post-title mt-1"><a href="<?php the_permalink() ?>"> <?php the_title() ?> </a></h3>
								<span class="text-muted letter-spacing text-uppercase font-sm"><?php the_time('F jS, Y') ?></span>
								
							</article>
						</div>

					<?php 
							} ?>

							<?php the_posts_pagination(); ?>
					<?php		
						}
					?>				
			
				</div>

			</div>
		</section>

</article><!-- #post-<?php the_ID(); ?> -->

