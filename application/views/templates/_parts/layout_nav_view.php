<!-- SideNav slide-out button -->
<a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
<!--/. SideNav slide-out button -->
<!-- Sidebar navigation -->
<ul id="slide-out" class="side-nav fixed admin-side-nav dark-side-nav">

    <div class="logo-wrapper">
        <img src="http://0.gravatar.com/avatar/60efa32c26a19f3ed2e42798afb705ba?s=100&d=mm&r=g" class="img-fluid img-circle">
        <div class="rgba-stylish-strong">
            <p class="user white-text"><?php echo $userdata->username ?>
                <br> <?php echo $userdata->email ?>
            </p>
        </div>
    </div>

    <!-- Side navigation links -->
    <ul class="collapsible collapsible-accordion">
        <li class="<?php echo active_menu_controller('Dashboard'); ?>">
            <a href="<?php echo base_url('Dashboard') ?>" class="waves-light"><i class="fa fa-home"></i> Home</a>
        </li>
        
        <li class="<?php echo active_menu_controller('Product') ?>">
            <a class="collapsible-header waves-effect <?php echo active_menu_controller('Product') ?>"><i class="fa fa-bars"></i>Product</a>
            <div class="collapsible-body">
                <ul>
                    <li class="<?php echo active_menu_function('addProduct') ?>">
                        <a href="<?php echo base_url('Product/addProduct') ?>" class="waves-effect">Add Product</a>
                    </li>
                    <li><a href="#" class="waves-effect">Link</a>
                    </li>
                </ul>
            </div>
        </li>
        
        <li class="<?php echo active_menu_controller('Customer'); ?>">
            <a href="<?php echo base_url('Customer') ?>" class="waves-light"><i class="fa fa-money"></i> Customer</a>
        </li>
        
        <li><a href="#" class="waves-light"><i class="fa fa-line-chart"></i> Conversion</a></li>
        <li><a href="#" class="waves-light"><i class="fa fa-users"></i> Website Traffic</a></li>
        <li><a href="#" class="waves-light"><i class="fa fa-search"></i> SEO</a></li>
        <li class="<?php echo active_menu_controller('Categories'); ?>">
            <a href="#" class="collapsible-header waves-effect <?php echo active_menu_controller('Categories'); ?>"><i class="fa fa-share-alt"></i> Category</a>
            <div class="collapsible-body">
                <ul>
                    <li class="<?php echo active_menu_function('index'); ?>"><a href="<?php echo base_url('Categories') ?>" class="waves-light">categorization</a></li>
                    <li><a href="#" class="waves-light">add category</a></li>
                </ul>
            </div>
        </li>
        
        <li class="<?php echo active_menu_controller('Register') ?>">
            <a class="collapsible-header waves-effect <?php echo active_menu_controller('Register') ?>"><i class="fa fa-users"></i>Autherization</a>
            <div class="collapsible-body">
                <ul>
                    <li class="<?php echo active_menu_function('index') ?>"><a href="<?php echo base_url('Register') ?>" class="waves-light">New User</a></li>
                    <li><a href="#" class="waves-light">Profile</a></li>
                </ul>
            </div>
        </li>
    </ul>
    <!--/. Side navigation links -->
</ul>
<!--/. Sidebar navigation -->