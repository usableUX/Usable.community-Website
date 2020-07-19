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
                <p class="snippet__header__subtitle">Showcase of our upcoming and past events.

                    <!-- <a href="#">See all events</a> -->

                </p>
            </div>


            <div class="w-100"></div>

            <?php while ( ($latest_posts->have_posts())) : $latest_posts->the_post();

				get_template_part('partials/loop');

				endwhile; // end first loop for recent posts

				rewind_posts();
            ?>

        </div>
    </div>
</section>

<?php else: ?>
    <!-- Do nothing -->
<?php endif; ?>
