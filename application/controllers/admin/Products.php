<?php

/**
 * Descript: 商品管理控制器
 * User: lufeng501206@gmail.com
 * Date: 2016/10/16 22:58
 */
class Products extends MY_Controller
{

    public function __construct() {
        parent::__construct();
    }

    /**
     * 商品管理页面
     */
    public function index() {
        $this->smarty->render('admin/products.html',$this->renderData);
    }

    /**
     * 商品新增编辑页面
     */
    public function editProductPage() {
        $this->smarty->render("admin/editProductPage.html",$this->renderData);
    }
}