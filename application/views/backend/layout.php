<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminIgniter Dasbor</title>
    <link href="<?php echo asset_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo asset_url() ?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo asset_url() ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo asset_url() ?>css/style.css" rel="stylesheet">
</head>
<body class="md-skin">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="<?php echo asset_url() ?>img/profile_small.jpg" />
                                 </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                                 </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="<?php echo backend_url()?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Lorem Ipsum</span></a>
                    </li>
                    
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
            </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Selamat Datang di AdminIgniter</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
            </div>
            <div class="wrapper wrapper-content">
                <?php $this->load->view($page.'_view') ?>
            </div>
            <div class="footer">
                <div class="text-center">
                    <strong>Copyright</strong> AdminIgniter &copy; <?php echo date('Y')?>
                </div>
            </div>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="<?php echo asset_url() ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo asset_url() ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo asset_url() ?>metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo asset_url() ?>slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo asset_url() ?>js/main.js"></script>
</body>
</html>
