<?php get_header();?>

<!– Это устанавливает переменную $curauth–>

<?php

if(isset($_GET['author_name'])) :

$curauth = get_userdatabylogin($author_name);

else :

$curauth = get_userdata(intval($author));

endif;

?>

<?php
/* breadcrumb Yoast */
if ( function_exists( 'yoast_breadcrumb' ) ) :
yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
endif;

?>

<section class="slider mt-4">
	<div class="container-fluid">
		<div class="row no-gutters">
			<div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
				<!– Цикл –>
				 
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	            <div class="slider-item">
	               <div class="slider-item-content">
						<div class="post-thumb mb-4">
							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail( '', 'class=img-fluid' ) ?>
							</a>
						</div>

						<div class="slider-post-content">
							<h3 class="post-title mt-1"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							<span class=" text-muted  text-capitalize"><?php the_time('d M Y'); ?></span>
						</div>
	               </div>
	            </div>
				 
				<?php endwhile; else: ?>

				<?php endif; ?>
				<!– Конец цикла –>


            </div>
		</div>
	</div>
</section>



<section>
	<div class="container">


	    <div class="row">
            <div class="col-sm-12">
            	<div class="text-center">
                   <h2 class="lg-title"><?php echo $curauth->nickname; ?></h2>
                </div>
                <div class="text-center">
                   <h2 class="lg-title"><?php echo get_avatar( get_the_author_email() ); ?></h2>
                </div>
            </div>
        </div>


		<div class="row justify-content-center mt-5">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-6">
					<h5 class="text-uppercase letter-spacing mb-4">Who is me?</h5>
					<p><?php echo $curauth->user_description; ?></p>

				</div>
			</div>

			
		</div>
		</div>

		<div class="row">


			<?php 
				$query = new WP_Query( [
					'post_type' => 'post',
					'author' => $curauth->user_id,
					'posts_per_page' => 6,
					'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
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
						<span class="text-muted letter-spacing text-uppercase font-sm">June 15, 2019</span>
						
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




<?php

get_footer();
?>

<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="<?php bloginfo('template_directory') ?>/plugins/jquery/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script src="<?php bloginfo('template_directory') ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/plugins/bootstrap/js/popper.min.js"></script>
<!-- Owl caeousel -->
<script src="<?php bloginfo('template_directory') ?>/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/plugins/slick-carousel/slick.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/plugins/magnific-popup/magnific-popup.js"></script>
<!-- Instagram Feed Js -->
<script src="<?php bloginfo('template_directory') ?>/plugins/instafeed-js/instafeed.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="<?php bloginfo('template_directory') ?>/plugins/google-map/gmap.js"></script>
<!-- main js -->
<script src="<?php bloginfo('template_directory') ?>/js/custom.js"></script>
