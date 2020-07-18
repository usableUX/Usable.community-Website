<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<section class="post <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
			<div class="container">
				<!-- post header -->
				<div class="row justify-content-around post__header">
					<div class="col-12 col-sm-9">
						<div class="post__header__title">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>



					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists
						/* grab the url for the full size featured image */
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

					?>
					<div class="col-md-12">
						<div class="post__header__image" title="<?php the_title(); ?>" style="background-image:url(<?php echo $featured_img_url; ?>);" class="inline-image" role="presentation">
						</div>
					</div>
					<?php endif; ?>

				</div>
				<!-- /post header -->


	            <div class="row justify-content-around">
	                <div class="col-12 col-md-7">
	                    <div class="post__reading">
							<!-- post details -->

							<?php the_content(); // Dynamic Content ?>
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
