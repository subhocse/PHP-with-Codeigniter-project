<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Get Involved</title>
        <meta charset="utf-8">
        <meta name = "format-detection" content = "telephone=no" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>mainsite_files/css/touchTouch.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>mainsite_files/css/style.css">
        <script src="<?php echo base_url(); ?>mainsite_files/js/touchTouch.jquery.js"></script>
        <script>
            $(document).ready(function() {
                $().UItoTop({easingType: 'easeOutQuart'});
                $('.gallery a.gal').touchTouch();
            });
        </script>

    </head>
    <div class="content"><div class="ic"></div>
        <div class="container_12">
            <div class="gallery">

                <div class="grid_3">
                    <h2>Latest News</h2>
                    <ul class="list">

                        <li>
                            <?php
                            foreach ($latest_news as $v_news) {
                                $news_publication_date = $v_news->news_publication_date;
                                $date = explode('-', $news_publication_date);
                                $year = $date[0];
                                $month = $date[1];
                                $day = $date[2];
                                ?>
                                <time datetime="2014-01-01"><?php echo $day; ?><span><?php echo $month; ?></span></time>
                                <div class="extra_wrapper">
                                    <div class="title col2"><a href="<?php echo base_url(); ?>web_welcome/news_details/<?php echo $v_news->news_id; ?>"><?php echo $v_news->news_title; ?></a></div>
                                    <p align="justify"><?php echo $v_news->news_short_description; ?></p>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <blockquote class="bq1">
                        <div class="title">Testimonials</div>
                        <p>Nulla vel viverra auctorleo magna sodales felis, quis malesuada nibh odio ut </p>
                        <div class="col2">Sandra Wood</div>
                    </blockquote>
                </div>

                <div class="grid_9">
                    <b><h2>Photo Gallery</h2></b>
                    <br>
                    <section>
                        <ul id="da-thumbs" class="da-thumbs">
                   <?php
                    foreach($photo_album as $v_album) {                     
                   ?> 
                    <li>             
                        <a href="<?php echo base_url()?>web_welcome/album_photos/<?php echo $v_album->album_id;?>">
                            <img style="width: 201px; height: 170px;" src="<?php echo base_url().$v_album->album_image; ?>" alt="" />
                            <div><span><?php echo $v_album->album_name;?></span></div>
                        </a>
                    </li>
                    <?php }?>
                            
                        </ul>
                    </section>
                </div>
            </div>
        </div>