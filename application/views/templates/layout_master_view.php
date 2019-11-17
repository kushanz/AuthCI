<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/_parts/layout_header_view'); ?>
<?php $this->load->view('templates/_parts/layout_nav_view'); ?>
<?php $this->load->view('templates/_parts/layout_bar_view'); ?>
<?php echo $the_view_content; ?>
<?php $this->load->view('templates/_parts/layout_footer_view');?>