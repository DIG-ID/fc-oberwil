<div class="team">
	<div class="container-fluid team-image g-0">
		<div class="row g-0">
			<div class="col-12">
				<?php $team_img = get_the_post_thumbnail( get_the_ID(), 'full-team' ); ?>
				<?php if ( $team_img ) : ?>
					<?php echo wp_kses_post( $team_img ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="container team-content">
		<div class="row">
			<div class="col-12">
				<h3 class="team-name"><?php the_title(); ?></h3>
				<hr>
				<p class="description"><?php the_field( 'page_intro_description' ); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<p class="team-players-names">
					<?php
					if ( have_rows( 'players' ) ) :
						$team_player_names = array();
						while ( have_rows( 'players' ) ) :
							the_row();
							$player_name = get_sub_field( 'player_name' );
							$team_player_names[] = $player_name;
						endwhile;
						echo implode( ', ', $team_player_names );
					endif;
					?>
				</p>
			</div>
		</div>
		<div class="row">
			<?php if ( get_field( 'coach' ) ) : ?>
				<div class="col-12 col-md-12 col-lg-6 col-xl-6 ">
					<div class="staff-card">
						<?php $staff_image = wp_get_attachment_image( get_field( 'coach_image' ), 'staff_portrait' ); ?>
						<?php if ( $staff_image ) : ?>
							<?php echo $staff_image; ?>
						<?php endif; ?>
						<div class="staff-card__content">
							<h4 class="staff-card__name"><?php the_field( 'coach_name' ); ?></h4>
							<p class="staff-card__position"><?php the_field( 'coach_position' ); ?></p>
							<p class="staff-card__description"><?php the_field( 'coach_description' ); ?></p>
						</div>
				</div>
				</div>
			<?php endif; ?>
			<?php if ( get_field( 'assistent' ) ) : ?>
				<div class="col-12 col-md-12 col-lg-6 col-xl-6 ">
					<div class="staff-card">
						<?php $staff_image = wp_get_attachment_image( get_field( 'assistent_image' ), 'staff_portrait' ); ?>
						<?php if ( $staff_image ) : ?>
							<?php echo $staff_image; ?>
						<?php endif; ?>
						<div class="staff-card__content">
							<h4 class="staff-card__name"><?php the_field( 'assistent_name' ); ?></h4>
							<p class="staff-card__position"><?php the_field( 'assistent_position' ); ?></p>
							<p class="staff-card__description"><?php the_field( 'assistent_description' ); ?></p>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
