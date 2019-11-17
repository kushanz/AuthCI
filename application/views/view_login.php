<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Design Bootstrap Template</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('app/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="<?php echo base_url('app/css/mdb.min.css') ?>" rel="stylesheet">

        <!--   style -->
        <link href="<?php echo base_url('app/css/style.css') ?>" rel="stylesheet">

        <!--custom css for usr-->
        <link href="<?php echo base_url('app/css/custom.css') ?>" rel="stylesheet" />

    </head>
    <body>
        <!-- SideNav slide-out button -->
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        <!--header bar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav mdb-color">
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <!-- <p>Login</p> -->
            </div>
            <!--Navigation icons-->
            <ul class="nav-icons">
                <li class=" waves-effect waves-light"><a data-target="#contactForm" data-toggle="modal" class="" href="#"><i class="fa fa-envelope-o"></i><br><span>Contact</span></a></li>
                <li class=" waves-effect waves-light"><a class="" href="#"><i class="fa fa-comments-o"></i><br><span>Support</span></a></li>

            </ul>
        </nav>
        <!--end header -->
        <!--   main-->
        <section>
            <div class="main-wrapper">
                <div class="login-form">
                <div class="card">
                   <?php echo form_open(); ?>
                        <h3 class="card-header primary-color white-text">Login</h3>
                        <div class="card-block">

                            <!--Email validation-->
                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <?php echo form_input('username',set_value('username')) ?>
                                <?php echo form_error('username',"<span class='myerror pull-right'>","</span>") ?>
                              <!--   <input type="text" id="username" name="username" class="form-control validate"> -->
                            </div>

                            <!--Password validation-->
                            <div class="md-form">
                                <i class="fa fa-lock prefix"></i>
                                <?php echo form_password('password') ?>
                                <?php echo form_error('password',"<span class='myerror pull-right'>","</span>") ?>
                                <!-- <input type="password" id="password" name="password" class="form-control validate"> -->
                            </div>  
                            <div class="text-xs-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="text-xs-center">
                                <p>
                                    Not a member?
                                    <a id="pop_signup" href="<?php echo base_url('register') ?>">Sign Up</a>
                                </p>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                    <?php // echo validation_errors(); ?>
                </div>
               
                </div>
            </div>
        </section>
        <!--   end main-->
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="<?php echo base_url('app/js/jquery-2.2.1.min.js') ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('app/js/tether.js') ?>"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?php echo base_url('app/js/bootstrap.min.js') ?>"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="<?php echo base_url('app/js/mdb.min.js') ?>"></script>
        <!--    custom javacript-->
        <script type="text/javascript" src="<?php echo base_url('app/js/script.js') ?>"></script>
    </body>

</html>