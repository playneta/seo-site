<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package playneta
 */

get_header();
?>

	<main id="primary" class="site-main">
<?php 

	the_post();
	get_template_part( 'template-parts/content', get_post_type() );
 ?>
		<section class="single-block-wrapper section-padding">	
			<div class="container">
				<div class="post-header mb-5 text-center">

				    <h2 class="post-title mt-2">
				        <?php the_title() ?>
				    </h2>

				    <div class="post-meta">
				        <span class="text-uppercase font-sm letter-spacing-1 mr-3"> <?php the_author(); ?> </span>
				        <span class="text-uppercase font-sm letter-spacing-1"><?php the_time('F jS, Y'); ?></span>
				    </div>
				    <div class="post-featured-image mt-5">
				        <?php the_post_thumbnail( '', 'class=img-fluid' ) ?>
				    </div>
			    </div>

			    <div class="row">
					<div class="col-lg-6 col-md-6">
							контекст меню
					</div>

					<div class="col-lg-6 col-md-6">
						<div class="mb-2">блок соц док</div>
						<div class="mb-6"> AUTOR </div>
					</div>
				</div>



				 <div class="row">


					<?php 
						$query = new WP_Query( [
							'post_type' => 'post',
							'author' => $curauth->user_id,
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



	</main><!-- #main -->

<?php

get_footer();
