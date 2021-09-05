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
            Admin Profile
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>super_admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <br>
                <!--<a href="<?php echo base_url(); ?>super_admin/edit_profile"><input type="button" value="Edit" class="btn"></a>--> 

                <br>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="vcard">
                            <?php
                            $src = $admin_info->admin_image2;
                            if ($src) {
                                $s = base_url() . $admin_info->admin_image2;
                            } else {
                                $s = 'http://www.placehold.it/80x80/EFEFEF/AAAAAA';
                            }
                            ?>
                            <div style="width: 110px; height: 110px;" class="thumbnail"><a href="<?php echo base_url() . $admin_info->admin_image1 ?>"><img src="<?php echo $s; ?>" alt="" /></a></div>
                            <ul>
                                <li class="v-heading">
                                    Admin info
                                </li>
                                <li>
                                    <span class="item-key">Full Name</span>
                                    <div class="vcard-item"><?php echo $admin_info->admin_first_name . ' ' . $admin_info->admin_last_name; ?></div>
                                </li>
                                <li>
                                    <span class="item-key">Email</span>
                                    <div class="vcard-item"><?php echo $admin_info->admin_email_address; ?></div>
                                </li>
                                <li>
                                    <span class="item-key">Gender</span>
                                    <div class="vcard-item"><?php echo $admin_info->gender; ?></div>
                                </li>
                                <li>
                                    <span class="item-key">Designation</span>
                                    <div class="vcard-item"><?php echo $admin_info->admin_designation; ?></div>
                                </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


