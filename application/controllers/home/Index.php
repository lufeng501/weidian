<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-10-07
 * Time: 22:25
 */
class Index extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->service('Common_Service');
    }

    /**
     * 首页
     */
    public function index()
    {
        $lists = $this->common_service->getProductsLists();
        $productsLists = $this->products_model->getProductsRenderData();
        $data['product_lists'] = $productsLists;
        $data['title'] = "代购小店";
        $this->smarty->render('home/index.html',$data);
    }
}