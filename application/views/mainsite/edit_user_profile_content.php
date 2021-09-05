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

<img src="img_moustiers-sainte-marie.jpg" alt="Cinqueterra" width="304" height="236">
<script type="text/javascript">
    function change_photo() {
        var chk = confirm('Are You Sure to Change This Photo??');
        if (chk) {
           
            document.getElementById("myform").submit();
            alert("Save");
            return true;
        }
        else {
            return false;
        }
    }
</script>
<script>
    function validate_pass() {
        var x = document.forms["myForm"]["user_password"].value;
        var y = document.forms["myForm"]["user_repassword"].value;
        if (x !== y) {
            alert("Your Entered Password Didn't Match");
            return false;
        }
        else {
            return true;
        }
    }
</script>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Profile
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>web_welcome"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url(); ?>user/user_profile/<?php echo $this->session->userdata('user_id'); ?>"><i class="fa fa-dashboard"></i> Profile</a></li>
            <li class="active">Edit Profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header">
                <form class="form-horizontal" id="myform" name="myForm" enctype="multipart/form-data"action="<?php echo base_url(); ?>user/update_user_profile" method="post" onsubmit="return validate_pass()">
                    <fieldset>
                        <br><br>

                        <div class="control-group formSep">
                            <label for="fileinput" class="control-label">User Image</label>
                            <div class="controls">
                                <div data-fileupload="image" class="fileupload fileupload-new">
                                    <input type="hidden"  />
                                    <?php
                                    $src = $user_profile_info->user_image1;
                                    if ($src) {
                                        $s = base_url() . $user_profile_info->user_image1;
                                        ?>
                                        <div style = "width: 80px; height: 80px;" class = "fileupload-new thumbnail"><a href = "<?php echo base_url() . $user_profile_info->user_image1 ?>"><img src = "<?php echo $s; ?>" alt = "" /></div></a>
                                        <div style = "width: 80px; height: 80px; line-height: 80px;" class = "fileupload-preview fileupload-exists thumbnail"></div>
                                        <span class = "btn btn-file">
                                            <span class = "fileupload-new" >Change image</span>                 
                                            <span class = "fileupload-exists">Change</span><input type = "file" id = "fileinput" name = "user_image1" onmouseout= "return change_photo()"/></span>
                                        <?php
                                    } else {
                                        $s = 'http://www.placehold.it/80x80/EFEFEF/AAAAAA';
                                        ?>
                                        <span class = "btn btn-file">
                                            <span class = "fileupload-new" >Select image</span>
                                            <span class = "fileupload-exists">Change</span><input type = "file" id = "fileinput" name = "user_image1" onmouseout = "return change_photo()"/></span>

                                        <?php
                                    }
                                    ?>


                                    <!--<a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a>-->
                                </div>	
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_fname" class="control-label">First name</label>
                            <div class="controls">
                                <input type="text" name="user_first_name"id="u_fname" class="input-xlarge" value="<?php echo $user_profile_info->user_first_name; ?>" />
                                <input type="hidden" name="user_id" id="u_fname"  value="<?php echo $user_profile_info->user_id; ?>" />
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_fname" class="control-label">Last name</label>
                            <div class="controls">
                                <input type="text" name="user_last_name"id="u_fname" class="input-xlarge" value="<?php echo $user_profile_info->user_last_name; ?>" />
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_email" class="control-label">Email</label>
                            <div class="controls">
                                <input type="text" id="u_fname" name="user_email_address"class="input-xlarge" value="<?php echo $user_profile_info->user_email_address; ?>" />
                            </div>
                        </div>
<!--                        <div class="control-group formSep">
                            <label for="u_password" class="control-label">Password</label>
                            <div class="controls">
                                <div class="sepH_b">
                                    <input type="password" name="user_password" id="u_password" class="input-xlarge" required/>
                                    <span class="help-block">Enter your password</span>
                                </div>
                                <input type="password" name="user_repassword"id="s_password_re" class="input-xlarge" required/>
                                <span class="help-block">Repeat password</span>
                            </div>
                        </div>-->

                        <div class="control-group formSep">
                            <label for="u_email" class="control-label">Date Of Birth</label>
                            <div class="controls">
                                <input type="text" id="u_fname" name="date_of_birth" class="input-xlarge" value="<?php echo $user_profile_info->date_of_birth; ?>" />
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label class="control-label">Gender</label>
                            <div class="controls">
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="male" checked="<?php echo $user_profile_info->gender; ?>" />
                                    Male
                                </label>
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="female" />
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_email" class="control-label">Address</label>
                            <div class="controls">
                                <input type="text" name="address"id="u_fname" class="input-xlarge" value="<?php echo $user_profile_info->address; ?>" />
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_email" class="control-label">Country</label>
                            <div class="controls">
                                <input type="text" name="country" id="u_fname" class="input-xlarge" value="<?php echo $user_profile_info->country; ?>" />
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_email" class="control-label">City</label>
                            <div class="controls">
                                <input type="text" name="city" id="u_fname" class="input-xlarge" value="<?php echo $user_profile_info->city; ?>" />
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_email" class="control-label">Zip Code</label>
                            <div class="controls">
                                <input type="text" name="zip_code" id="u_fname" class="input-xlarge" value="<?php echo $user_profile_info->zip_code; ?>" />
                            </div>
                        </div>
                        <div class="control-group formSep">
                            <label for="u_signature" class="control-label">About Me</label>
                            <div class="controls">
                                <textarea name="about" rows="4" id="u_signature" class="input-xlarge"><?php echo $user_profile_info->about; ?></textarea>
                                <span class="help-block">Automatic resize</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-gebo" type="submit" >Save changes</button>
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


