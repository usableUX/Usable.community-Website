<div class="col-md-4">
	<a href="<?php the_permalink(); ?>" class="updates__item">
		<div class="updates__item__title updates__type__event">
			<span class="updates__item__type"><?php the_category(); ?></span>
			<h3><?php the_title(); ?></h3>
			<span class="updates__item__source">
				<<<
				Andrey Haimershmuck >>>
			</span>
		</div>
		<div class="updates__item__meta event__date">
			<span class="event__date__day">19</span>
			<span class="event__date__month">December</span>
		</div>

		<i class="las la-long-arrow-alt-right"></i>

	</a>
</div>




	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?> </span>
		<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		<!-- /post details -->




	</article>
	<!-- /article -->


	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->
