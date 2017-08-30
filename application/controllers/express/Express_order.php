<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   快递订单查询
*/
class Express_order extends Base
{

    public function __construct(argument){
        # code...
        parent::__construct(argument);
    }


    /**
     * 输入快递号查询信息
     * [input_order description]
     * @return [type] [description]
     */
    public function check_order(){
        if($_POST){
            $typeCom = $_GET["com"];//快递公司
            $typeNu = $_GET["nu"];  //快递单号

            $AppKey='XXXXXX';//请将XXXXXX替换成您在http://kuaidi100.com/app/reg.html申请到的KEY
            $url ='http://api.kuaidi100.com/api?id='.$AppKey.'&com='.$typeCom.'&nu='.$typeNu.'&show=2&muti=1&order=asc';

            //请勿删除变量$powered 的信息，否者本站将不再为你提供快递接口服务。
            $powered = '查询数据由：<a href="http://kuaidi100.com" target="_blank">KuaiDi100.Com （快递100）</a> 网站提供 ';

        }else{
            echo '这里加载输入页面';
        }
    }

}
