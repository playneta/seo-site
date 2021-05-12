<section class="footer-2 section-padding gray-bg pb-5">
	<div class="container">
		<div class="footer-btm">
			<div class="row">
				<div class="col-lg-12">
					<?php wp_nav_menu( array(
	              		'theme_location'  => 'footer_menu',
	              		'menu'            => '',
	              		'container'       => 'ul',
	              		'container_class' => 'list-inline footer-socials-2 text-center',
	              		'container_id'    => '',
	              		'menu_class'      => 'list-inline footer-socials-2 text-center',
	              		'menu_id'         => '',
	              		'echo'            => true,
	              		'fallback_cb'     => 'wp_page_menu',
	              		'before'          => '',
	              		'after'           => '',
	              		'link_before'     => '',
	              		'link_after'      => '',
	              		'items_wrap'      => '<ul id = "%1$s" class = " %2$s">%3$s </ul>',
	              		'depth'           => 0,
	              		'walker'          => '',
	              	) ); ?>
				</div>
			</div>
		</div>
	</div>
</section>	