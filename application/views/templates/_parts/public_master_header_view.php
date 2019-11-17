<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $page_title;?></title>
    <meta name="description" value="<?php echo $page_description;?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <?php echo $before_closing_head;?>
</head>
<style type="text/css">
	
</style>
<body>
<section class="nav" style="background:#9988ee;padding:20px;">
	<div class="container"><?php echo anchor('user/logout', 'Logout');?></div>
</section>
