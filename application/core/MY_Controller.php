<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Descript: 扩展CI_Controller
 * User: lufeng501206@gmail.com
 * Date: 2016/10/16 19:25
 */
class MY_Controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $initMenus = array(
            array("menu_name" => "首页", "router" =>"index-index", "state" => "free", "link" => "/admin/index"),
            array("menu_name" => "商品管理", "router" =>"products-index", "state" => "free", "link" => "/admin/products"),
            array("menu_name" => "分类管理", "router" =>"category_manager", "state" => "free", "link" => "#"),
            array("menu_name" => "订单管理", "router" =>"order_manager", "state" => "free", "link" => "#"),
        );
        $router = (array)$this->router;
        $this->renderData['menus'] = $this->buildMenusParams($initMenus,$router['class']."-".$router['method']);
    }

    /**
     * 组装导航数据
     * @param $mens
     * @param $activeRouter
     * @return array
     */
    private function buildMenusParams($menus,$activeRouter) {
        $lists = array();
        if(!empty($menus) && is_array($menus)) {
            foreach($menus as $key => &$value) {
                if($value['router'] == $activeRouter) {
                    $value['state'] = 'active';
                }
            }
            $lists = $menus;
        }
        return $lists;
    }
}