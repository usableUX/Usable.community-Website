<?php get_header(); ?>


	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	        <div class="container">
				<div class="eventHeader">
					<div class="row justify-content-between">

						<div class="col-sm-4">
							<div class="eventHeader__information">

								<div class="eventHeader__category">
									<?php
										$categories = get_the_category();

										if ( ! empty( $categories ) ) {
										    echo esc_html( $categories[0]->name );
										}
									?>
								</div>
								<h3 class="eventHeader__title"><?php the_title(); ?></h3>
								<div class="eventHeader__meta">
									<div class="eventHeader__meta__item">
										<i class="lar la-calendar"></i>
										<span class="eventHeader__meta__date"><?php the_field('event_date'); ?> </span>
									</div>
									<div class="eventHeader__meta__item">
										<i class="las la-map-marker-alt"></i>
										<?php the_field('event_location'); ?>
									</div>
								</div>

								<div class="eventHeader__cta">


									<?php
									$rsvp_link = get_field('rsvp_link');

									if( $rsvp_link ):
									    $rsvp_link_url = $rsvp_link['url'];
									    $rsvp_link_title = $rsvp_link['title'];
									    $rsvp_link_target = $rsvp_link['target'] ? $rsvp_link['target'] : '_self';

									    ?>

										<a  href="<?php echo esc_url( $rsvp_link_url ); ?>" target="<?php echo esc_attr( $rsvp_link_target ); ?>">
											<?php
												if ($rsvp_link_title){
													echo esc_html( $rsvp_link_title ); }
												else{
													echo "RSVP";
												}
											?>
										</a>
									<?php endif; ?>

									<?php if( get_field('event_status') == 'no' ): ?>
										<div class="eventHeader__cta__disclaimer">
											This is a MEMBER ONLY event. Join the community for access.
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="eventHeader__right">
								<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists
									/* grab the url for the full size featured image */
									$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

								?>
									<div class="eventHeader__photo" role="presentation" title="<?php the_title(); ?>"
										style="background-image:url(<?php echo $featured_img_url; ?>);"></div>
								<?php endif; ?>

								<?php get_template_part('partials/event-speakers'); ?>
							</div>
						</div>

					</div>
				</div>

	            <div class="event__copy">
	                <div class="row justify-content-between">
	                    <div class="col-12 col-sm-7">
	                        <?php the_content(); // Dynamic Content ?>
	                    </div>
	                    <div class="col-12 col-sm-3">
	                    <div class="sidebar">
	                        <div class="sidebar__module ">
	                            <div class="socialsharing">
	                                <h5>Share with friends</h5>
	                                <ul>
	                                    <li><a href="" class="social-color-facebook"><i class="lab la-facebook"></i></a></li>
	                                    <li><a href="" class="social-color-facebook"><i class="lab la-twitter"></i></a></li>
	                                    <li><a href="" class="social-color-whatsapp"><i class="lab la-whatsapp"></i></a></li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                </div>
	            </div>
	        </div>
	    </section>



		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>


	<!-- /section -->
	</main>

<?php get_footer(); ?>
