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

<?php
/* breadcrumb Yoast */
if ( function_exists( 'yoast_breadcrumb' ) ) :
yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
endif;

?>
				<div class="post-header mb-5 text-center">

				    <h1 class="post-title mt-2">
				        <?php the_title() ?>
				    </h1>

				    <div class="post-featured-image mt-5">
				        <?php the_post_thumbnail( '', 'class=img-fluid' ) ?>
				    </div>
			    </div>

			    <div class="row">

					<div class="col-lg-6 col-md-6">
							<div class="sidebar-widget category mb-5">
								<div class="text-center widget-title h4"><b>Навигация по статье</b></div>
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
								<div class="mb-0 mt-4 h4"><b><?php echo the_author_posts_link(); ?></b></div>

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
							'posts_per_page' => 3
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
								<div class="post-title mt-1 h3"><a href="<?php the_permalink() ?>"> <b><?php the_title() ?></b> </a></div>
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

