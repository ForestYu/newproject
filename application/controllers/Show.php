<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends MY_Controller{

	public function index(){
        var_dump($this->_CI);
		echo 'this is showClass extends BaseClass';
	}



}
