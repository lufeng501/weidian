<?php

/**
 * Describe:
 * User: lufeng501@126.com
 * Date: 2016-10-10 21:22
 */
class Common_Service extends MY_Service
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
    }

    public function getProductsLists( )
    {
        $lists = $this->products_model->getLists();
        return $lists;
    }
}