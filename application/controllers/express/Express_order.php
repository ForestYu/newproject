<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   快递订单查询
*/

class Express_order extends MY_Controller
{

    public $my_post;
    public $my_get;

    public function __construct(){
        # code...
        parent::__construct();
        $this->my_post = $this->input->post('',TRUE);//将所有post数据过滤之后使用
        $this->my_get = $this->input->get('',TRUE);//将所有get数据过滤之后使用
    }


    public function index(){
        echo 'this is express/Express_order';
    }

    /**
     * 打印显示收到的参数
     * [show description]
     * @return [type] [description]
     */
    public function show($a=1,$b=2,$c=3){
      print_r($a);
      var_dump($b);
      var_dump($c);
      var_dump($this->input->server('HTTP_HOST'));
      var_dump($this->input->ip_address());
      var_dump($this->input->user_agent());
    }

    /**
     * 输入快递号查询信息
     * [input_order description]
     * @return [type] [description]
     */
    public function check_order(){
        if($_POST){
            /*$typeCom = trim($_POST["com"]);//快递公司
            $typeNu = trim($_POST["nu"]);  //快递单号*/

            //使用ci框架的输入类来过滤可能存在的恶意输入注入攻击等，而不是直接使用$_POST 或者 $_GET
            $typeCom = trim($this->input->post('com',TRUE));
            $typeNu = trim($this->input->post('nu',TRUE));




            $AppKey=EXPRESS_APP_KEY;//请将XXXXXX替换成您在http://kuaidi100.com/app/reg.html申请到的KEY
            $url ='http://api.kuaidi100.com/api?id='.$AppKey.'&com='.$typeCom.'&nu='.$typeNu.'&show=0&muti=1&order=asc';

            //请勿删除变量$powered 的信息，否者本站将不再为你提供快递接口服务。
            $powered = '查询数据由：<a href="http://kuaidi100.com" target="_blank">KuaiDi100.Com （快递100）</a> 网站提供 ';
            $re = $this->get_msg();
            echo $re;
            exit;
        }else{
            echo '这里加载输入页面';
<<<<<<< HEAD
=======
            echo STATIC_SRC;

            /*$this->load->library('parser');*/
>>>>>>> dev-url
            $params = array('name' => "张山", "phone"=>"15565896895");
            $this->load->view('express\example.php',$params);
        }
    }



    /**
     * 请求借口之后获取返回信息(采集函数)
     */
    private function get_msg(){
        if (function_exists('curl_init') == 1){
          $curl = curl_init();
          curl_setopt ($curl, CURLOPT_URL, $url);
          curl_setopt ($curl, CURLOPT_HEADER,0);
          curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt ($curl, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
          curl_setopt ($curl, CURLOPT_TIMEOUT,5);
          $get_content = curl_exec($curl);
          curl_close ($curl);
        }else{
          // include("snoopy.php");
          // $snoopy = new snoopy();
          // $snoopy->referer = 'http://www.google.com/';//伪装来源
          // $snoopy->fetch($url);
          // $get_content = $snoopy->results;
          //


        }
        return $get_content . '<br/>' . $powered;

        /*print_r($get_content . '<br/>' . $powered);
        exit();*/
    }

}

