<section id="news-section" class="news-section">
	<div class="container">
		<div class="row news-content">
			<?php
			//Protect against arbitrary paged values
			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
			$args  = array(
				'cat'   => 4,
				'paged' => $paged,
			);
			$news_query = new WP_Query( $args );
			if ( $news_query->have_posts() ) :
				while ( $news_query->have_posts() ) :
					$news_query->the_post();
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
		<div class="row justify-content-center align-items-center">
			<div class="col-6 text-center">
				<nav class="page-pagination">
					<?php
					$bignum = 999999999;
					echo paginate_links(
						array(
							'base'      => str_replace( $bignum, '%#%', esc_url( get_pagenum_link( $bignum ) ) ),
							'format'    => '',
							'current'   => max( 1, get_query_var( 'paged' ) ),
							'total'     => $news_query->max_num_pages,
							'prev_text' => '<i class="fco-icon-chevron-left" aria-hidden="true"></i>',
							'next_text' => '<i class="fco-icon-chevron-right" aria-hidden="true"></i>',
							'type'      => 'list',
							'end_size'  => 1,
							'mid_size'  => 1,
						)
					);
					fco_pagination();
					?>
				</nav>
			</div>
		</div>
	</div>
</section>
