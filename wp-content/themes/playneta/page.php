<?php get_header(); ?>

<section class="section-padding">
	<div class="container">

		<div class="row">
			<div class="col-lg-6">
				<article class="post-list mb-5 pb-4 border-bottom">
					<div class="post-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Magnam nesciunt architecto quaerat necessitatibus tenetur ratione eius numquam! elit. Earum in doloremque, odit quas repellat voluptatum illo nulla ullam sunt, enim animi eaque dolorem possimus saepe! Fuga voluptas sapiente, nemo sit.</p>

					</div>
				</article>
			</div>

			<div class="col-lg-6">
				<article class="post-list mb-5 pb-4 border-bottom">
					<div class="post-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Magnam nesciunt architecto quaerat necessitatibus tenetur ratione eius numquam! elit. Earum in doloremque, odit quas repellat voluptatum illo nulla ullam sunt, enim animi eaque dolorem possimus saepe! Fuga voluptas sapiente, nemo sit.</p>

					</div>
				</article>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="subscribe-home py-4 px-4 mb-5 bg-grey">
					<div class="form-group row align-items-center mb-0">
				    	<label for="colFormLabel" class="col-form-label col-sm-12 h2 col-lg-9">Форам регистрации в приложении</label>
					    <div class="col-sm-3">
					      <a href="#" class="btn btn-dark">Регистрация</a>
					    </div>
				  	</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="row">


	<?php 
		$query = new WP_Query( [
			'post_type' => 'post',
			'category_name' => 'home1',
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

<div class="row">

	<?php 
		$query = new WP_Query( [
			'post_type' => 'post',
			'category_name' => 'home1',
			'posts_per_page' => 3,
			// 'orderby'=> 'title'
		] );

		if ($query->have_posts()) {
			while ($query->have_posts()) {

				$query->the_post();
	?>

		<div class="col-lg-4 col-md-6">
			<article class="post-grid mb-5">

				<h3 class="post-title mt-1"><a href="<?php the_permalink() ?>"> <?php the_title() ?> </a></h3>

				<?php the_excerpt(); ?>
				
				
			</article>
		</div>

	<?php 
			}
			the_posts_pagination();
		}
	?>				
	
</div>
			</div>
			
<!-- 			<div class="m-auto">
				<div class="pagination mt-5 pt-4">
					<ul class="list-inline ">
						<li class="list-inline-item"><a href="#" class="active">1</a></li>
						<li class="list-inline-item"><a href="#">2</a></li>
						<li class="list-inline-item"><a href="#">3</a></li>
						<li class="list-inline-item"><a href="#" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
					</ul>
				</div>
			</div> -->
		</div>
	</div>
</section>


<?php get_footer(); ?>

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


</body>
</html>