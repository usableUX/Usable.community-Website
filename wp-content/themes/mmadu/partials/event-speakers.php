<div class="eventHeader__speakers">
    <h5>Speaker(s)</h5>
    <div class="eventHeader__speakers__list">
        <?php
            // Check rows exists.
            if( have_rows('speaker_info') ):

                // Loop through rows.
                while( have_rows('speaker_info') ) : the_row();

                $speaker__avatar = get_sub_field('speaker_info_avatar');
                $speaker__name = get_sub_field('speaker_info_name');
                $speaker__jobtitle = get_sub_field('speaker_info_job_title');
                $speaker__company = get_sub_field('speaker_info_company');
                $speaker__url = get_sub_field('speaker_info_url');

            ?>

            <div class="eventHeader__speakers__list__item">
                <div class="speaker__avatar inline-image"
                    style="background-image:url(<?php echo $speaker__avatar['url'] ?>);"></div>

                <div class="speaker__name">
                    <!-- Speaker name with URL when available -->
                    <h4>
                        <?php echo $speaker__name;
                            if (isset($speaker__url) && !(empty($speaker__url))) {
                        ?>
                            <a href="<?php echo $speaker__url; ?>" target="_blank" title="<?php echo $speaker__name; ?>" ><i class="las la-link"></i></a>
                        <?php } ?>

                    </h4>

                    <span>
                        <?php
                        echo $speaker__jobtitle;  // job title

                        if (isset($speaker__company) && !(empty($speaker__company))) {
                            echo " @ " . $speaker__company;
                        }
                        ?>
                    </span>

                </div>
            </div>

            <?php
                // End loop.
                endwhile;

                // No value.
                else :
                    // Do something...
                endif;
            ?>

    </div>

    <!-- [/Speaker List] -->

</div>
