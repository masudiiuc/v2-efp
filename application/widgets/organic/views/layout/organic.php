<html>
    <head>
        <title>Eco-Friendly Party&trade;</title>

        <link href="<?php echo base_url() ?>public/bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>public/css/style.css" media="screen" rel="stylesheet" type="text/css" />
    </head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="#">Project name</a>
                <div class="nav-collapse collapse">
                    <p class="navbar-text pull-right">
                        Logged in as <a href="#" class="navbar-link"><?php echo $email;?></a>
                    </p>
                    <ul class="nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="vendors/logout">Logout</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row-fluid">

            <div class="span9">
                <br/>
                <?php echo $content_for_layout ?>

            </div>

            <div class="span3 left-sidebar-top">

                <?php $this->load->view('sections/left-sidebar.php'); ?>

            </div>
        </div>

        <footer class="footer">
            <p>&copy; Company 2012</p>
        </footer>

    </div><!--/.fluid-container-->

    <script type="text/javascript" src="<?php echo base_url() ?>public/bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery-latest.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery.validate.js"></script>
    <script type="text/javascript" >
        $(document).ready(function () {
            $("#LoginForm").validate();
        });
    </script>
</body>
</html>