<?php

/**
 * Descript: 小店后台首页
 * User: lufeng501206@gmail.com
 * Date: 2016/10/16 17:46
 */
class Index extends MY_Controller
{

    public function __construct() {
        parent::__construct("index");
    }

    /**
     * 首页-商品管理
     */
    public function index() {
        $data = array();
        $data['menus'] = $this->menus;
        $this->smarty->render('admin/index.html',$data);
    }
}