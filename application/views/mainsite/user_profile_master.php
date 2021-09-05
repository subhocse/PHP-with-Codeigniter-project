<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <script type="text/javascript">
            function prevent_back() {
                window.history.forward();
                window.onunload = function() {
                    null;
                };
            }
        </script>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>admin_files/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>admin_files/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>admin_files/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url(); ?>admin_files/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>admin_files/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo base_url(); ?>admin_files/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url(); ?>admin_files/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url(); ?>admin_files/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>admin_files/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>admin_files/jsplugins//iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                User Profile

            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <!--                        <li class="dropdown messages-menu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-envelope"></i>
                                                        <span class="label label-success">4</span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="header">You have 4 messages</li>
                                                        <li>
                                                             inner menu: contains the actual data 
                                                            <ul class="menu">
                                                                <li> start message 
                                                                    <a href="#">
                                                                        <div class="pull-left">
                                                                            <img src="<?php echo base_url(); ?>admin_files/img/avatar3.png" class="img-circle" alt="User Image"/>
                                                                        </div>
                                                                        <h4>
                                                                            Support Team
                                                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                                        </h4>
                                                                        <p>Why not buy a new awesome theme?</p>
                                                                    </a>
                                                                </li> end message 
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="pull-left">
                                                                            <img src="<?php echo base_url(); ?>admin_files/img/avatar2.png" class="img-circle" alt="user image"/>
                                                                        </div>
                                                                        <h4>
                                                                            AdminLTE Design Team
                                                                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                                        </h4>
                                                                        <p>Why not buy a new awesome theme?</p>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="pull-left">
                                                                            <img src="<?php echo base_url(); ?>admin_files/img/avatar.png" class="img-circle" alt="user image"/>
                                                                        </div>
                                                                        <h4>
                                                                            Developers
                                                                            <small><i class="fa fa-clock-o"></i> Today</small>
                                                                        </h4>
                                                                        <p>Why not buy a new awesome theme?</p>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="pull-left">
                                                                            <img src="<?php echo base_url(); ?>admin_files/img/avatar2.png" class="img-circle" alt="user image"/>
                                                                        </div>
                                                                        <h4>
                                                                            Sales Department
                                                                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                                        </h4>
                                                                        <p>Why not buy a new awesome theme?</p>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="pull-left">
                                                                            <img src="<?php echo base_url(); ?>admin_files/img/avatar.png" class="img-circle" alt="user image"/>
                                                                        </div>
                                                                        <h4>
                                                                            Reviewers
                                                                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                                        </h4>
                                                                        <p>Why not buy a new awesome theme?</p>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="footer"><a href="#">See All Messages</a></li>
                                                    </ul>
                                                </li>-->
                        <!-- Notifications: style can be found in dropdown.less -->
                        <!--                        <li class="dropdown notifications-menu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-warning"></i>
                                                        <span class="label label-warning">10</span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="header">You have 10 notifications</li>
                                                        <li>
                                                             inner menu: contains the actual data 
                                                            <ul class="menu">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-users warning"></i> 5 new members joined
                                                                    </a>
                                                                </li>
                        
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="ion ion-ios7-cart success"></i> 25 sales made
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="ion ion-ios7-person danger"></i> You changed your username
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="footer"><a href="#">View all</a></li>
                                                    </ul>
                                                </li>-->
                        <!-- Tasks: style can be found in dropdown.less -->
                        <!--                        <li class="dropdown tasks-menu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-tasks"></i>
                                                        <span class="label label-danger">9</span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="header">You have 9 tasks</li>
                                                        <li>
                                                             inner menu: contains the actual data 
                                                            <ul class="menu">
                                                                <li> Task item 
                                                                    <a href="#">
                                                                        <h3>
                                                                            Design some buttons
                                                                            <small class="pull-right">20%</small>
                                                                        </h3>
                                                                        <div class="progress xs">
                                                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                <span class="sr-only">20% Complete</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li> end task item 
                                                                <li> Task item 
                                                                    <a href="#">
                                                                        <h3>
                                                                            Create a nice theme
                                                                            <small class="pull-right">40%</small>
                                                                        </h3>
                                                                        <div class="progress xs">
                                                                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                <span class="sr-only">40% Complete</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li> end task item 
                                                                <li> Task item 
                                                                    <a href="#">
                                                                        <h3>
                                                                            Some task I need to do
                                                                            <small class="pull-right">60%</small>
                                                                        </h3>
                                                                        <div class="progress xs">
                                                                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                <span class="sr-only">60% Complete</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li> end task item 
                                                                <li> Task item 
                                                                    <a href="#">
                                                                        <h3>
                                                                            Make beautiful transitions
                                                                            <small class="pull-right">80%</small>
                                                                        </h3>
                                                                        <div class="progress xs">
                                                                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                <span class="sr-only">80% Complete</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li> end task item 
                                                            </ul>
                                                        </li>
                                                        <li class="footer">
                                                            <a href="#">View all tasks</a>
                                                        </li>
                                                    </ul>
                                                </li>-->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $this->session->userdata('user_full_name'); ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img style="width: 100px; height: 100px;" src="<?php echo base_url() . $this->session->userdata('user_image1'); ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $this->session->userdata('user_first_name') . ' ' . $this->session->userdata('user_last_name'); ?>

                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <?php $id = $this->session->userdata('user_id'); ?>
                                        <a href="<?php echo base_url(); ?>user/user_profile/<?php echo $id; ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>

                                    <div class="pull-right">
                                        <a href='<?php echo base_url(); ?>web_welcome/user_logout' class="btn btn-default btn-flat">Log out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img style="width: 60px; height: 60px;" src="<?php echo base_url() . $this->session->userdata('user_image1'); ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $this->session->userdata('user_first_name')?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!--                     search form 
                                        <form action="#" method="get" class="sidebar-form">
                                            <div class="input-group">
                                                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                                <span class="input-group-btn">
                                                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                         /.search form 
                                         sidebar menu: : style can be found in sidebar.less 
                                        <ul class="sidebar-menu">
                                            <li class="active">
                                                <a href="<?php echo base_url(); ?>user/user_dashboard">
                                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                                </a>
                                            </li>
                    
                                            <li class="treeview">
                                                <a href="#">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                    <span>Blog Posts</span>
                                                    <i class="fa fa-angle-left pull-right"></i>
                                                </a>
                                                <ul class="treeview-menu">
                                                    <li><a href="<?php echo base_url(); ?>user/all_post"><i class="fa fa-angle-double-right"></i>All Posts</a></li>
                                                    <li><a href="<?php echo base_url(); ?>user/add_new_blog"><i class="fa fa-angle-double-right"></i>Add new</a></li>
                                                   
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="pages/widgets.html">
                                                    <i class="fa fa-th"></i> <span>Comments</span> <small class="badge pull-right bg-green">new</small>
                                                </a>
                                            </li>
                    
                    
                                        </ul>-->
                </section>
                <!-- /.sidebar -->
            </aside>
            <?php echo $profile_main_content; ?>
            <!-- Right side column. Contains the navbar and content of the page -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>admin_files/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>admin_files/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>admin_files/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>admin_files/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>admin_files/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>admin_files/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url(); ?>admin_files/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>admin_files/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>admin_files/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>admin_files/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>admin_files/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>admin_files/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>admin_files/js/AdminLTE/dashboard.js" type="text/javascript"></script>        

    </body>
</html>

