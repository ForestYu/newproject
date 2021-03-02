<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/29
 * Time: 16:38
 */
class Test_model extends CI_Model{

    public function __construct(){
        parent::__construct();//防止覆盖父类构造器
        $this->load->databases();
    }

}