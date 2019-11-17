<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="main-wrapper">
        <div class="container">
            <?php
            echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : FALSE;
            ?>
            <h1>Register</h1>
            <div class="row">
                <div class="col-md-6">
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
</main>
<?php $this->load->view('templates/loadjs'); ?>