<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    public $_CI;

    public function __construct(){
        parent::__construct();
        $this->_CI = &get_instance();
    }


}




