<section id="related-news-section" class="related-news-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="section-subtitle"><?php _e( 'Related' ); ?></p>
				<div class="section-title-wrapper">
					<h2 class="section-title"><?php _e( 'News' ); ?></h2>
					<span></span>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			$args = array(
				'post__not_in'        => array( get_the_ID() ),
				'posts_per_page'      => 3,
				'ignore_sticky_posts' => 1,
			);
			$related_posts = new WP_Query( $args );
			if ( $related_posts->have_posts() ) :
				while ( $related_posts->have_posts() ) :
					$related_posts->the_post();
					?>
					<div class="col-12 col-lg-4">
						<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<article class="post-card">
								<?php if ( has_post_thumbnail( ) ) : ?>
									<?php the_post_thumbnail( 'news-lg-thumbnail' ); ?>
								<?php else : ?>
									<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/imgs/post-thumbnail-default-2.png' ); ?>" alt="fc oberwill default news thumbnail" >
								<?php endif; ?>
								<div class="post-content">
									<?php
									$post_tags = get_the_tags();
									if ( ( $post_tags ) ) :
										echo '<ul class="post-cat">';
										foreach( $post_tags as $post_tag ) :
											echo '<li>' . esc_html( $post_tag->name ) . '</li>';
										endforeach;
										echo '</ul>';
									endif;
									?>
									<?php the_title( '<h3 class="post-title">', '</h3>' ); ?>
									<div class="post-description"><?php the_excerpt(); ?></div>
									<div class="post-date">
										<i class="fco-icon-clock"></i>
										<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
									</div>
								</div>
							</article>
						</a>
					</div>
					<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
