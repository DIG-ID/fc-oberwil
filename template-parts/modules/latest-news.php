<section id="lastest-news-section" class="latest-news-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="section-subtitle"><?php the_field( 'news_section_subtitle' ); ?></p>
				<div class="section-title-wrapper">
					<h2 class="section-title"><?php the_field( 'news_section_title' ); ?></h2>
					<span></span>
				</div>
				<p class="section-description"><?php the_field( 'news_section_description' ); ?></p>
			</div>
		</div>
		<div class="row latest-news-content">
			<?php
			$args = array(
				'cat'                 => 4,
				'posts_per_page'      => 3,
				'ignore_sticky_posts' => 1,
				'post__not_in'        => get_option( 'sticky_posts' ),
			);
			$latestnews_query = new WP_Query( $args );
			if ( $latestnews_query->have_posts() ) :
				$i = 0;
				while ( $latestnews_query->have_posts() ) : $latestnews_query->the_post();
					$i++;
					switch ($i) :
						case 1:
							echo '<div class="col-12 col-lg-6">';
							echo '<div class="row flex-column justify-content-between h-100">';
							?>
							<div class="col-12">
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
							break;
						case 2:
							?>
							<div class="col-12">
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
							echo '</div>';
							echo '</div>';
							break;
						case 3:
							?>
							<div class="col-12 col-lg-6">
								<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<article class="post-card post-card--lg">
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
											<div class="post-description d-xl-none"><?php the_excerpt(); ?></div>
											<div class="post-date">
												<i class="fco-icon-clock"></i>
												<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
											</div>
										</div>
									</article>
								</a>
							</div>
							<?php
							break;
					endswitch;
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
