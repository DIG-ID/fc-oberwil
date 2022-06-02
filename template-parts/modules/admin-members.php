<section class="admin-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="section-subtitle"><?php the_field( 'vorstand_subtitle' ); ?></p>
				<div class="section-title-wrapper">
					<h2 class="section-title"><?php the_field( 'vorstand_title' ); ?></h2>
					<span></span>
				</div>
				<p class="description"><?php the_field( 'vorstand_description' ); ?></p>
			</div>
		</div>
		<div class="row">
			<?php
			// Check rows exists.
			if ( have_rows( 'vorstand_members' ) ) :
				while ( have_rows( 'vorstand_members' ) ) :
					the_row();
					$member_name     = get_sub_field( 'name' );
					$member_position = get_sub_field( 'position' );
					$member_image    = get_sub_field( 'image' );
					?>
						<div class="col-12 col-lg-4">
							<div class="member-card">
								<?php echo wp_get_attachment_image( $member_image, 'full' ); ?>
								<div class="member-card__content">
									<h3 class="member-card__name text-center"><?php echo esc_html( $member_name ); ?></h3>
									<p class="member-card__position text-center"><?php echo esc_html( $member_position ); ?></p>
								</div>
							</div>
						</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
