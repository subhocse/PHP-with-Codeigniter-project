<!DOCTYPE html>
<html lang="en">
    <head>
        <link  href="<?php echo base_url(); ?>test2/css/bootstrap-cerulean.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>test2/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>test2/css/charisma-app.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>test2/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='<?php echo base_url(); ?>test2/css/fullcalendar.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>test2/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='<?php echo base_url(); ?>test2/css/chosen.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>test2/css/uniform.default.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>test2/css/colorbox.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>test2/css/jquery.cleditor.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>test2/css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>test2/css/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>test2/css/elfinder.min.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>test2/css/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>test2/css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>test2/css/opa-icons.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>test2/css/uploadify.css' rel='stylesheet'>

        <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
            //<![CDATA[
            bkLib.onDomLoaded(function() {
                nicEditors.allTextAreas()
            });
            //]]>
        </script>
    </head>
    <body>
        <aside class="right-side">                
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Blank page
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Blank page</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <div id="content" class="span10">
                    <!-- content starts -->

                    <!-- --------------------------------------------------------------------------------------- -->

                    <div class="row-fluid sortable">		
                        <div class="box span12">
                            <!--                            <div class="box-header well" data-original-title>
                                                            <h2><i class="icon-user"></i> Members</h2>
                                                            <div class="box-icon">
                                                                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                                                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                                                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                                                            </div>
                                                        </div>-->
                            <br><br>
                            <div class="box-content">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                    <thead>
                                        <tr>
                                            <th>New Id</th>
                                            <th>New Title</th>
                                            <th>Publication Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <?php
                                        foreach ($all_project_category as $v_category) {
                                            ?>
                                            <tr>
                                                <td><?php echo $v_category->project_category_id; ?></td>
                                                <td class="center"><?php echo $v_category->project_category_name; ?></td>
                                                <td class="center">
                                                    <?php
                                                    if ($v_category->project_category_publication_status == 1) {
                                                        echo 'Published';
                                                    } else {
                                                        echo 'Un Published';
                                                    }
                                                    ?>
                                                </td>
                                                <td class="center">
                                                    <?php
                                                    if ($v_category->project_category_publication_status == 0) {
                                                        ?>
                                                        <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/publish_project_category/<?php echo $v_category->project_category_id; ?>" title="Published">
                                                            <i class="icon-arrow-up icon-white"></i>  

                                                        </a> <?php
                                                    } else {
                                                        ?>
                                                        <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/unpublish_project_category/<?php echo $v_category->project_category_id; ?>" title="Un Published">
                                                            <i class="icon-arrow-down icon-white"></i>  

                                                        </a>
                                                    <?php } ?>
                                                    <a class="btn btn-info" href="<?php echo base_url(); ?>super_admin/edit_project_category/<?php echo $v_category->project_category_id; ?>" title="Edit">
                                                        <i class="icon-edit icon-white"></i>  

                                                    </a>
                                                    <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/delete_project_category/<?php echo $v_category->project_category_id; ?>" title="Delete" onclick="return check_delete()">
                                                        <i class="icon-trash icon-white"></i> 

                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>            
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div><!--/span-->

                    </div><!--/row-->

                    <!-- content ends -->
                </div><!--/#content.span10-->

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>test2/js/jquery-1.7.2.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?php echo base_url(); ?>test2/js/jquery-ui-1.8.21.custom.min.js"></script>
    <!-- transition / effect library -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-transition.js"></script>
    <!-- alert enhancer library -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-alert.js"></script>
    <!-- modal / dialog library -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-modal.js"></script>
    <!-- custom dropdown library -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-dropdown.js"></script>
    <!-- scrolspy library -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-scrollspy.js"></script>
    <!-- library for creating tabs -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-tab.js"></script>
    <!-- library for advanced tooltip -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-tooltip.js"></script>
    <!-- popover effect library -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-popover.js"></script>
    <!-- button enhancer library -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-button.js"></script>
    <!-- accordion library (optional, not used in demo) -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-collapse.js"></script>
    <!-- carousel slideshow library (optional, not used in demo) -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-carousel.js"></script>
    <!-- autocomplete library -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-typeahead.js"></script>
    <!-- tour library -->
    <script src="<?php echo base_url(); ?>test2/js/bootstrap-tour.js"></script>
    <!-- library for cookie management -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.cookie.js"></script>
    <!-- calander plugin -->
    <script src='<?php echo base_url(); ?>test2/js/fullcalendar.min.js'></script>
    <!-- data table plugin -->
    <script src='<?php echo base_url(); ?>test2/js/jquery.dataTables.min.js'></script>

    <!-- chart libraries start -->
    <script src="<?php echo base_url(); ?>test2/js/excanvas.js"></script>
    <script src="<?php echo base_url(); ?>test2/js/jquery.flot.min.js"></script>
    <script src="<?php echo base_url(); ?>test2/js/jquery.flot.pie.min.js"></script>
    <script src="<?php echo base_url(); ?>test2/js/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>test2/js/jquery.flot.resize.min.js"></script>
    <!-- chart libraries end -->

    <!-- select or dropdown enhancer -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.chosen.min.js"></script>
    <!-- checkbox, radio, and file input styler -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.uniform.min.js"></script>
    <!-- plugin for gallery image view -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.colorbox.min.js"></script>
    <!-- rich text editor library -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.cleditor.min.js"></script>
    <!-- notification plugin -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.noty.js"></script>
    <!-- file manager library -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.elfinder.min.js"></script>
    <!-- star rating plugin -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.raty.min.js"></script>
    <!-- for iOS style toggle switch -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.iphone.toggle.js"></script>
    <!-- autogrowing textarea plugin -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.autogrow-textarea.js"></script>
    <!-- multiple file upload plugin -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.uploadify-3.1.min.js"></script>
    <!-- history.js for cross-browser state change on ajax -->
    <script src="<?php echo base_url(); ?>test2/js/jquery.history.js"></script>
    <!-- application script for Charisma demo -->
    <script src="<?php echo base_url(); ?>test2/js/charisma.js"></script>

</body>
</html>
