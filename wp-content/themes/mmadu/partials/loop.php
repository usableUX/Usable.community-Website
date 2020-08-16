<div class="col-md-4">
	<a href="<?php the_permalink(); ?>" class="updates__item">
		<div class="updates__item__title updates__type__event">
			<span class="updates__item__type">
				<?php
					$categories = get_the_category();

					if ( ! empty( $categories ) ) {
					    echo esc_html( $categories[0]->name );
					}
				?>
			</span>
			<h3><?php the_title(); ?></h3>
			<!-- <span class="updates__item__source">
				<<< Andrey Haimershmuck >>>
			</span> -->
		</div>

		<?php
			if (! empty(get_field('event_date'))){  //if the event_date isset
				$datetimestamp = strtotime( get_field('event_date'));
		?>
		<div class="updates__item__meta event__date">
			<span class="event__date__day"><?php echo date_i18n( "d", $datetimestamp); ?></span>
			<span class="event__date__month"><?php echo date_i18n( "F", $datetimestamp); ?></span>
		</div>

		<?php } ?>

		<i class="las la-long-arrow-alt-right"></i>

	</a>
</div>
