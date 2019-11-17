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
        <link href="<?php echo base_url('app') ?>/css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="<?php echo base_url('app') ?>/css/mdb.min.css" rel="stylesheet">

        <!--   style -->
        <link href="<?php echo base_url('app') ?>/css/style.css" rel="stylesheet">

        <!--custom css for usr-->
        <link href="<?php echo base_url('app') ?>/css/custom.css" rel="stylesheet" />

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
                    
                    <h3 class="card-header primary-color white-text">Register</h3>
                    <div class="card-block">
                            <?php echo form_open(); ?>
                            <div class="md-form">
                                <?php
                                echo form_label('First name:', 'first_name');
                                echo form_input('first_name', set_value('first_name'));
                                echo form_error('first_name', "<span class='myerror pull-right'>", "</span>");
                                ?>
                            </div>
                            <div class="md-form">
                                <?php
                                echo form_label('Last name:', 'last_name');
                                echo form_input('last_name', set_value('last_name'));
                                echo form_error('last_name', "<span class='myerror pull-right'>", "</span>");
                                ?>
                            </div>
                            <div class="md-form">
                                <?php
                                echo form_label('Username:', 'username');
                                echo form_input('username', set_value('username'));
                                echo form_error('username', "<span class='myerror pull-right'>", "</span>");
                                ?>    
                            </div>
                            <div class="md-form">
                                <?php
                                echo form_label('Email:', 'email');
                                echo form_input('email', set_value('email'));
                                echo form_error('email', "<span class='myerror pull-right'>", "</span>");
                                ?>
                            </div>
                            <div class="md-form">
                                <?php
                                echo form_label('Password:', 'password');
                                echo form_password('password');
                                echo form_error('password', "<span class='myerror pull-right'>", "</span>");
                                ?>
                            </div>
                            <div class="md-form">
                                <?php
                                echo form_label('Confirm password:', 'confirm_password');
                                echo form_password('confirm_password');
                                echo form_error('confirm_password', "<span class='myerror pull-right'>", "</span>");
                                ?>
                            </div>
                            <?php
                            echo form_submit('register', 'Register');
                            echo form_close();
                            ?>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--   end main-->
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="<?php echo base_url('app') ?>/js/jquery-2.2.1.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url('app') ?>/js/tether.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?php echo base_url('app') ?>/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="<?php echo base_url('app') ?>/js/mdb.min.js"></script>
        <!--    custom javacript-->
        <script type="text/javascript" src="<?php echo base_url('app') ?>/js/script.js"></script>
    </body>

</html>