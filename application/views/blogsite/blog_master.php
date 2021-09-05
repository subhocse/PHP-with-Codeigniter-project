<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Cloudset</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo base_url(); ?>blogsite_files/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>blogsite_files/css/coin-slider.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>blogsite_files/js/cufon-yui.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>blogsite_files/js/droid_sans_400-droid_sans_700.font.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>blogsite_files/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>blogsite_files/js/script.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>blogsite_files/js/coin-slider.min.js"></script>
    </head>
    <body>
        <div class="main">
            <div class="header">
                <div class="header_resize">
                    <div class="logo">
                        <h1><a href="index.html">Cloud<span>set</span> <small>Company Slogan Here</small></a></h1>
                    </div>
                    <div class="searchform">
                        <form id="formsearch" name="formsearch" method="post" action="#">
                            <span>
                                <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
                            </span>
                            <input name="button_search" src="<?php echo base_url(); ?>blogsite_files/images/search.gif" class="button_search" type="image" />
                        </form>
                    </div>
                    <div class="clr"></div>
                    <div class="menu_nav">
                        <ul>
                            <li class="active"><a href="<?php echo base_url(); ?>blog_welcome"><span>Home Page</span></a></li>
                            <li><a href="<?php echo base_url(); ?>blog_welcome/support"><span>Support</span></a></li>
                            <li><a href="<?php echo base_url(); ?>blog_welcome/about"><span>About Us</span></a></li>
                            <li><a href="<?php echo base_url(); ?>web_welcome"><span>Our Site</span></a></li>
                            <li><a href="<?php echo base_url(); ?>blog_welcome/contact"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                    <div class="clr"></div>
                    <?php if($slider){?>
                    <div class="slider">
                        <div id="coin-slider"> <a href="#"><img src="<?php echo base_url(); ?>blogsite_files/images/slide1.jpg" width="960" height="335" alt="" /> </a> <a href="#"><img src="<?php echo base_url(); ?>blogsite_files/images/slide2.jpg" width="960" height="335" alt="" /> </a> <a href="#"><img src="<?php echo base_url(); ?>blogsite_files/images/slide3.jpg" width="960" height="335" alt="" /> </a> </div>
                        <div class="clr"></div>
                    </div>
                    <?php }?>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="content">
                <div class="content_resize">
                    
                    <?php echo $blog_main_content; ?>
                    
                    <div class="sidebar">
                        <div class="gadget">
                            <h2 class="star"><span>Sidebar</span> Menu</h2>
                            <div class="clr"></div>
                            <ul class="sb_menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">TemplateInfo</a></li>
                                <li><a href="#">Style Demo</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Archives</a></li>
                                <li><a href="#">Web Templates</a></li>
                            </ul>
                        </div>
                        <div class="gadget">
                            <h2 class="star"><span>Sponsors</span></h2>
                            <div class="clr"></div>
                            <ul class="ex_menu">
                                <li><a href="http://www.dreamtemplate.com/">DreamTemplate</a><br />
                                    Over 6,000+ Premium Web Templates</li>
                                <li><a href="http://www.templatesold.com/">TemplateSOLD</a><br />
                                    Premium WordPress &amp; Joomla Themes</li>
                                <li><a href="http://www.imhosted.com/">ImHosted.com</a><br />
                                    Affordable Web Hosting Provider</li>
                                <li><a href="http://www.megastockphotos.com/">MegaStockPhotos</a><br />
                                    Unlimited Amazing Stock Photos</li>
                                <li><a href="http://www.evrsoft.com/">Evrsoft</a><br />
                                    Website Builder Software &amp; Tools</li>
                                <li><a href="http://www.csshub.com/">CSS Hub</a><br />
                                    Premium CSS Templates</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="fbg">
                <div class="fbg_resize">
                    <div class="col c1">
                        <h2><span>Image</span> Gallery</h2>
                        <a href="#"><img src="<?php echo base_url(); ?>blogsite_files/images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?php echo base_url(); ?>blogsite_files/images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?php echo base_url(); ?>blogsite_files/images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?php echo base_url(); ?>blogsite_files/images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?php echo base_url(); ?>blogsite_files/images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?php echo base_url(); ?>blogsite_files/images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
                    <div class="col c2">
                        <h2><span>Services</span> Overview</h2>
                        <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
                        <ul class="fbg_ul">
                            <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
                            <li><a href="#">Excepteur officia deserunt.</a></li>
                            <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
                        </ul>
                    </div>
                    <div class="col c3">
                        <h2><span>Contact</span> Us</h2>
                        <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
                        <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
                            <span>Telephone:</span> +123-1234-5678<br />
                            <span>FAX:</span> +458-4578<br />
                            <span>Others:</span> +301 - 0125 - 01258<br />
                            <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="footer">
                <div class="footer_resize">
                    <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
                    <p class="rf">Design by Dream <a href="http://www.dreamtemplate.com/">Web Templates</a></p>
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>
        <div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
