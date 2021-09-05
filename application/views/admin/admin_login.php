<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>admin_files/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>admin_files/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>admin_files/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            function prevent_back() {
                window.history.forward();
                window.onunload = function() {
                    null;
                };
            }
        </script>
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Log In</div>

            <form onclick="prevent_back()" action="<?php echo base_url(); ?>admin/check_admin_login" method="post">
                <div class="body bg-gray" style="color: red">
                    <?php
                    $msg = $this->session->userdata('message');
                    if ($msg) {
                        echo $msg;
                        $this->session->unset_userdata('message');
                    } else {
                        ?>
                    </div>
                    <div class="body bg-gray" >
                        <?php
                        echo 'Please Enter Email & Password';
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" name="admin_email_address" class="form-control" placeholder="* User Name" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="admin_password" class="form-control" placeholder="* Password" required/>
                    </div>  

<!--                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>-->
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Log me in</button>  

                    <!--<p><a href="#">I forgot my password</a></p>-->

                    <!--<a href="<?php echo base_url(); ?>admin/admin_register" class="text-center">Register a new membership</a>-->
                </div>
            </form>

<!--            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>-->
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>admin_files/js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>