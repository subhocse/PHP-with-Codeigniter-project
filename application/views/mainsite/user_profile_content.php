<!-- Bootstrap framework -->
<link rel="stylesheet" href="<?php echo base_url(); ?>test/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>test/bootstrap/css/bootstrap-responsive.min.css" />
<!-- gebo blue theme-->
<link rel="stylesheet" href="<?php echo base_url(); ?>test/css/blue.css" id="link_theme" />
<!-- breadcrumbs-->
<link rel="stylesheet" href="<?php echo base_url(); ?>test/lib/jBreadcrumbs/css/BreadCrumb.css" />
<!-- tooltips-->
<link rel="stylesheet" href="<?php echo base_url(); ?>test/lib/qtip2/jquery.qtip.min.css" />
<!-- notifications -->
<link rel="stylesheet" href="<?php echo base_url(); ?>test/lib/sticky/sticky.css" />    
<!-- splashy icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>test/img/splashy/splashy.css" />
<!-- enhanced select -->
<link rel="stylesheet" href="<?php echo base_url(); ?>test/lib/chosen/chosen.css" />
<!-- colorbox -->
<link rel="stylesheet" href="<?php echo base_url(); ?>test/lib/colorbox/colorbox.css" />

<!-- main styles -->
<link rel="stylesheet" href="<?php echo base_url(); ?>test/css/style.css" />

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans" />



<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Info
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>web_welcome"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">

                <br>
                <?php if($show_edit){?>
                <a href="<?php echo base_url(); ?>user/edit_user_profile/<?php echo $user_profile_info->user_id; ?>"><input type="button" value="Edit" class="btn"></a> 
                <?php }?>
                <br>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="vcard"> 
                            <?php
                            $src = $user_profile_info->user_image1;
                            if ($src) {
                                $s = base_url() . $user_profile_info->user_image1;
                            } else {
                                $s = 'http://www.placehold.it/80x80/EFEFEF/AAAAAA';
                            }
                            ?>
                            <div style="width: 110px; height: 110px;" class="thumbnail"><a href="<?php echo base_url() . $user_profile_info->user_image1?>"><img src="<?php echo $s;?>" alt="" /></a></div>
<!--                            <img  class="thumbnail" src="<?php echo $s; ?>" alt="insert Image" />-->
                            <ul>
                                <li class="v-heading">
                                    User info
                                </li>
                                <li>
                                    <span class="item-key">Full name</span>
                                    <div class="vcard-item"><?php echo $user_profile_info->user_first_name . ' ' . $user_profile_info->user_last_name; ?></div>
                                </li>

                                <li>
                                    <span class="item-key">Email</span>
                                    <div class="vcard-item"><?php echo $user_profile_info->user_email_address; ?></div>
                                </li>
                                <li>
                                    <span class="item-key">Date Of Birth</span>
                                    <div class="vcard-item"><?php echo $user_profile_info->date_of_birth; ?></div>
                                </li>
                                <li>
                                    <span class="item-key">Gender</span>
                                    <div class="vcard-item"><?php echo $user_profile_info->gender; ?></div>
                                </li>
                                <li>
                                    <span class="item-key">Address</span>
                                    <div class="vcard-item"><?php echo $user_profile_info->address; ?></div>
                                </li>
                                <li>
                                    <span class="item-key">Country</span>
                                    <div class="vcard-item"><?php echo $user_profile_info->country; ?></div>
                                </li>
                                <li>
                                    <span class="item-key">City</span>
                                    <div class="vcard-item"><?php echo $user_profile_info->city; ?></div>
                                </li>
                                <li>
                                    <span class="item-key">Zip Code</span>
                                    <div class="vcard-item"><?php echo $user_profile_info->zip_code; ?></div>
                                </li>

                                <li>
                                    <span class="item-key">About Me</span>
                                    <div class="vcard-item"><p align='justify'><?php echo $user_profile_info->about; ?></p> </div>
                                </li>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


