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



                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <!--                            <div class="box-header well" data-original-title>
                                                            <h2><i class="icon-edit"></i> Form Elements</h2>
                                                            <div class="box-icon">
                                                                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                                                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                                                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                                                            </div>
                                                        </div>-->
                            <div class="box-content">
                                <form class="form-horizontal">
                                    <fieldset>
                                        <legend>Datepicker, Autocomplete, WYSIWYG</legend>
                                        <div class="control-group">
                                            <label class="control-label" for="typeahead">Auto complete </label>
                                            <div class="controls">
                                                <input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                                <p class="help-block">Start typing to activate auto complete!</p>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="date01">Date input</label>
                                            <div class="controls">
                                                <input type="text" class="span6 typeahead" id="typeahead" value="02/16/12">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="fileInput">File input</label>
                                            <div class="controls">
                                                <input class="input-file uniform_on" id="fileInput" type="file">
                                            </div>
                                        </div>          
                                        <div class="control-group">
                                            <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
                                            <div class="controls">
                                                <textarea name="area1" style='width: 48.3%'>kjfjksf</textarea>
                                            </div>

                                            <!--                                            <h4>
                                                                                            First Textarea
                                                                                        </h4>
                                                                                        <textarea name="area1" cols="40">
                                                                                        </textarea><br />-->

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