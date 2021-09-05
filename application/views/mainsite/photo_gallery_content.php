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
                    foreach ($see_all_project as $v_project) {
                        ?>
                        <div class="grid_3">
                            <h2><a href="<?php echo base_url();?>web_welcome/project_details/<?php echo $v_project->project_id;?>"><?php echo $v_project->project_title;?></a></h2>
                            <a href="<?php echo base_url().$v_project->project_image1; ?>" class="gal"><img style="width: 218px; height: 150px;" src="<?php echo base_url().$v_project->project_image2; ?>" alt=""></a>
                            <?php echo $v_project->project_short_description;?>
                            
                            <p align="justify"><a href="<?php echo base_url();?>web_welcome/project_details/<?php echo $v_project->project_id;?>" class="btn">Project Details..</a></p>
                    </div>
                    
                    <?php }?>

                </div>
            </div>
        </div>