<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';
use chriskacerguis\RestServer\RestController;

class Auth_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->data['userdata'] = $this->ion_auth->user()->row();
        if($this->ion_auth->logged_in()===FALSE)
        {
            redirect('login');
        }
    }
}

class Api_Controller extends RestController {
    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->data['userdata'] = $this->ion_auth->user()->row();
        if($this->ion_auth->logged_in()===FALSE)
        {
            $this->response(['unauthorized'], 404);
        }
    }

}