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
        <script type="text/javascript">
<!--
//Create a boolean variable to check for a valid Internet Explorer instance.
            var xmlhttp = false;
//Check if we are using IE.
            try {
//If the Javascript version is greater than 5.
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert(xmlhttp);
//alert ("You are using Microsoft Internet Explorer.");
            } catch (e) {
                //alert(e);

//If not, then use the older active x object.
                try {
//If we are using Internet Explorer.
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
                } catch (E) {
                    // alert(E);
//Else we must be using a non-IE browser.
                    xmlhttp = false;
                }
            }
//If we are using a non-IE browser, create a javascript instance of the object.
            if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
                xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
            }

         
            function makerequest(given_text, objID)
            {
                
                if(given_text){
                //alert(given_text);
                //var obj = document.getElementById(objID);
                serverPage = '<?php echo base_url(); ?>user/check_login_email/' + given_text;
                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function()
                {
                    //alert(xmlhttp.readyState);
                    //alert(xmlhttp.status);
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        //alert(xmlhttp.responseText);
                        document.getElementById(objID).innerHTML = xmlhttp.responseText;
                        //document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                        if (xmlhttp.responseText == 'User Not Found!')
                        {
                            document.getElementById('submit').disabled = true;
                        }
                        if (xmlhttp.responseText == 'User Found!')
                        {
                            document.getElementById('submit').disabled = false;
                        }
                    }
                }
                xmlhttp.send(null);
            }
            }
//-->
        </script>

        <script type="text/javascript">
            function preventback() {
                window.history.forward();
                window.onunload = function() {
                    null;
                };
            }
        </script>
        <script>
            function validateForm() {
                var x = document.forms["myForm"]["user_type"].value;
                if (x == null || x == "") {
                    alert("*required must be filled out");
                    return false;
                }
            }
        </script>

    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Log In</div>

            <form onclick="preventback()"action="<?php echo base_url(); ?>web_welcome/check_user_login" method="post">
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
                        <input type="text"  onblur="makerequest(this.value,'res')"  name="user_email_address" class="form-control" placeholder="* User Name" required/><br><span style="color: red" id="res"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" name="user_password" class="form-control" placeholder="* Password" required/>
                    </div>  

<!--                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>-->
                </div>
                <div class="footer">                                                               
                    <button type="submit" id="submit" class="btn bg-olive btn-block">Log me in</button>  

                    <p><a href="<?php echo base_url();?>web_welcome/forgot_password">I forgot my password</a></p>

                    <a href="<?php echo base_url(); ?>web_welcome/member_signup" class="text-center">Register a new membership</a>
                </div>
            </form>
            <br><br>

        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>admin_files/js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>