<?php
/**
 *
 */
class Express_model extends CI_Model{

    private $_date;
    private $_time;

    public function __construct()
    {
        parent::__construct();
        $this->_time = time(); //当前时间戳
        $this->_date = date("Y-m-d",$this->_time);//今天日期
        $this->load->database();
    }

    /**
     * 获取访问信息列表
     * [get_access_list description]
     * @return [type] [description]
     */
    public function get_access_list($limit=10,$page=1){
        $sql = "SELECT * FROM `client` ORDER BY access_id DESC LIMIT ".$limit*($page-1).",".$limit;
        $re = $this->db->query($sql);
        return $re->result('array');
    }

    /**
     * 添加访问信息记录
     * [add_access_message description]
     * @param string $user_ip [description]
     */
    public function add_access_message($user_ip=''){
        if(empty($user_ip)){
            return false;
        }

        $data = array(
            'client_ip' => ip2long($user_ip),
            'client_ip_str' => trim($user_ip),
            'add_date' => $this->_date,
            'add_time' => $this->_time,
            'date_time'=> date('Y-m-d H:i:s',$this->_time)
        );
        $re = $this->db->insert('client',$data);
        return $re;
    }


}