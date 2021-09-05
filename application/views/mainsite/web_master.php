<!DOCTYPE html>
<html lang="en">
    <head>
        <script language="javascript" type="text/javascript" > window.history.forward();</script>
        <title><?php echo $title; ?></title>

        <meta charset="utf-8">
        <meta name = "format-detection" content = "telephone=no" />
        <link rel="icon" href="<?php echo base_url(); ?>mainsite_files/images/favicon.ico">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>mainsite_files/images/favicon.ico" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>mainsite_files/css/form.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>mainsite_files/css/thumbs.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>mainsite_files/css/slider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>mainsite_files/css/style.css">
        <script src="<?php echo base_url(); ?>mainsite_files/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>mainsite_files/js/jquery-migrate-1.2.1.js"></script>
        <script src="<?php echo base_url(); ?>mainsite_files/js/script.js"></script>
        <script src="<?php echo base_url(); ?>mainsite_files/js/superfish.js"></script>
        <script src="<?php echo base_url(); ?>mainsite_files/js/sForm.js"></script>
        <script src="<?php echo base_url(); ?>mainsite_files/js/jquery.ui.totop.js"></script>
        <script src="<?php echo base_url(); ?>mainsite_files/js/jquery.equalheights.js"></script>
        <script src="<?php echo base_url(); ?>mainsite_files/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url(); ?>mainsite_files/js/jquery.iosslider.min.js"></script>
        <script type="text/javascript">
            function prevent_back() {
                window.history.forward();
                window.onunload = function() {
                    null;
                };
            }
        </script>
        <script>
            $(document).ready(function() {
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <!--[if lt IE 8]>
        <div style=' clear: both; text-align:center; position: relative;'>
                <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                        <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
                </a>
        </div>
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <link rel="stylesheet" media="screen" href="css/ie.css">
        <![endif]-->
    </head>
    <body class="page1" id="top">
        <!--==============================header=================================-->
        <header>
            <div class="container_12">
                <div class="grid_12">
                    <h1>
                        <a href="<?php echo base_url(); ?>web_welcome">
                            <img src="<?php echo base_url(); ?>mainsite_files/images/lg.png" >
                        </a>
                    </h1>
                    <div class="menu_block ">
                        <!--                        <a href="#" class="donate">DONATE</a>-->
                        <br><br><br>
                        <div class="clear"></div>
                        <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                            <ul class="sf-menu">
                                <li class="<?php echo $current1; ?>"><a href="<?php echo base_url(); ?>web_welcome">Home</a></li>
                                <li class="<?php echo $current2; ?>"><a href="<?php echo base_url(); ?>web_welcome/what_we_do">What We Do</a></li>
                                <li class="<?php echo $current3; ?>"><a href="<?php echo base_url(); ?>web_welcome/gallery">Gallery</a></li>
                                <!--<li><a href="<?php echo base_url(); ?>blog_welcome">Our Blog</a></li>-->
                                <li class="<?php echo $current5; ?>"><a href="<?php echo base_url(); ?>web_welcome/contacts">Contacts</a></li>
                                <?php
                                $message = $this->session->userdata('user_first_name');
                                if ($message) {
                                    ?>
                                    <li class="<?php echo $current6; ?>"><a href="<?php echo base_url(); ?>user/user_profile/<?php echo $this->session->userdata('user_id');?>"><?php echo $message; ?></a></li>
                                    <li class=""><a href="<?php echo base_url(); ?>web_welcome/user_logout" onclick="prevent_back()">Log Out</a></li>

                                    <?php
                                } else {
                                    ?>
                                    <li class="<?php echo $current6; ?>"><a href="<?php echo base_url(); ?>web_welcome/member_login">Login</a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </header>
        <?php if ($slider) { ?>
            <div class="fluidHeight container_12">
                <div class="sliderContainer">
                    <div class="iosSlider">
                        <div class="slider">
                            <div class="item item1">
                                <div class="inner">
                                    <div class="text1"><span>Join our campaigns and give <br>hope to homeless people</span></div>
                                </div>
                            </div>
                            <div class="item item2">
                                <div class="inner">
                                    <div class="text1"><span>Make the right choice! <br>Help those who are in need.</span></div>
                                </div>
                            </div>
                            <div class="item item3">
                                <div class="inner">
                                    <div class="text1"><span>Our mission is to engage more people in the fight <br> for better life of needy people</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slideSelectors">
                        <div class="item selected"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--==============================Content=================================-->
        <?php echo $web_main_content; ?>
        <!--==============================Footer_content=================================-->
        <br>
        <div class="bottom_block">
            <div class="container_12">
                <div class="grid_4">
                    <h3>Stay Informed</h3>
                    <div class="text1">Subscribe to Our Newsletter</div>
                    <form id="newsletter">
                        <div class="rel">
                            <div class="success">Your subscribe request has been sent!</div>
                            <label class="email">
                                <input type="email" value="Enter your Email" >
                                <span class="error">*This is not a valid email address.</span>
                            </label>
                        </div>
                        <a href="#" class="btn" data-type="submit">Submit</a>
                    </form>
                </div>
                <div class="grid_5 prefix_3">
                    <h3>Stay Connected</h3>
                    <div class="text1">Follow Us on Social Media Accounts </div>
                    Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra
                    <div class="socials">
                        <a href="#"><div class="fa fa-twitter"></div></a>
                        <a href="https://www.facebook.com/YouthsReflection"><div class="fa fa-facebook"></div></a>
                        <a href="#"><div class="fa fa-pinterest-square"></div></a>
                        <a href="#"><div class="fa fa-google-plus"></div></a>
                        <a href="#"><div class="fa fa-instagram"></div></a>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================footer=================================-->
        <footer>
            <div class="container_12">
                <div class="grid_12">
                    <div class="copy">
                        Youth's Reflection &copy; 2015 | <a href="#">Privacy Policy</a> <br> Website designed by youth's reflection</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php echo base_url(); ?>mainsite_files/js/jquery.hoverdir.js"></script>
        <script>
                                        $(document).ready(function() {
                                            $('.iosSlider').iosSlider({
                                                desktopClickDrag: true,
                                                snapToChildren: true,
                                                navSlideSelector: '.sliderContainer .slideSelectors .item',
                                                onSlideComplete: slideComplete,
                                                onSliderLoaded: sliderLoaded,
                                                onSlideChange: slideChange,
                                                scrollbar: false,
                                                autoSlide: true,
                                                autoSlideTimer: 3300,
                                                infiniteSlider: true
                                            });
                                        });
                                        function slideChange(args) {
                                            $('.sliderContainer .slideSelectors .item').removeClass('selected');
                                            $('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
                                        }
                                        function slideComplete(args) {
                                            if (!args.slideChanged)
                                                return false;
                                            $(args.sliderObject).find('.text1, .text2').attr('style', '');
                                            $(args.currentSlideObject).find('.text1').animate({
                                                right: '100px',
                                                opacity: '0.72'
                                            }, 400, 'easeOutQuint');
                                            $(args.currentSlideObject).find('.text2').delay(200).animate({
                                                right: '70px',
                                                opacity: '0.72'
                                            }, 400, 'easeOutQuint');
                                        }
                                        function sliderLoaded(args) {
                                            $(args.sliderObject).find('.text1, .text2').attr('style', '');
                                            $(args.currentSlideObject).find('.text1').animate({
                                                right: '100px',
                                                opacity: '0.72'
                                            }, 400, 'easeOutQuint');
                                            $(args.currentSlideObject).find('.text2').delay(200).animate({
                                                right: '70px',
                                                opacity: '0.72'
                                            }, 400, 'easeOutQuint');
                                            slideChange(args);
                                        }
                                        $(function() {
                                            $(' #da-thumbs > li ').each(function() {
                                                $(this).hoverdir();
                                            });
                                        });
        </script>
    </body>
</html>