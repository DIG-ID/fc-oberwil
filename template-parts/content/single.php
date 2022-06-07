<section id="single-content-section" class="single-content-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
<section id="post-nav-section" class="post-nav-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
				the_post_navigation(
					array(
						'next_text' => '<div class="link-content"><span class="next-post">' . __( 'Next post', 'fc-oberwil' ) . '</span> ' . '<span class="post-title">%title</span></div><span class="link-divider"></span><i class="fco-icon-chevron-right"></i>',
						'prev_text' => '<i class="fco-icon-chevron-left"></i><span class="link-divider"></span><div class="link-content"><span class="previous-post">' . __( 'Previous post', 'fc-oberwil' ) . '</span> ' . '<span class="post-title">%title</span></div>',
					)
				);
				?>
			</div>
		</div>
	</div>
</section>
