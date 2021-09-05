<div class="content"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_6">
            <?php
            ?>
            <h2> &nbsp;&nbsp;&nbsp;<?php echo $events_details->events_title; ?></h2>
            <h6> &nbsp;&nbsp;&nbsp; Published on <?php echo $events_details->events_publication_date; ?></h6>
            <br><br>

            <img style="width: 110px; height: 110px;" src="<?php echo base_url() . $events_details->events_image; ?>" alt="" class="img_inner fleft">
            <!--<div class="extra_wrapper">-->
                <p class="col2" align="justify"><?php echo $events_details->events_long_description; ?></p>

            <!--</div>-->

            <div class="clear cl1"></div>
        </div>
        <div class="grid_5 prefix_1">
            <h2>Upcoming Events</h2>
            <ul class="list l1 col2">
                <li>
                    <?php
                    foreach ($upcomming_events as $v_events) {
                        $events_publication_date = $v_events->events_publication_date;
                        $date = explode('-', $events_publication_date);
                        $year = $date[0];
                        $month = $date[1];
                        $day = $date[2];
                        ?>
                        <time datetime="2014-01-01"><?php echo $day; ?><span><?php echo $month; ?></span></time>
                        <div class="extra_wrapper">
                            <div class="title col2"><a href="<?php echo base_url(); ?>web_welcome/events_details/<?php echo $v_events->events_id; ?>"><?php echo $v_events->events_title; ?></a></div>
                            <p align="justify"><?php echo $v_events->events_short_description; ?></p>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="hor hr1"></div>
    <div class="container_12">
        <div class="grid_3 maxheight">
            <h2>Our Projects</h2>
            <ul class="list1 col2">
                <?php
                foreach ($our_project as $v_project) {
                    ?>
                    <li><a href = "<?php echo base_url(); ?>web_welcome/project_details/<?php echo $v_project->project_id; ?>"><?php echo $v_project->project_title; ?></a></li>
                <?php } ?>
            </ul><br>
            <a href = "<?php echo base_url(); ?>web_welcome/see_more_projects"><p align = "right">See More...<p></a>
        </div>
        <div class = "grid_4 prefix_1 suffix_1 ver maxheight">
            <h2>&nbsp;&nbsp;About the Latest Action</h2>
            <div class = "block1">
                <a href="<?php echo base_url() . $latest_project->project_image1; ?>"><img style="width: 265px; height: 130px;" src = "<?php echo base_url() . $latest_project->project_image2; ?>" alt = ""></a>
                <a href="<?php echo base_url(); ?>web_welcome/project_details/<?php echo $latest_project->project_id; ?>"><p><?php echo $latest_project->project_short_description; ?></p></a>
            </div>
        </div>
        <div class="grid_3 maxheight">
            <h2>Testimonials</h2>
            <blockquote class="bq2">
                <p>Nulla vel viverra auctorleo agna sodales felis, quis malesuada nibh odio ut velit. Proin phar</p>
                <div class="bq_bot">Mark Johnson, <a href="#" class="col1">info@demolink.org</a></div>
            </blockquote>
            <blockquote class="bq2">
                <p>Mulla vel viverra auctorleo nign sodales felis, quis malesuadat nibh odio ut veliin pharew</p>
                <div class="bq_bot">Patrick Pool, <a href="#" class="col1">info@demolink.org</a></div>
            </blockquote>
        </div>
    </div>
</div>