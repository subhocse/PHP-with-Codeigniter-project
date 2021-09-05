<!DOCTYPE html>
<html>
    <head>
        <title>Demo Beautiful Registration Form with HTML5 and CSS3</title>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>form_css/style.css" media="all" />
        <script src="<?php echo base_url(); ?>test3/js/country.js"type="text/javascript"></script>
        
<!--        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>form_css/demo.css" media="all" />-->
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
                serverPage = '<?php echo base_url(); ?>user/check_user_email/' + given_text;
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
                        if (xmlhttp.responseText == 'Email Address Alredy Exists !')
                        {
                            document.getElementById('submit').disabled = true;
                        }
                        if (xmlhttp.responseText == 'Email Address Avilable')
                        {
                            document.getElementById('submit').disabled = false;
                        }
                    }
                
                xmlhttp.send(null);
            }
        }
            //-->
        </script>
        <script>
            function validate_pass() {
                var x = document.forms["myForm"]["user_password"].value;
                var y = document.forms["myForm"]["user_repassword"].value;
                if (x !== y) {
                    alert("Your Entered Password Didn't Match");
                    return false;
                }      
            }
        }
        </script>
    </head>
    <body>
        <div class="container">
            <!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <span class="right">
                    <a href="<?php echo base_url(); ?>web_welcome/member_signup">
                        <strong><p align="right">Be a member</p></strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
            <br><br>
            <div  class="form">
                <br>
                <?php
                $msg1 = $this->session->userdata('mess');
                if ($msg1) {
//                    echo 'Registration Complete.To activate account please check your ';
                  ?> <a href="<?php echo base_url(); ?>user/email_varification"></a>
                <?php } $this->session->unset_userdata('mess'); ?>
                <form id="contactform" name="myForm" action="<?php echo base_url(); ?>user/add_user" method="post" onsubmit="return validate_pass()"> 
                    <br>
                    <p class="contact"><label for="name">First Name</label></p> 
                    <input id="first_name" name="user_first_name" placeholder="First name" required="" tabindex="1" type="text"> 

                    <p class="contact"><label for="name">Last Name</label></p> 
                    <input id="last_name" name="user_last_name" placeholder="Last name" required="" tabindex="1" type="text"> 

                    <p class="contact"><label for="email">Email</label></p> 
                    <input id="email" value="" onblur="makerequest(this.value,'res')" name="user_email_address" placeholder="example@domain.com" required="" type="email"> <br><span style="color: red" id="res"></span>
                   
                    <p class="contact"><label for="password"><br>Create a password</label></p> 
                    <input type="password" id="password" name="user_password" required=""> 
                    <p class="contact"><label for="repassword">Confirm your password</label></p> 
                    <input type="password" id="repassword" name="user_repassword" required=""> 

                    <fieldset>
                        <label>Birthday</label>
                        <label class="month"> 
                            <select class="select-style" name="BirthMonth">
                                <option value="">Month</option>
                                <option  value="01">January</option>
                                <option value="02">February</option>
                                <option value="03" >March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12" >December</option>
                        </label>
                        </select>    
                        <label>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required=""></label>
                        <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required=""></label>
                    </fieldset>

                    <select class="select-style gender" name="gender">
                        <option value="select">i am..</option>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="others">Other</option>

                    </select><br><br>

                    <p class="contact"><label for="address">Address</label></p> 
                    <input id="address" name="address" placeholder="address" required="" type="text"> <br>



                    <select class="select-style gender" name="country">
                        <option value="select">Select Country</option>
                        <script type='text/javascript'>
                            printCountryOptions();
                        </script>
                    </select><br><br>

                    <p class="contact"><label for="city">City</label></p> 
                    <input id="city" name="city" placeholder="city" required="" type="text"> <br>

                    <p class="contact"><label for="zip_code">Zip Code</label></p> 
                    <input id="zip_code" name="zip_code" placeholder="zip code" required="" type="text"> <br>
                    <input class="buttom" name="submit" value="Sign me up!" type="submit" id="submit"> 	 

                </form> 
                <br>
            </div>      
        </div>
        <br><br>
    </body>
</html>
