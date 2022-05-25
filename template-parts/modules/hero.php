<?php
/**
 * Displays the hero/slider section on the home page.
 */
?>

<section id="hero-section" class="hero-section">
	<?php
	$args = array(
		'cat'            => 4,
		'posts_per_page' => 3,
		'post__in'       => get_option( 'sticky_posts' ),
	);
	$news_query = new WP_Query( $args );
	?>
	<?php if ( $news_query->have_posts() ) : ?>
		<div class="swiper hero-swiper">
			<div class="swiper-wrapper">
				<?php	while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
					<div class="swiper-slide">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="hero-banner-wrapper">
								<?php the_post_thumbnail( 'hero-banner' ); ?>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-12 col-sm-12 col-md-12 col-lg-7">
										<?php the_title( '<h2>', '</h2>' ); ?>
										<a href="<?php the_permalink(); ?>" class="btn-hero" ><?php esc_html_e( 'Weiterlesen', 'fc-oberwil' ); ?></a>
									</div>
								</div>
							</div>
						</article>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	<?php endif; ?>
	<?php rewind_posts(); ?>
	<?php if ( $news_query->have_posts() ) : ?>
		<div class="swiper hero-swiper-thumbs container">
			<div class="swiper-wrapper row">
				<?php	while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
					<div class="swiper-slide col-4">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php
						$post_tags = get_the_tags();
							if ( ( $post_tags ) ) :
									echo '<ul>';
									foreach( $post_tags as $post_tag ) :
										echo '<li>' . esc_html( $post_tag->name ) . '</li>';
									endforeach;
									echo '</ul>';
							endif;
							?>
							<?php the_title( '<p>', '</p>' ); ?>
							<div class="post-date">
								<svg xmlns="http://www.w3.org/2000/svg" width="13.521" height="13.521" viewBox="0 0 13.521 13.521"><defs><style>.a{fill-rule:evenodd;}</style></defs><path class="a" d="M6.76,12.676A5.915,5.915,0,1,0,.845,6.76,5.915,5.915,0,0,0,6.76,12.676Zm6.76-5.915A6.76,6.76,0,1,1,6.76,0,6.76,6.76,0,0,1,13.521,6.76Z"/><path class="a" d="M16.173,6.75a.423.423,0,0,1,.423.423v4.4l2.745,1.568a.423.423,0,0,1-.419.734l-2.958-1.69a.423.423,0,0,1-.213-.367V7.173A.423.423,0,0,1,16.173,6.75Z" transform="translate(-9.835 -4.215)"/></svg>
								<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
							</div>
						</article>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</section>
