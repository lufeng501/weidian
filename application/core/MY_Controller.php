<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Descript: 扩展CI_Controller
 * User: lufeng501206@gmail.com
 * Date: 2016/10/16 19:25
 */
class MY_Controller extends CI_Controller
{
    public function __construct($activeMenuKey="") {
        parent::__construct();
        $initMenus = array(
            array("menu_name" => "首页", "menu_key" =>"index", "state" => "free", "link" => "/admin/index"),
            array("menu_name" => "商品管理", "menu_key" =>"products_manager", "state" => "free", "link" => "/admin/products"),
            array("menu_name" => "分类管理", "menu_key" =>"category_manager", "state" => "free", "link" => "#"),
            array("menu_name" => "订单管理", "menu_key" =>"order_manager", "state" => "free", "link" => "#"),
        );
        $this->menus = $this->buildMenusParams($initMenus,$activeMenuKey);
    }

    /**
     * 组装导航数据
     * @param $mens
     * @param $active
     * @param string $link
     * @return array
     */
    private function buildMenusParams($menus,$activeMenuKey,$link="#") {
        $lists = array();
        if(!empty($menus) && is_array($menus)) {
            foreach($menus as $key => &$value) {
                if($value['menu_key'] == $activeMenuKey) {
                    $value['state'] = 'active';
                }
            }
            $lists = $menus;
        }
        return $lists;
    }
}