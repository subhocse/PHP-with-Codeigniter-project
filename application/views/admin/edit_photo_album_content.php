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
                    <li class="active">Edit Album</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <div id="content" class="span10">
                    <!-- content starts -->



                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-content">
                                <form name="edit_photo_album_content" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/update_album" method="post" onsubmit="return validateStandard(this)">
                                    <fieldset>
                                        <legend>Edit Album</legend>
                                        <div class="control-group">
                                            <label class="control-label" for="typeahead">Album Name (<span style="color: red">*</span>) </label>
                                            <div class="controls">
                                                <input type="text" class="span6 typeahead" id="typeahead" err="Enter a Valid Album Name"  data-provide="typeahead" data-items="4" name="album_name" required regexp="JSVAL_RX_ALPHA" value="<?php echo $album_info->album_name; ?>">
                                                <input type="hidden" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="album_id" value="<?php echo $album_info->album_id; ?>">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <br>
                                            <?php
                                            if ($album_info->album_image) {
                                                ?>
                                                <div class="control-group">
                                                    <label class="control-label" for="fileInput"> Image</label>
                                                    <div class="controls">
                                                        <img style="width: 110px; height: 110px;" src="<?php echo base_url() . $album_info->album_image; ?>">
                                                        <a href="<?php echo base_url(); ?>super_admin/delete_album_image/<?php echo $album_info->album_id; ?>">delete image</a>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="control-group">
                                                    <label class="control-label" for="fileInput">Insert Image</label>
                                                    <div class="controls">
                                                        <input class="input-file uniform_on" id="fileInput" type="file" name="album_image">
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="date01">Publication Status</label>
                                            <div class="controls">
                                                <select name="album_publication_status" id="publication_status" err="Please Select Publication Status" required exclude=" ">
                                                    <option value=" ">Select Publication Status</option>
                                                    <option value="1">Published</option>
                                                    <option value="0">Un Published</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="reset" class="btn">Cancel</button>
                                        </div>
                                    </fieldset>
                                </form>   

                            </div>
                        </div><!--/span-->

                    </div><!--/row-->


                    <!-- content ends -->
                </div><!--/#content.span10-->

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
    <script type="text/javascript">
        document.forms['edit_photo_album_content'].elements['publication_status'].value = '<?php echo $album_info->album_publication_status; ?>';
    </script>
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