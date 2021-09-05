<div class="content"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_6">
            <br><br><br><br>
            <h2>Meet Our Team</h2>
            <img src="<?php echo base_url(); ?>mainsite_files/images/page1_img1.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
                <p class="col2"><a href="#">Cras facilisis, nulla vel viverra tor, leo magna sodales felis, quis </a></p>
                Proin pharetra luctus diamer scelerisque eros convallisa <br>
                <a href="<?php echo base_url()?>web_welcome/our_team" class="btn">See More</a>
            </div>
            <div class="clear"></div>
        </div>

        <div class="grid_5 prefix_1">
            <br><br>
            <a href="<?php echo base_url(); ?>web_welcome/member_signup"><p align="right">Be a Member??</p></a>
            <h2>Our Mission</h2>
            <div class="rel1">
                <p align="justify"><?php echo $mission_info->mission_short_description;?></p>
                
            </div>
            <a href="<?php echo base_url()?>web_welcome/mission_details" class="btn">See More</a>
        </div>
    </div>
    <div class="hor"></div>
    <div class="container_12">
        <div class="grid_3">
            <h2>Latest News</h2>
            <ul class="list">

                <li>
                    <?php
                    
                    foreach($latest_news as $v_news) {                                        
                    $news_publication_date = $v_news->news_publication_date;
                    $date = explode('-', $news_publication_date);
                    $year = $date[0];
                    $month = $date[1];
                    $day = $date[2];
                    ?>
                    <time datetime="2014-01-01"><?php echo $day;?><span><?php echo $month;?></span></time>
                    <div class="extra_wrapper">
                        <div class="title col2"><a href="<?php echo base_url();?>web_welcome/news_details/<?php echo $v_news->news_id;?>"><?php echo $v_news->news_title;?></a></div>
                        <p align="justify"><?php echo $v_news->news_short_description;?></p>
                    </div>
                </li>
                    <?php }?>

<!--                <li>
                    <time datetime="2014-01-01">05<span>Mar</span></time>
                    <div class="extra_wrapper">
                        <div class="title col2"><a href="#">Meloamuar</a></div>
                        ferus at magne malesuada faui
                    </div>
                </li>-->
            </ul>
            <blockquote class="bq1">
                <div class="title">Testimonials</div>
                <p>Nulla vel viverra auctorleo magna sodales felis, quis malesuada nibh odio ut </p>
                <div class="col2">Sandra Wood</div>
            </blockquote>
        </div>
        <div class="grid_9">
            <h2>Our Projects</h2>
            <section>
                <ul id="da-thumbs" class="da-thumbs">
                   <?php
                    foreach($project_category as $v_category) {                     
                   ?> 
                    <li>             
                        <a href="<?php echo base_url()?>web_welcome/category_projects/<?php echo $v_category->project_category_id;?>">
                            <img style="width: 201px; height: 170px;" src="<?php echo base_url().$v_category->project_category_image; ?>" alt="" />
                            <div><span><?php echo $v_category->project_category_name;?></span></div>
                        </a>
                    </li>
                    <?php }?>

                </ul>
            </section>
        </div>
    </div>
</div>
