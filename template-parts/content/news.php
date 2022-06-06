<section id="news-section" class="news-section">
	<div class="container">
		<div class="row news-content">
			<?php
			$args = array(
				'cat'                 => 4,
				'posts_per_page'      => 6,
			);
			$news_query = new WP_Query( $args );
			if ( $news_query->have_posts() ) :
				while ( $news_query->have_posts() ) :
					$news_query->the_post();
					?>
					<div class="col-12 col-lg-4">
						<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<article class="post-card">
								<?php the_post_thumbnail( 'news-lg-thumbnail' ); ?>
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
