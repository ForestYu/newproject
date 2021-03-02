<?php
/**
* 自己创建的类文件
*
*   没有继承 CI_Controller  需要使用CI框架原生资源的时候
*   -----------以下来自手册------------------------------------------------------------------------------
*   在你的类库中使用 CodeIgniter 资源
*
*   在你的类库中使用 get_instance() 函数来访问 CodeIgniter 的原生资源，这个函数返回 CodeIgniter 超级对象。
*
*   通常情况下，在你的控制器方法中你会使用 $this 来调用所有可用的 CodeIgniter 方法:
*
*   $this->load->helper('url');
*   $this->load->library('session');
*   $this->config->item('base_url');
*
*   但是 $this 只能在你的控制器、模型或视图中直接使用，如果你想在你自己的类中使用 CodeIgniter 类，你可以像下面这样做：
*
*   首先，将 CodeIgniter 对象赋值给一个变量:
*
*   $CI =& get_instance();
*
*   一旦你把 CodeIgniter 对象赋值给一个变量之后，你就可以使用这个变量来 代替 $this
*   $CI =& get_instance();
*
*
*   $CI->load->helper('url');
*   $CI->load->library('session');
*   $CI->config->item('base_url');
*   --------------------------------------------------------------------------------------------------end-
*/
class ShowTestClass{

    public $CI;

    public function __construct(argument)
    {
        $this->CI = & get_instance();//获取Ci超级变量(之后可以用$CI来使用CI自带的一些东西)
    }
}