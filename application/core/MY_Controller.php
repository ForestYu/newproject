<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller{

    public $_CI;

    public function __construct(){
        parent::__construct();
        $this->_CI = &get_instance();
        $this->load->helper('url');//引入辅助类（help文件夹下面的url_helper.php  作用是在模板中生成地址）
    }


    //这里居然昨天发生冲突，研究一下

}




