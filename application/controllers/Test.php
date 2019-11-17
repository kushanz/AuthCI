<?php

defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';
use chriskacerguis\RestServer\RestController;
class Test extends Api_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function users_get()
    {
        $groups = $this->ion_auth->groups()->result();
        $this->set_response($groups, 200);
    }
}
