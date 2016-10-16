<?php

/**
 * Descript: 商品管理控制器
 * User: lufeng501206@gmail.com
 * Date: 2016/10/16 22:58
 */
class Products extends MY_Controller
{

    public function __construct() {
        parent::__construct("products_manager");
    }

    public function index() {
        $data = array();
        $data['menus'] = $this->menus;
        $this->smarty->render('admin/products.html',$data);
    }
}