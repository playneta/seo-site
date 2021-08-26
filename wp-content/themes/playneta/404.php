<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package playneta
 */

get_header();
?>

	<main id="primary" class="site-main">


<!-- 		<section class="error-404 not-found">
			<h1>Ошибка 404</h1>
			<h2>Данная страница не найдена! </h2>
			<p>Почему?</p>
			<p>Такой  страницы  не  существует –возможно  Вы  неправильно  ввели  адрес  в  адресной  строке браузера.</p>
			<p>Что можно сделать?</p>
			<p>Вы можете посетить <ahref="/">главную страницу</a>илидругие разделы сайта.</p>
		</section><!-- .error-404 --> -->
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'playneta' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'playneta' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'playneta' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$playneta_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'playneta' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$playneta_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
