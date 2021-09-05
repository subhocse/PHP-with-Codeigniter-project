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
            User Profile
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header">
                <form class="form-horizontal">
                    <fieldset>
                        <br><br>
                        <div class="control-group formSep">
                            <label class="control-label">Username</label>
                            <div class="controls text_line">
                                <strong>jSmith</strong>
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="fileinput" class="control-label">User avatar</label>
                            <div class="controls">
                                <div data-fileupload="image" class="fileupload fileupload-new">
                                    <input type="hidden" />
                                    <div style="width: 80px; height: 80px;" class="fileupload-new thumbnail"><img src="http://www.placehold.it/80x80/EFEFEF/AAAAAA" alt="" /></div>
                                    <div style="width: 80px; height: 80px; line-height: 80px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" id="fileinput" name="fileinput" /></span>
                                    <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a>
                                </div>	
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_fname" class="control-label">Full name</label>
                            <div class="controls">
                                <input type="text" id="u_fname" class="input-xlarge" value="John Smith" />
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_email" class="control-label">Email</label>
                            <div class="controls">
                                <input type="text" id="u_fname" class="input-xlarge" value="johnSmith@example.com" />
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_password" class="control-label">Password</label>
                            <div class="controls">
                                <div class="sepH_b">
                                    <input type="password" id="u_password" class="input-xlarge" value="my_password" />
                                    <span class="help-block">Enter your password</span>
                                </div>
                                <input type="password" id="s_password_re" class="input-xlarge" />
                                <span class="help-block">Repeat password</span>
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label class="control-label">I want to receive:</label>
                            <div class="controls">
                                <label class="checkbox inline">
                                    <input type="checkbox" value="newsletter" id="email_newsletter" name="email_receive" />
                                    Newsletters
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" value="sys_messages" id="email_sysmessages" name="email_receive" checked="checked" />
                                    System messages
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" value="other_messages" id="email_othermessages" name="email_receive" />
                                    Other messages
                                </label>
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label class="control-label">Language(s)</label>
                            <div class="controls">
                                <select name="user_languages" id="user_languages" multiple data-placeholder="Choose a language(s)...">
                                    <option selected="selected">English</option>
                                    <option>French</option>
                                    <option>German</option>
                                    <option>Italian</option>
                                    <option>Chinese</option>
                                    <option>Spanish</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label class="control-label">Gender</label>
                            <div class="controls">
                                <label class="radio inline">
                                    <input type="radio" value="male" id="s_male" name="f_gender" checked="checked" />
                                    Male
                                </label>
                                <label class="radio inline">
                                    <input type="radio" value="female" id="s_female" name="f_gender" />
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_signature" class="control-label">Signature</label>
                            <div class="controls">
                                <textarea rows="4" id="u_signature" class="input-xlarge">Lorem ipsum&hellip;</textarea>
                                <span class="help-block">Automatic resize</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-gebo" type="submit">Save changes</button>
                                <button class="btn">Cancel</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


