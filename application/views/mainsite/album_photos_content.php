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
    <body class="" id="top">
        <!--==============================header=================================-->

        <!--==============================Content=================================-->
        <div class="content"><div class="ic"></div>
            <div class="container_12">
                <div class="gallery">
                    <?php
                    foreach ($select_photos_by_album as $v_photos) {
                        ?>
                        <div class="grid_3">
                            <a href="<?php echo base_url().$v_photos->photo_image1; ?>" class="gal"><img style="width: 218px; height: 150px;" src="<?php echo base_url().$v_photos->photo_image2; ?>" alt=""></a>
                       
                            
                            
                    </div>
                    <?php echo $this->pagination->create_links(); ?>
                    <?php }?>

                </div>
            </div>
        </div>