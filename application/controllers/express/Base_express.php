<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 快递相关基础类
*/
class Base_express extends CI_Controller{

    public function __construct(argument)
    {
        parent::__construct(argument);
        echo "this is Base_express";
    }


}