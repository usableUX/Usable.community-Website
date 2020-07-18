<?php
    // Get the latest 3 posts.
    // Only published posts. And if none, don't display this section.

    $conditions = array(
        'posts_per_page' => 3,
        'post_type' => array( 'post', 'post_type_event' ),
        'post_status' => array('publish'),
    );

    $latest_posts = new WP_Query( $conditions );

    if ($latest_posts->have_posts()):
?>

<section class="updates">
    <div class="container">
        <div class="row">
            <div class="col-12 snippet__header">
                <h2 class="snippet__header__title">Community Updates</h2>
                <p class="snippet__header__subtitle">Showcase of our upcoming and past events. <a href="#">See all events</a></p>
            </div>


            <div class="w-100"></div>

            <?php while ( ($latest_posts->have_posts())) : $latest_posts->the_post();

				get_template_part('partials/loop');

				endwhile; // end first loop for recent posts

				rewind_posts();
            ?>

            <?php get_template_part(''); ?>

            <!-- <div class="col-md-4">
                <a href="update-type-event.html" class="updates__item">
                    <div class="updates__item__title updates__type__event">
                        <span class="updates__item__type">Event (Workshop)</span>
                        <h3>A Design Matters illustrated talk for your organisation</h3>
                        <span class="updates__item__source">Andrey Haimershmuck</span>
                    </div>
                    <div class="updates__item__meta event__date">
                        <span class="event__date__day">19</span>
                        <span class="event__date__month">December</span>
                    </div>

                    <i class="las la-long-arrow-alt-right"></i>

                </a>
            </div> -->
            <!--
            <div class="col-md-4">
                <a href="update-type-post.html" class="updates__item">
                    <div class="updates__item__title updates__type__post">
                        <span class="updates__item__type">Blog Post</span>
                        <h3>Hope is not a strategy.</h3>
                        <span class="updates__item__source">Jumaima Gerhart</span>
                    </div>

                    <i class="las la-long-arrow-alt-right"></i>
                </a>
            </div> -->
            <!-- <div class="col-md-4">
                <a href="update-type-event.html" class="updates__item">
                    <div class="updates__item__title updates__type__event">
                        <span class="updates__item__type">Meetup</span>
                        <h3>Connecting with your inner zen and opportunities to kick ass</h3>
                        <span class="updates__item__source">Dayot Upenmecano & Celeste Agroa</span>
                    </div>
                    <div class="updates__item__meta event__date">
                        <span class="event__date__day">31</span>
                        <span class="event__date__month">January</span>
                    </div>
                    <i class="las la-long-arrow-alt-right"></i>
                </a>
            </div>
            <div class="w-100"></div> -->

        </div>
    </div>
</section>

<?php else: ?>
    <!-- Do nothing -->
<?php endif; ?>
