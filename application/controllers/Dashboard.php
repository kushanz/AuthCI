<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dashboard extends Auth_Controller {
 
    public function index()
    {
        print_r($this->ion_auth->user()->row());
        print_r($this->ion_auth->groups()->result());
        $this->load->view('dashboard');
    }
}