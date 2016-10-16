<?php
/**
 * Describe: 商品模型
 * User: lufeng501@126.com
 * Date: 2016-10-10 21:13
 * @property Products_Model $Products_Model
 */

class Products_model extends CI_Model
{
    /**
     * return Products_Model
     */
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * 获取商品列表
     * @return array
     */
    public function getLists() {
        $query = $this->db->get('products');
        $lists = $query->result_array();
        return $lists;
    }

    /**
     * 获取商品渲染的数据格式
     * @return array
     */
    public function getProductsRenderData() {
        $lists = array();
        $data = $this->getLists();
        if(!empty($data) && is_array($data)) {
            $num = -1;
            foreach($data as $key => $value) {
                if(intval($key%2) == 0){
                    $num ++;
                }
                $lists[$num][] = $value;
            }
        }
        return $lists;
    }

}