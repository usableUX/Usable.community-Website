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
			<span class="updates__item__source">
				<<< Andrey Haimershmuck >>>
			</span>
		</div>
		<div class="updates__item__meta event__date">
			<span class="event__date__day">19</span>
			<span class="event__date__month">December</span>
		</div>

		<i class="las la-long-arrow-alt-right"></i>

	</a>
</div>
